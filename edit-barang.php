<link rel="stylesheet" href="style.css">

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
    <th colspan="2"><center>Aksi</center></th>
        <!-- <button type="submit" name="proses" value="Simpan">Kembali</button></br></br></br> -->
        <!-- <input type="submit" name="proses" value="Kembali"></br></br> -->
        <button type="submit">Back Login</button></br></br>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from peminjaman WHERE no_form LIKE '%RN%' order by id desc");
    /* While untuk mengulang*/
    while($tampil = mysqli_fetch_array($ambildata)){
        $warna = ($no%2==1)?"blue":"steelblue";
        echo"
        <tr bgcolor='$warna'>
             <td align=center> $no </td>
             <td align=center>$tampil[no_form] </td>
             <td align=center>$tampil[nm_kons]</td>
             <td align=center>$tampil[jns_smpl] </td>
             <td align=center>$tampil[tgl_smpl]</td>
             <td align=center>$tampil[nm_pmnjm]</td>
             <td align=center>$tampil[tgl_mnjm]</td>
             <td align=center>$tampil[tgl_pgmln]n</td>
            <td align=center>$tampil[ctn_rm]</td>
            <td><a href='?kode=$tampil[no_form]'><input type='button' class='btn-delete'></a></td>
            <td><a href='barang-ubah.php?kode=$tampil[no_form]'><input type='button' class='btn-update'></a></td>
        </tr>";
        $no++;
    }
    ?>
</table>
<?php
if (isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from barang where no_form='$_GET[kode]'");

    echo "<script>alert('Data baru telah dihapus');window.location='dashboard.php';</script>";
    // echo "data telah dihapus";
    // echo "<meta http-equiv=refresh content=2;URL='edit-barang.php>'";
    
}

