<?php
class database{
    public
    $host = "localhost",
    $usernname = "root",
    $pass = "",
    $db = "xirpl1",
    $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->usernname, $this->pass);
        mysqli_select_db($this->conn, $this->db);
    }
    public function tampilbuku() {
        $query = "SELECT * FROM tbl_buku";
        $sql = mysqli_query( $this->conn, $query );
        return $sql;
    }
    public function inputbuku($nama_buku, $alamat, $umur) {
        $query = "INSERT INTO tbl_buku (nama, alamat, umur) VALUES ('$nama_buku', '$alamat', '$umur')";
        $this->conn->query($query);
    }
    public function deletebuku($id) {
        $query = "DELETE FROM `tbl_buku` WHERE id= $id";
        $this->conn->query($query);
        
    }
    public function editbuku($id, $nama, $alamat, $umur) {
        $query = "UPDATE `tbl_buku` SET nama= '$nama', alamat = '$alamat', umur = '$umur' WHERE id = '$id'";
        $this->conn->query($query);
    }
    public function showbyidbuku($id) {
        $query = "SELECT * FROM tbl_buku where id=$id";
        $this->conn->query($query);
    }
}