<style>
.dashboard {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    padding: 130px;
    border-radius: 12px;
    color: black;
    min-height: 300px;
}

/* Container menu */
.menu-dashboard {
    display: flex;
    gap: 20px;
    margin-top: 30px;
}

/* Kotak menu */
.card-menu {
    flex: 1;
    padding: 30px;
    text-align: center;
    border-radius: 12px;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    transition: 0.3s;
    color: white;
}

/* Warna tiap menu */
.card-dashboard { background: #5e15c6; }
.card-mahasiswa { background: #28a745; }
.card-tugas { background: #ffc107; color: black; }
.card-logout { background: #dc3545; }

/* Hover */
.card-menu:hover {
    transform: scale(1.05);
    opacity: 0.9;
}
</style>

<div class="dashboard">
    <h2>Dashboard Sistem Informasi Akademik</h2>
    <p>Kelola data mahasiswa dan tugas dengan mudah melalui menu di bawah ini atau di samping kiri.</p>

    <div class="menu-dashboard">
        <a href="index.php?page=dashboard" class="card-menu card-dashboard">
            Dashboard
        </a>

        <a href="index.php?page=mahasiswa" class="card-menu card-mahasiswa">
            Data Mahasiswa
        </a>

        <a href="index.php?page=tugas" class="card-menu card-tugas">
            Data Tugas
        </a>

        <a href="index.php?page=auth&aksi=logout" class="card-menu card-logout">
            Logout
        </a>
    </div>
</div>