<!doctype html>
<link rel="stylesheet" href="index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("conneciton");
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'"); var myWindow = window.open("/users/mains", "", "width=200,height=100");</script>';
 
}
if($usertype=="admin"){
?>
<script type="text/javascript">
window.location.href="https://www.islamic-institute.org"</script>
<?php
 
}else{
?>
<script type="text/javascript">
window.location.href="/login/multiuserlogin.php"</script>
<?php
 
}
}else{
echo 'no result';
}
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Multi user login system</title>
</head>
 
<body>
<form method="post">
<table>
<tr>
<td>Username:<input type="text" name="user" placeholder="enter your username"</td>
 
</tr>
<tr>
<td>Password:<input type="password" name="pass" placeholder="enter your password"</td>
</tr>
<tr>
<td>
Select user type: <select name="usertype">
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="Login" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>