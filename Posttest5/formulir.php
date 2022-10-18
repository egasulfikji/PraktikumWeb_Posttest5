<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="css/formulir.css">
</head>
<body>
    <div class="container">
    <h1 class="heading"> KOTAK dan SARAN <span> mohon diisi </span></h1>
    <form method="POST" action="tambah.php">
        <table class="table" >
            <tr>
                <p">===========================================================================</p>
                <td">DATA DIRI</td>
            </tr>
            <tr>
                <td ">Jenis Pesan</td>
                <td "><select name="jenispesan" id="">
                    <option value="Kritik & Saran">Kritik & Saran</option>
                    <option value="Pesan Cinta">Pesan Cinta</option>
                </select></td>
            </tr>
            <tr>
                <td >Nama</td>
                <td ><input type="text" name="nama" placeholder="Masukkan nama anda"></td>
            </tr>
            <tr>
                <td >Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat anda"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="number" name="telepon" placeholder="Masukkan no telepon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jeniskelamin" value="Laki-Laki" style="color: #ffff">Laki-Laki
                <input type="radio" name="jeniskelamin" value="Perempuan" style="color: #ffff" >Perempuan</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td >KOTAK DAN SARAN</td>
            </tr>
            <tr>
                <td ">Pesan</td>
                <td><p><input type="text" name="pesan" placeholder="Masukkan pesan anda"></p></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
        <p >===========================================================================</p>
    </form>
    </div>
</body>
</html>