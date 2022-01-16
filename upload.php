<?php
session_start();
$conn = new mysqli("localhost","ds19003","ade003192021","ds19003");

$text=$_POST['text'];
$firstname=$_SESSION['name'];

if("ougiaroglou"==$_SESSION['name'])
{
    $id="1";
    $sql="INSERT INTO ougiaroglou (id,Firstname,Anakoinwsh)
VALUES('$id','$firstname','$text')";

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else if("kokkinos"==$_SESSION['name'])
{
    $id="2";
    $sql="INSERT INTO kokkinos (id,Firstname,Anakoinwsh)
VALUES('$id','$firstname','$text')";

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>