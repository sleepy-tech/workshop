<?php
if($_SERVER['REQUEST_METHOD'] !='POST'){
    header('Location: Login.php');
    exit();
}
$user_email=$_POST['email'];
echo "<br>";
$user_Password=$_POST['password'];

include 'db-conn.php';


 
$query= "SELECT * FROM `users` WHERE email=? AND Password=?";
$mysql_stmt = mysqli_prepare($conn , $query);
mysqli_stmt_bind_param($mysql_stmt,'ss',$user_email, $user_Password);
mysqli_stmt_execute($mysql_stmt);
$mysqli_result =  mysqli_stmt_get_result($mysql_stmt);

$data   = mysqli_fetch_assoc($mysqli_result);
echo'<pre>';
var_dump($data);
echo '</pre>';
if($data){
    session_start();
    $_SESSION['is_loggedin'] = true;
header("location: dashboard.php");
}else{
    header("location: login.php?error= email or Password incorrect");
}
?>
