<?php 
include("connection.php");


$query="SELECT * FROM `brand` order by Name";
$result=mysqli_query($con,$query);



echo "<ul class='list-group'>";
echo "<strong><li class='list-group-item alert-info text-center'>Brand</li></strong>";

while($row = mysqli_fetch_assoc($result))
{
	$name_brand=$row['Name'];
	$query2="SELECT * FROM `mobiles` where `brand`='$name_brand' ";
	$result2=mysqli_query($con,$query2);
	$count = mysqli_num_rows($result2);



	echo "<a  href='brand.php?name=".$row['Name']."'><strong><li class='list-group-item text-center'>".$name_brand."<span class='badge'>".$count."</span></li><strong> </a>

	";

}

echo "<strong><li class='list-group-item alert-info text-center'>Price</li></strong>";
echo "<a  href='price_g_45000.php'><li class='list-group-item text-center'> <i class='fa fa-chevron-right' aria-hidden='true'></i> 45000<span class='badge'></span></li> </a>";

echo "<a  href='price_l_45000.php'><li class='list-group-item text-center'>  <i class='fa fa-chevron-left' aria-hidden='true'></i> 45000<span class='badge'></span></li> </a>";


echo "<a  href='price_35000_45000.php'><li class='list-group-item text-center'>35000 - 45000</li> </a>";
echo "<a  href='price_25000_35000.php'><li class='list-group-item text-center'>25000 - 35000</li> </a>";
echo "<a  href='price_15000_25000.php'><li class='list-group-item text-center'>15000 - 25000</li> </a>";
echo "<a  href='price_10000_15000.php'><li class='list-group-item text-center'>10000 - 15000</li> </a>";
echo "<a  href='price_5000_10000.php'><li class='list-group-item text-center'>5000 - 10000</li> </a>";

echo "<a  href='price_5000.php'><li class='list-group-item text-center'>  <i class='fa fa-chevron-left' aria-hidden='true'></i> 5000<span class='badge'></span></li> </a>";

echo "<a  href='all_mobiles.php'><li class='list-group-item text-center'>All Mobiles</li> </a>";

echo "</ul>";



?>