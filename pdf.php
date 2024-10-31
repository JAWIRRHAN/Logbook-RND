
<!DOCTYPE html>
<html>
<head>
 <title>Adev Natural Indonesia</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 /* table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 } */

    .tengah{
        text-align: center;
    }
 </style>
<h2><center>Laporan Peminjaman Data User</center></h2>

<table border="1">

        <tr>
                                                <th width="50"><center>No</center></th>
                                                <th width="150"><center>No Form</center></th>
                                                <th><center>Nama Konsumen</center></th>
                                                <th><center>Jenis Sediaan Sampel</center></th>
                                                <th><center>Kode Sampel/Tanggal Sampel</center></th>
                                                <th><center>Nama Peminjam Sampel</center></th>
                                                <th><center>Tanggal Meminjam</center></th>
                                                <th><center>Tanggal Pengembalian</center></th>
                                                <th width="300px"><center>Remarks</center></th>
        </tr>




        <?php
                                include "koneksi.php";
                                $no=1;
                                $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' order by id desc");
                                while($tampil = mysqli_fetch_object($ambildata))
                                {
                        
                                ?>





                    <tr>
                    <td><center><?php echo $no ?></center></td>
                                    <td><center><?php echo $tampil->no_form ?></center></td>
                                    <td><center><?php echo $tampil->nm_kons ?></center></td>
                                    <td><center><?php echo $tampil->jns_smpl ?></center></td>
                                    <td><center><?php echo $tampil->tgl_smpl?></center></td>
                                    <td><center><?php echo $tampil->nm_pmnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_mnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_pgmln?></center></td>
                                    <td><center><?php echo $tampil->ctn_rm?></center></td>
                                   
                    </tr>
                    <?php $no++; ?>



                    <?php 
                    }
                    ?>


                    </table>
                    <script>
                window.print();
                </script>
                </body>
                </html>