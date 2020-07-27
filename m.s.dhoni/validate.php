<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'pro');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pwd'];
$player = $_POST['player'];

$s = "select * from reg_table where Email = '$email' && Password = '$pass'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    
    
header('Location:index.php');
}
else{
    
    header('Location:login.php');
}

?>