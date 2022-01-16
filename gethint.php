<?php


$q = intval($_GET['q']);

$con = new mysqli("localhost","ds19003","ade003192021","ds19003");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ds19138");

$sql="SELECT * FROM ougiaroglou WHERE id = '".$q."'";
   
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result)) {
 
  echo "<p>" . $row['Firstname'] . "</p>";
  echo "<p>" . $row['Anakoinwsh'] . "</p>";
  
  
}
echo "</table>";
$sql="SELECT * FROM kokkinos WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result)) {
 
  echo "<p>" . $row['Firstname'] . "</p>";
  echo "<p>" . $row['Anakoinwsh'] . "</p>";
  
  
}
echo "</table>";
mysqli_close($con);
?>