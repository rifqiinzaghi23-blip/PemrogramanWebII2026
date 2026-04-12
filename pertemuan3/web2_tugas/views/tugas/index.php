<h2>Data Tugas</h2>

<a href="index.php?page=tugas&aksi=tambah"
style="background: #28a745; 
color: white; 
padding: 5px 10px; 
text-decoration: none;">+ Tambah Tugas</a>
<br><br>

<table border="1" cellpadding="3" cellspacing="0" width="100%">
<tr style="background: #4facfe;">
    <th>No</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Deadline</th>
    <th>Aksi</th>
</tr>

<?php 
$no=1; while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['judul']; ?></td>
    <td><?= $row['deskripsi']; ?></td>
    <td><?= $row['deadline']; ?></td>
    <td>
    <a href="index.php?page=tugas&aksi=edit&id=<?= $row['id']; ?>" 
       style="
       background:#007bff;
       color:white;
       padding:5px 10px;
       text-decoration:none;
       border-radius:5px;
       margin-right:5px;
       display:inline-block;">
       Edit
    </a>

    <a href="index.php?page=tugas&aksi=hapus&id=<?= $row['id']; ?>" 
       style="
       background:#dc3545;
       color:white;
       padding:5px 10px;
       text-decoration:none;
       border-radius:5px;
       display:inline-block;"
       onclick="return confirm('Yakin ingin menghapus data ini?');">
       Hapus
    </a>
</td>
</tr>
<?php } ?>
</table>