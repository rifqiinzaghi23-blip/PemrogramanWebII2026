<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#4e73df,#1cc88a);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-container{
    background:white;
    padding:40px;
    width:350px;
    border-radius:10px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.login-container h2{
    text-align:center;
    margin-bottom:25px;
    color:#333;
}

.input-group{
    margin-bottom:15px;
}

.input-group label{
    font-weight:bold;
    display:block;
    margin-bottom:5px;
}

.input-group input{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:14px;
}

.login-btn{
    width:100%;
    padding:12px;
    background:#4e73df;
    border:none;
    color:white;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
}

.login-btn:hover{
    background:#2e59d9;
}

.footer{
    text-align:center;
    margin-top:15px;
    font-size:12px;
    color:#777;
}

</style>

</head>

<body>

<div class="login-container">

<h2>Login Admin</h2>

<form method="POST" action="proses/login.php">

<div class="input-group">
<label>Username</label>
<input type="text" name="username" required>
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" required>
</div>

<button type="submit" class="login-btn">Login</button>

</form>

<div class="footer">
MVC WEB 2 | Sistem Mahasiswa & Tugas
</div>

</div>

</body>
</html>