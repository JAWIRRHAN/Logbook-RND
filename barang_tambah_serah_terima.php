<?php
include "koneksi.php";

// if(isset($_POST['proses'])) {
    mysqli_query($koneksi,"insert into base set
   no_form = '$_POST[no_form]',
    nm_pro = '$_POST[nm_pro]',
    tgl = '$_POST[tgl]',
    skl = '$_POST[skl]',
    jns_sedia = '$_POST[jns_sedia]',
    remar = '$_POST[remar]',
    serah_nm = '$_POST[serah_nm]',
    tm_nm = '$_POST[tm_nm]',
    oleh = '$_POST[oleh]'");


    

    // echo "Data baru telah di tersimpan";
    echo "<script>alert('Data baru telah disimpan');window.location='data_serah_terima.php';</script>";
    // echo "<meta http-equiv=refresh content=2;URL='barang-tambah.php>'";
    // header("location:barang-edit.php");
// }
?>
