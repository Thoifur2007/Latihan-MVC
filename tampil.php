<?php
include 'database.php';
$db = new database();
?>


<h1>CRUD OOP</h1>
<a href="input.php">Tambah Data</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($db->tampil() as $x) {

    
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nama']?></td>
        <td><?php echo $x['alamat']?></td>
        <td><?php echo $x['umur']?></td>
        <td>
            <a href="edit.php?id=<?php echo $x['id']?>">Edit</a>
            <a href="proses.php?aksi=delete&&id=<?php echo $x['id']?>">Delete</a>
        </td>
    </tr>
    <?php 
    } 
    ?>
</table>