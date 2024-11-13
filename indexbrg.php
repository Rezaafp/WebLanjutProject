<?php
	//include class controller
	include "controller/controllerbrg.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();
	
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['e'])){ //kondisi untuk mengakses halaman edit
		$kode_barang = $_GET['e'];
		$main->viewEdit($kode_barang);
	}else if(isset($_GET['d'])){ //kondisi untuk menghapus data (mengakses fungsi delete)
		$kode_barang = $_GET['d'];
		$main->delete($kode_barang);
	}else if(isset($_GET['i'])){
		$main->viewInsert(); //kondisi untuk mengakses halaman add
	}else{
		$main->index(); //kondisi awal (menampilkan seluruh data)
	}
?>