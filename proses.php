<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == 'add') {
    $db->input(
        $_POST['nama'],
        $_POST['alamat'],
        $_POST['umur'],
    );
    header('Location:tampil.php');
}
if ($aksi == 'delete'){
    $id = $_GET['id'];
    $db->delete($id);
     
    header('Location:tampil.php');
}
if ($aksi == 'update'){
    $db->edit(
    $_POST['id'],
    $_POST['nama'],
    $_POST['alamat'],
    $_POST['umur']);
     
    header('Location:tampil.php');
}