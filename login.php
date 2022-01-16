<?php
$conn = new mysqli("localhost","ds19003","ade003192021","ds19003");


   
if(!empty($_POST['login']))
{
    $Username=$_POST['name'];
    
    $Password=$_POST['password'];
    
    $query =" select * from Login where Username ='$Username' and Password='$Password' ";
    
    $result=mysqli_query($conn,$query);
    
    $count= mysqli_num_rows($result);
    
    if($count>0)
    {
        
        print "welcome $_REQUEST[name] ";
        session_start();
        $_SESSION['name']=$_POST['name'];
        print "<a href=\"welcome.php\">goto next page</a>";
        
    }
    else
    {
        echo"failed";
    }
    
}
   ?>