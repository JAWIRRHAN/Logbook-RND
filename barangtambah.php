<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into peminjaman set
                            no_form = '$_POST[no_form]',
                            nm_kons = '$_POST[nm_kons]',
                            jns_smpl = '$_POST[jns_smpl]',
                            tgl_smpl = '$_POST[tgl_smpl]',
                            nm_pmnjm = '$_POST[nm_pmnjm]',
                            tgl_mnjm = '$_POST[tgl_mnjm]',
                            tgl_pgmln = '$_POST[tgl_pgmln]',
                            ctn_rm = '$_POST[ctn_rm]',
                            oleh = '$_POST[oleh]'");

                            // echo "Data baru telah di tersimpan";
                            //alert("Data baru telah di tersimpan");

                        echo "<script>alert('Data baru telah tersimpan');window.location='data_retain.php';</script>";

                            //echo "<meta http-equiv=refresh content=2;URL='dashboard.php>'";
                        // header("location:dashboard.php");
                        // }
                        ?>



