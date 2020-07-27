<?php
session_start();
header('Location:index.php');
$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'pro');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pwd'];
$player = $_POST['player'];

$s = "select * from reg_table where Name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
echo $num;
print $num;

if($num == 1){
    
    
    echo "Already Registered";
    
}

else{
    
    $a = "insert into reg_table(Name, Email, Password, Favourite_Player) values ('$name', '$email', '$pass', '$player')";
    mysqli_query($con, $a);
    echo "Registration Successful";
}

?>