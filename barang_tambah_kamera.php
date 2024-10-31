<?php
                        include "koneksi.php";
                        error_reporting(0);

                        // if(isset($_POST['proses'])){
                            mysqli_query($koneksi,"insert into kamera set
                            no_form = '$_POST[no_form]',
                            tgl_pgn = '$_POST[tgl_pgn]',
                            nm = '$_POST[nm]',
                            wkt_pgn_mulai = '$_POST[wkt_pgn_mulai]',
                            wkt_pgn_selesai = '$_POST[wkt_pgn_selesai]',
                            tgn = '$_POST[tgn]',
                            oleh = '$_POST[oleh]',
                            ctn_rm = '$_POST[ctn_rm]'");

                            // echo "Data baru telah di tersimpan";
                            //alert("Data baru telah di tersimpan");

                        echo "<script>alert('Data baru telah tersimpan');window.location='data_kamera.php';</script>";

                            //echo "<meta http-equiv=refresh content=2;URL='dashboard.php>'";
                        // header("location:dashboard.php");
                        // }
                        ?>