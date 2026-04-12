<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Sidebar */
.sidebar {
    width: 220px;
    height: 100vh;
    background-color: #493b82;
    padding: 20px;
    box-sizing: border-box;

}

/* Judul */
.sidebar h3 {
    margin-top: 0;
}

/* User */
.sidebar p {
    margin-bottom: 20px;
}

/* Menu */
.menu a {
    display: block;
    background-color: #05b0ff;
    margin-bottom: 10px;
    padding: 12px;
    border-radius: 8px;
    text-decoration: none;
    color: black;
    font-weight: bold;
    transition: 0.3s;
}

/* Hover effect */
.menu a:hover {
    background-color: #be1e8e;
}

/* Logout */
.logout {
    background-color: #e00b0b !important;
    color: black !important;
}
</style>

<div class="sidebar">
    <p>Selamat datang, <b><?= $_SESSION['username'] ?? 'Admin'; ?></b></p>
    

    <div class="menu">
        <a href="index.php?page=dashboard">Dashboard</a>
        <a href="index.php?page=mahasiswa">Data Mahasiswa</a>
        <a href="index.php?page=tugas">Data Tugas</a>
        <a href="index.php?page=auth&aksi=logout" class="logout">Logout</a>
        
    </div>
</div>