<?php
include "koneksi.php";

// if(isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into konsumen set
    no_form = '$_POST[no_form]',
    tgl = '$_POST[tgl]',
    nm_kons = '$_POST[nm_kons]',
    jns_sedia = '$_POST[jns_sedia]',
    week = '$_POST[week]',
    terima = '$_POST[terima]',
    oleh = '$_POST[oleh]',
    remar = '$_POST[remar]'");
    

    // echo "Data baru telah di tersimpan";
    echo "<script>alert('Data baru telah disimpan');window.location='data_micro.php';</script>";
    // echo "<meta http-equiv=refresh content=2;URL='barang-tambah.php>'";
    // header("location:barang-edit.php");
// }
?>
