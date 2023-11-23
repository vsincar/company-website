<?php 
require("db_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: black;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid black;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form style="max-width:500px;margin:auto" method="post">
  <h2>Admin Login</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn" name="login">Login</button>
</form>

</body>
</html>
<?php


if(isset($_POST['login']))
{
  $query="SELECT * FROM `login` WHERE `admin_name`='$_POST[usrnm]' AND `pass`='$_POST[psw]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
session_start();
$_SESSION['AdminLoginId']=$_POST['usrnm'];
header("location: Panel.php");
}
else{
  echo "<script>alert('Password or user name is wrong.')</script>";

}
}



?>
