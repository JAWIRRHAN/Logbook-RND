<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into homogen set
                             no_form = '$_POST[no_form]',
                             tgl = '$_POST[tgl]',
                             urai_pggn = '$_POST[urai_pggn]',
                             kondisi = '$_POST[kondisi]',
                             nm = '$_POST[nm]',
                             remar = '$_POST[remar]',
                             oleh = '$_POST[oleh]'");


                            // echo "Data baru telah di tersimpan";
                            //alert("Data baru telah di tersimpan");

                        echo "<script>alert('Data baru telah tersimpan');window.location='data_homogen.php';</script>";

                            //echo "<meta http-equiv=refresh content=2;URL='dashboard.php>'";
                        // header("location:dashboard.php");
                        // }
                        ?>