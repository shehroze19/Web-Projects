<?php 
include('Connection.php');
$id = $_GET['id'];
 ?>
<html>
<head>
<title>
 Module 10 Part C
</title>
</head>
<style type="text/css">


</style>


<body>


<h1 style="border-color: black; background: black; text-decoration: underline; color: white; ">
	<CENTER>Prizes and Skills Evaluation </CENTER>
</h1>
<form action="reward_form_complete.php" method="post" style="border: solid; background: grey ">
<table align="center" width="100" border="0"  >
<tr>

<td>
	<label for="scholorshipname" style="text-decoration: underline;" > <b> SCHOLORSHIPS </b> <br>
<br> </label>
</td>

</tr>
<br>
<br>
<tr>
    
 <td colspan="3" width="100"> <label for="FBS" style="white-space: nowrap; letter-spacing: 2px;"> 
  <input type="radio" name="scholorshipname" id="FBS"  > Full Bright Scholorship </label> </td>    
    
</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="HBS" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="scholorshipname" id="HBS" value="Half Bright Scholorship" required>  Half Bright Scholorship 
 </label> </td>    

</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="NS" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="scholorshipname" id="NS" value="None">  No Scholorship </label> </td>    

</tr>
</table>
<br>
<br>
<table align="center" width="100" height="100" border="0" >
<tr>

<td>
	<label for="awardname" style="text-decoration: underline;"> <b> AWARDS </b> <br>
<br>
 </label>
</td>

</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="GMA" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="awardname" id="GMA" value="Gold Medal Award" required >  Gold Medal Award </label> </td>    

</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="SMA" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="awardname" id="SMA" value="Silver Medal Award" > Silver Medal Award </label> </td>    

</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="SMA" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="awardname"  value="Bronze Medal Award" > Bronze Medal Award </label> </td>    

</tr>
<tr>
    
 <td colspan="3" width="100"> <label for="NA" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="awardname" id="NA" value="None"  >  No Award </label> </td>    

</tr>

</table>
<br>
<br>
<table align="center" width="100" height="100" border="0">
<tr>
<td> <label for="sportsname" style="text-decoration: underline;"> <b> SPORTS AWARDS </b> <br>
<br>
 </label> </td>
</tr>
<tr>
<td colspan="3" width="100" > <label for="GAW" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="sportsname" id="GAW" value="Gymnastics Award Winner" required >  Gymnastics Award Winner </label> 
</td>
</tr>
<tr>
<td colspan="3" width="100" > <label for="CAW" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="sportsname" id="CAW" value="Cricket Award Winner" >  Cricket Award Winner </label> 
</td> 
</tr>
<tr>
<td colspan="3" width="100" > <label for="FAW" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="sportsname" id="FAW" value="Football Award Winner" >  Football Award Winner </label> 
</td> 
</tr>
<tr>
<td colspan="3" width="100" > <label for="FAW" style="white-space: nowrap; letter-spacing: 2px;"> <input type="radio" name="sportsname" id="FAW" value="None" >  None </label> 
</td> 
</tr>
</table>
<br>
<br>
<table align="center" width="100" height="100" border="0" >
<tr>

<td>
	<label for="languagename" style="text-decoration: underline;"> <b>Some Other Achievements</b> <br>
<br> </label>
</td>

</tr>

<tr>
    
 <td colspan="3" width="100"> <label for="PLS" style="white-space: nowrap; letter-spacing: 2px;"> <input style="color:black;" type="text"  id="PLS" name="other"  required> 
 </label> 
 </td>    

</tr>
<td>
	<label for="languagename" style="text-decoration: underline;"> <b>GPA</b> <br>
<br> </label>
</td>

</tr>

<tr>
    
 <td colspan="3" width="100"> <label for="PLS" style="white-space: nowrap; letter-spacing: 2px;"> <input style="color:black;" type="text"   name="GPA"  required> 
 </label> 
 </td>    

</tr>

<input type="hidden" name="studentid" value="<?php echo $id;  ?>">


</table>
<br>
<br>
<table align="center" width="100" height="100" border="0">
	
</table>
<br>
<br>
<table align="center" width="100" height="100" border="0" >
<tr>
<td> <button type="submit"  > <img src="css/enterbutton.jpg" width="90" height="40"> </button>    </td>
</tr>
</table>

</form>
</body>
</html>