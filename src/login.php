
<?php
    $msg="";
 $username = "admin";
 $pass = "1234";
// session_start();
if(isset($_POST["login"])){
  $username = "admin";
  $pass = "1234";
$a=$_POST["username"];
$b = $_POST["pass"];
if($a==$username && $b==$pass){
  
   echo "<script>window.location.href='welcome.php';</script>";
  exit;
  
}
else{
  $msg="User not found";
}

}

  
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
            <th colspan = 2><h2 align = "center">Login</h2></th>
</tr>
<tr>
    <td>UserName:</td>
  <td>  <input type = "text" name = "username"> </td>
</tr>
<tr>
    <td>Password:</td>
  <td>  <input type = "Password" name = "pass"> </td>
</tr>
<tr>

  <td>  <input type = "submit" name = "login" value = "login"> </td>
  <!-- <td>  <input type = "submit" name = "logout" value = "logout"> </td> -->
  
  

  <td>  <p><?php  echo $msg ?></p> </td>

</tr>
    </form>

</body>
</html>
