<?php
include("Connection.php");



$result=mysqli_query($con,"select * from personal_detail");




echo "<table border='1' >
<tr>
<td align=center><b>ID</b></td>
<td align=center><b>Name</b></td>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
   
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
  

    echo "</tr>";

}
echo "</table>";

 echo "<div id='responsecontainer' align='center'>";
?>