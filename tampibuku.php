<?php
include 'database.php';
$db = new database();
?>


<h1>CRUD OOP</h1>
<a href="input.php">Tambah Data</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Buku</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($db->tampilbuku() as $x) {

    
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nama_buku']?></td>
        <td><?php echo $x['pengarang']?></td>
        <td><?php echo $x['penerbit']?></td>
        <td><?php echo $x['harga']?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id']?>">Edit</a>
            <a href="proses.php?aksi=delete&&id=<?php echo $x['id']?>">Delete</a>
        </td>
    </tr>
    <?php 
    } 
    ?>
</table>