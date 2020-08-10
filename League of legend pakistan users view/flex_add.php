<!DOCTYPE html>
<html lang="en">
<?php include("connection.php"); ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Solo Q Ladder</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
  body{
	padding-top: 70px;

  }
#ourtext {
    border: 2px solid #a1a1a1;
    padding: 10px 40px; 
  
    
    border-radius: 25px;
}


</style>
    </head>

    <body>

        <!-- Navigation -->
		<?php include("navbar.php"); ?>      



<?php 

 
$region = "euw1"; //https://developer.riotgames.com/regional-endpoints.html
$summonerName = $_POST['s_name'];
$summonerName = str_replace(' ', '', $summonerName);
$apiKey = "RGAPI-9ce4d79d-c2a7-441d-bf61-bde6c39cd1ef";
 
// PART I. OBTAIN SUMMONERID
 
// construct url to grab the summonerId
$summonerURL = "https://". $region . ".api.riotgames.com/lol/summoner/v3/summoners/by-name/".$summonerName."?api_key=". $apiKey;
 
// grab the results from the url, this will be in a JSON format
if(@$summonerResult = file_get_contents($summonerURL)){

 
// Take the result (JSON encoded string) and converts it into a PHP variable. 
$summonerDecoded = json_decode($summonerResult, true);
 
// to output the associative arrays uncomment the next 2 lines
// echo "<pre>"; // this line will make your array more readable
// print_r($summonerDecoded); //out put your array
 
 
 
// PART II. GET RANK INFORMATION
 
$summonerId = $summonerDecoded['id'];
 
// construct url to grab the rank information
$rankInfoURL = "https://". $region . ".api.riotgames.com/lol/league/v3/positions/by-summoner/". $summonerId ."?api_key=". $apiKey;
 
// grab the results from the url, this will be in a JSON format
$rankInfoResult = file_get_contents($rankInfoURL);
 
// Take the result (JSON encoded string) and converts it into a PHP variable. 
$summonerLeagueItens = json_decode($rankInfoResult, true);
 
// to output the associative arrays uncomment the next 2 lines
// echo "<pre>"; // this line will make your array more readable
// print_r($rankInfoDecoded); //out put your array
 
 
// PART III. Transform the data into information


if (isset($summonerLeagueItens[0]) == false){
$summonerLeagueItens[0]['queueType'] =  "Unranked";
} else { if ($summonerLeagueItens[0]['queueType'] == "RANKED_FLEX_SR") {
@$sum_name = $summonerLeagueItens[0]['playerOrTeamName'];//name
@$tier = $summonerLeagueItens[0]['tier'];
@$rank = $summonerLeagueItens[0]['rank'];
@$wins = $summonerLeagueItens[0]['wins'];
@$loss = $summonerLeagueItens[0]['losses'];
@$lp= $summonerLeagueItens[0]['leaguePoints'];
}  else {
$summonerLeagueQueueFlex = $summonerLeagueItens[0]['queueType'];
$summonerLeaguesTierFlex = $summonerLeagueItens[0]['tier'];
$summonerLeaguesRankFlex = $summonerLeagueItens[0]['rank'];
$summonerLeaguesWinsFlex = $summonerLeagueItens[0]['wins'];
$summonerLeaguesLoseFlex = $summonerLeagueItens[0]['losses'];
$summonerLeaguesPdlsFlex = $summonerLeagueItens[0]['leaguePoints'];
}}
if (isset($summonerLeagueItens[1]) == false){
$summonerLeagueItens[1]['queueType'] =  "Unranked";
}
else { if ($summonerLeagueItens[1]['queueType'] == "RANKED_FLEX_SR") {
@$sum_name = $summonerLeagueItens[1]['playerOrTeamName'];//name
@$tier = $summonerLeagueItens[1]['tier'];
@$rank = $summonerLeagueItens[1]['rank'];
@$wins = $summonerLeagueItens[1]['wins'];
@$loss = $summonerLeagueItens[1]['losses'];
@$lp= $summonerLeagueItens[1]['leaguePoints'];
}  else {
$summonerLeagueQueueFlex = $summonerLeagueItens[1]['queueType'];
$summonerLeaguesTierFlex = $summonerLeagueItens[1]['tier'];
$summonerLeaguesRankFlex = $summonerLeagueItens[1]['rank'];
$summonerLeaguesWinsFlex = $summonerLeagueItens[1]['wins'];
$summonerLeaguesLoseFlex = $summonerLeagueItens[1]['losses'];
$summonerLeaguesPdlsFlex = $summonerLeagueItens[1]['leaguePoints'];
}}


 
 
@$winrate=$wins/($wins+$loss)*100;
@$position=0;


if(@$tier=="BRONZE"){
$position=$position+0;
}
elseif(@$tier=="SILVER"){
$position=$position+6;
}

elseif(@$tier=="GOLD"){
$position=$position+11;
}

elseif(@$tier=="PLATINUM"){
$position=$position+16;
}

elseif(@$tier=="DIAMOND"){
$position=$position+21;
}

elseif(@$tier=="MASTER"){
$position=$position+26;
}

elseif(@$tier=="CHALLENGER"){
$position=$position+31;
}

if(@$rank=="I"){
	$position=$position+4;
}
elseif(@$rank=="II"){
	$position=$position+3;
}
elseif(@$rank=="III"){
	$position=$position+2;
}

elseif(@$rank=="IV"){
	$position=$position+1;
}
elseif(@$rank=="V"){
	$position=$position+0;
}


@$position=$position+($lp/100);


$query="INSERT INTO `flex`(`Name`, `Division`, `Rank`, `Lp`, `wins`, `loss`, `winrate`, `position`) VALUES ('$sum_name','$tier','$rank','$lp','$wins','$loss','$winrate','$position');";
		

		$runner=mysqli_query($con,$query);


		if($runner){
			echo "<div class='btn btn-block alert-success'>Record Successfully Inserted</div>";
			header("Location: flex.php");
		}
		else{
			echo "<div class='btn btn-block alert-danger'>Error Record Already Exists or is unraked</div>";
			echo "<a href='flex.php'><div class='btn btn-block alert-danger'>Go Back</div></a>";


		}


}
else{
	echo "<div class='btn btn-block btn-danger'>Sorry No user Found by that name :(</div>";
			echo "<a href='flex.php'><div class='btn btn-block alert-danger'>Go Back</div></a>";


}

 ?>


        <!-- Footer -->
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-inline">
                        
                           
                          
                        </ul>
                        <p class="copyright text-muted small">Copyright &copy;Shozi</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
