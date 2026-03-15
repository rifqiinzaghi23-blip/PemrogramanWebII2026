<!DOCTYPE html>
<html>
<head>
<title>WEB 2 MVC</title>
</head>

<body>

<div style="background:#333;color:white;padding:10px">

<b>WEB 2 MVC</b>

<a href="index.php?page=mahasiswa" style="color:white;margin-left:20px">
Mahasiswa
</a>

<a href="index.php?page=tugas" style="color:white;margin-left:10px">
Tugas
</a>

<span style="float:right">

<?= $_SESSION['admin']; ?> | 
<a href="logout.php" style="color:white">
Logout
</a>

</span>

</div>

<br>