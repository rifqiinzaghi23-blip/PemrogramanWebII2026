<h2>Edit Tugas</h2>

<form action="index.php?page=tugas&aksi=update" method="POST">
    
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    Judul: <input type="text" name="judul" value="<?= $data['judul']; ?>" required><br><br>
    Deskripsi: <br>
    <textarea name="deskripsi" rows="4" cols="40" required><?= $data['deskripsi']; ?></textarea><br><br>
    Deadline: <input type="date" name="deadline" value="<?= $data['deadline']; ?>" required><br><br>

    <button type="submit">Update</button>
    <a href="index.php?page=tugas">Batal</a>
</form>