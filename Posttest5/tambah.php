<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $jenispesan = $_POST['jenispesan'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $pesan = $_POST['pesan'];

    $kirim = mysqli_query($db, "INSERT INTO kritik (jenispesan,nama,alamat,telepon,jeniskelamin,pesan) VALUES ('$jenispesan','$nama','$alamat','$telepon','$jeniskelamin','$pesan')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:formulirkotak.php");
    }else {
        echo "gagal mengirim";
    }
}

?>