<h2>Tambah Tugas</h2>

<form action="index.php?page=tugas&aksi=simpan" method="POST">
    
    Judul: <input type="text" name="judul" required><br><br>
    
    Deskripsi: <br>
    <textarea name="deskripsi" rows="4" cols="40" required></textarea><br><br>
    
    Deadline: <input type="date" name="deadline" required><br><br>
    
    <button type="submit">Simpan</button>
    <a href="index.php?page=tugas">Batal</a>
</form>