<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into alat_tokebi set
                            no_form = '$_POST[no_form]',
                            tgl = '$_POST[tgl]',
                            ur_pgn = '$_POST[ur_pgn]',
                            knds_alt = '$_POST[knds_alt]',
                            nm = '$_POST[nm]',
                            oleh = '$_POST[oleh]',
                            ctn_rm = '$_POST[ctn_rm]'");

                            // echo "Data baru telah di tersimpan";
                            //alert("Data baru telah di tersimpan");

                        echo "<script>alert('Data baru telah tersimpan');window.location='data_alat_tokebi.php';</script>";

                            //echo "<meta http-equiv=refresh content=2;URL='dashboard.php>'";
                        // header("location:dashboard.php");
                        // }
                        ?>