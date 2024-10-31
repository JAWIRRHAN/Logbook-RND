<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into pengemesan_sampel set
                             no_form = '$_POST[no_form]',
                             nm_kons = '$_POST[nm_kons]',
                             nm_prod = '$_POST[nm_prod]',
                             tgl_relese = '$_POST[tgl_relese]',
                             tgl_pggmn = '$_POST[tgl_pggmn]',
                             nm_verifi = '$_POST[nm_verifi]',
                             remar = '$_POST[remar]',
                             oleh = '$_POST[oleh]'");


                        echo "<script>alert('Data baru telah tersimpan');window.location='data_ps.php';</script>";

                        // }
                        ?>