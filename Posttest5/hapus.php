<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM kritik WHERE id='$id'");

    if($hapus){
        echo "
        <script>
            alert('Data Anda berhasil dihapus');
            document.location.href = 'formulirkotak.php';
        </script>  
        ";
    } else{
        echo "
        <script>
            alert('Data Anda gagal dihapus');
            document.location.href = 'formulir.php';
        </script>  
        ";
    }
}

?>