<?php 
	include "koneksi.php";
	
	$kode_brg = $_POST['kode_brg'];
	$nama_brg = $_POST['nama_brg'];
	$harga = $_POST['harga'];
	
	$query = "INSERT INTO tb_barang VALUES(
		'".$kode_barang."', '".$nama_barang."', '".$harga."'
	)";
	
	mysqli_query($connection, $query);
	header("location:barang-tambah.php");
?>