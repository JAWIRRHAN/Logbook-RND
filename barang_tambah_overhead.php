<?php
include "koneksi.php";

// if(isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into alat set
    no_form = '$_POST[no_form]',
    tgl = '$_POST[tgl]',
    urai_pggn = '$_POST[urai_pggn]',
    kondisi = '$_POST[kondisi]',
    nm = '$_POST[nm]',
    remar = '$_POST[remar]',
    oleh = '$_POST[oleh]'");

    

    // echo "Data baru telah di tersimpan";
    echo "<script>alert('Data baru telah disimpan');window.location='data_overhead.php';</script>";
    // echo "<meta http-equiv=refresh content=2;URL='barang-tambah.php>'";
    // header("location:barang-edit.php");
// }
?>
