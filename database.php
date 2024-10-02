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
    public function tampil() {
        $query = "SELECT * FROM tbl__user";
        $sql = mysqli_query( $this->conn, $query );
        return $sql;
    }
    public function input($nama, $alamat, $umur) {
        $query = "INSERT INTO tbl__user (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        $this->conn->query($query);
    }
    public function delete($id) {
        $query = "DELETE FROM `tbl__user` WHERE id= $id";
        $this->conn->query($query);
        
        }
    public function edit($id, $nama, $alamat, $umur) {
        $query = "UPDATE `tbl__user` SET nama= '$nama', alamat = '$alamat', umur = '$umur' WHERE id = '$id'";
        $this->conn->query($query);
    }
    public function showbyid($id, $nama, $alamat, $umur) {
        $query = "SELECT * FROM tbl__user where id=$id";
        $this->conn->query($query);
    }
}