<?php
include("database.php");
$db = new database();

$id = $_GET['id'];
$user = mysqli_fetch_assoc(mysqli_query( $db->conn,"select * from tbl__user WHERE id='$id'"));
?>

<form action="proses.php?aksi=update&id<?php echo $id; ?>" method="post">
    <table>
        <tr>
            <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $user['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $user['alamat']?>"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="number" name="umur" value="<?php echo $user['umur']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>