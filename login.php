<?php
session_start();
include "../config/database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);

if($data){

$_SESSION['login'] = true;
$_SESSION['admin'] = $data['username'];

header("Location: ../index.php?page=dashboard");

}else{

echo "Username atau Password salah";

}
?>