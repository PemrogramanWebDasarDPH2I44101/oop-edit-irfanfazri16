<?php
class daftar{
    private $conn;

    public function daftar(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "daftar";       
        $this->conn = mysqli_connect($servername, $username, 
                           $password, $db);                        
    }    

    public function tambah(){
        $nama = $_POST['input1'];
        $nim = $_POST['input2'];
        $tgl=  $_POST['tgl_lahir'];
        $sql    = "INSERT INTO siswa(nama, nim,tgl_lahir) 
                    VALUES ('$nama','$nim','$tgl')";
        mysqli_query($this->conn, $sql);        
    }    
    public function hapus(){        
        $nama = $_POST['input1'];
        $nim = $_POST['input2'];
        $sql    = "DELETE FROM siswa WHERE nim=$nim";        
        mysqli_query($this->conn, $sql);
    }
    public function tampil(){
        $sql    = "SELECT * FROM siswa";        
        return mysqli_query($this->conn, $sql);

    }
}
$pilih = $_POST["pilih"];
$daftar = new daftar();
if($pilih == "tambah")
    $daftar->tambah();
if($pilih == "hapus")
    $daftar->hapus();
if($pilih == "tampil"){
    $result = $daftar->tampil();
    require_once("data.php");
}
    

?>