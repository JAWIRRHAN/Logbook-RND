<?php
  include "koneksi.php";
date_default_timezone_set("ASIA/JAKARTA");
header("Content-type: application/vnd-ms-pdf");
header("Content-Disposition: attachment; filename=Laporan Peminjaman User.pdf");
?>


  

<table border="1">

<tr>
  <th id="example1" colspan="11" style="background-color:blue; color:white">
      <h2><center>Laporan Peminjaman Data User</center></h2>
  </th>
</tr>


        <tr>
        <th>No</th>
        <th>Tanggal Input</th>
        <th>No Form</th>
        <th>Nama Konsumen</th>
        <th>Jenis Sediaan Sampel</th>
        <th>Kode Sampel/Tanggal Sampel</th>
        <th>Nama Peminjam Sampel</th>
        <th>Tanggal Meminjam</th>
        <th>Tanggal Pengembalian</th>
        <th>Remarks</th>
        <th>Dibuat Oleh</th>
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
                                    <td><center><?php echo $tampil->tgl_input ?></center></td>
                                    <td><center><?php echo $tampil->nm_kons ?></center></td>
                                    <td><center><?php echo $tampil->jns_smpl ?></center></td>
                                    <td><center><?php echo $tampil->tgl_smpl?></center></td>
                                    <td><center><?php echo $tampil->nm_pmnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_mnjm?></center></td>
                                    <td><center><?php echo $tampil->tgl_pgmln?></center></td>
                                    <td><center><?php echo $tampil->ctn_rm?></center></td>
                                    <td><center><?php echo $tampil->oleh?></center></td>
                                   
                                </tr>
                                <?php $no++; ?>


                                <script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf'
        ]
    } );
} );







</script>

                                <?php
                                
                                }
                                
                                
                                
                                ?>

</table>
