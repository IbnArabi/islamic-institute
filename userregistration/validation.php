<?php
$host = 'localhost';
$dbname = '';
$dbpassword = '';


session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userlogin');
$name = $_POST['user'];
$pass = $_POST['password'];
$realname = $_POST['name'];
$email = $_POST['email'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

    header('location:/users/mains');
}
else{
    echo('Incorrect login')
}
?>