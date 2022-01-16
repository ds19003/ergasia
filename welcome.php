<?php
session_start();
print "hello $_SESSION[name]";
$name=$_SESSION['name'];
  print "<button><a href=\"logout.php\"> logOut</a></button>";
?>

<!DOCTYPE html>
<html>
    <head>
       <title>kathigites</title>   
        <link rel="stylesheet" href="KathigitesCss.css">
    </head>
    <script>
        $("#sub").click( function() 
            {
                var text=$("text").val();
                
            }
    
    
    </script>

<body style="background-color:gray;" >

<form id="myForm"action="upload.php" method="post" >
        
  <table>
    <tr>
      <th>text</th>
        <td> <input type="text" class="txtbox" name="text" id="text"></td>
      </tr>
      <tr>
        <th></th>
          <td>
            <input type="submit" class="btn" name="send"id="sub">
          </td>
      
      </tr>
    
    
    </table>
    
</form>

</body>
</html>
