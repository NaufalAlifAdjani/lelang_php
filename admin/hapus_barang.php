<?php
    if ($_GET['id_barang']) {
        include "../koneksi.php";
        $query_foto = mysqli_query($conn, "SELECT * FROM tb_barang where id_barang = '".$_GET['id_barang']."'");
        $data_foto = mysqli_fetch_array($query_foto);
        
        $query_hapus = mysqli_query($conn, "DELETE FROM tb_barang where id_barang = '".$_GET['id_barang']."'");
        unlink('../foto/'.$data_foto['foto']);
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='barang.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='barang.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>