<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM kritik WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $jenispesan = $_POST['jenispesan'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $pesan = $_POST['pesan'];

        $update = mysqli_query($db, "UPDATE kritik SET jenispesan='$jenispesan', nama='$nama', alamat='$alamat', telepon='$telepon', jeniskelamin='$jeniskelamin', pesan='$pesan' WHERE id='$id'");

        if($update){
            echo "
            <script>
                alert('Data Anda berhasil diubah');
                document.location.href = 'formulirkotak.php';
            </script>  
            ";
        } else{
            echo "
            <script>
                alert('Data Anda gagal diubah');
                document.location.href = 'formulir.php';
            </script>  
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="container">
    <h1 class="heading"> Menu Edit <span> silahkan diisi </span></h1>
    <form method="POST" action="">
        <table class="table" >
            <tr>
                <p">=============================================================================================================================</p>
                <td">DATA DIRI</td>
                <br>
            </tr>
            <tr>
                <td >Jenis Pesan </td>
                <td ><select name="jenispesan" id="">
                    <option value=<?=$row['jenispesan'];?>>Kritik & Saran</option>
                    <option value=<?=$row['jenispesan'];?>>Pesan Cinta</option>
                </select></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama anda" value=<?=$row['nama'];?>></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td >KOTAK DAN SARAN</td>
            </tr>
            <tr>
                <td ">Pesan</td>
                <td><p><input type="text" name="pesan" placeholder="Masukkan pesan anda" value=<?=$row['pesan'];?>></p></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
        <p >=============================================================================================================================</p>
    </form>
    </div>
</body>
</html>