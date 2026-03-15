<?php
include "config/database.php";

$data = mysqli_query($conn,"SELECT * FROM mahasiswa");
?>

<h2>Data Mahasiswa</h2>

<style>

table{
    border-collapse: collapse;
    width: 80%;
}

table th{
    background:#4e73df;
    color:white;
}

table th, table td{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
}

.btn-edit{
    background:orange;
    color:white;
    padding:5px 10px;
    text-decoration:none;
    border-radius:3px;
}

.btn-hapus{
    background:red;
    color:white;
    padding:5px 10px;
    text-decoration:none;
    border-radius:3px;
}

.btn-tambah{
    display:inline-block;
    margin-bottom:15px;
    background:green;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:4px;
}

</style>

<a href="#" class="btn-tambah">Tambah Mahasiswa</a>

<table>

<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Email</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
while($row=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++ ?></td>
<td><?= $row['nim'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['email'] ?></td>

<td>
<a href="#" class="btn-edit">Edit</a>
<a href="#" class="btn-hapus">Hapus</a>
</td>

</tr>

<?php } ?>

</table>