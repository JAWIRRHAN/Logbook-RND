<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into form_list set
                             no_form = '$_POST[no_form]',
                             kd_list = '$_POST[kd_list]',
                             nm_kons = '$_POST[nm_kons]',
                             nm_prod = '$_POST[nm_prod]',
                             tgl_fix = '$_POST[tgl_fix]',
                             jml_list = '$_POST[jml_list]',
                             remar = '$_POST[remar]',
                             oleh = '$_POST[oleh]'");


                        echo "<script>alert('Data baru telah tersimpan');window.location='data_lr.php';</script>";

                        // }
                        ?>