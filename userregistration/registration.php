<?php
$host = 'localhost';
$dbname = '';
$dbpassword = '';


session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userlogin');
$name = $_POST['user'];
$pass = $_POST['password'];
$realname = $_POST['name'];
$email = $_POST['email'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username already taken";
}
else{
    $reg= " insert into usertable(username, password, name, email) VALUES('$name','$pass','$realname','$email')";
    mysqli_query($con, $reg);
    echo" Registration Successful! ";
}
?>