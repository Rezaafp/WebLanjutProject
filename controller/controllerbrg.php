<?php
	//include class model
	include "model/modelbrg.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/viewbrg.php"; //memamnggil view.php pada folder view
		}
		
		function viewEdit($kode_barang){
			$data = $this->model->selectBrg($kode_barang); //select data mahasiswa dengan nim ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_editbrg.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			include "view/view_addbrg.php"; //menampilkan halaman add data
		}
		
		//fungsi update data
		function update(){
			$kode_barang = $_POST['kode_barang'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$gambar = $_POST['gambar'];
			$jml_stok = $_POST['jml_stok'];
			$update = $this->model->updateBrg($kode_barang,$nama,$harga,$gambar,$jml_stok);
			@header("location:indexbrg.php");
		}
		
		function delete($kode_barang){
			$delete = $this->model->deleteBrg($kode_barang);
			header("location:indexbrg.php");
		}
		
		function insert(){
			$kode_barang = $_POST['kode_barang'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$gambar = $_POST['gambar'];
			$jml_stok = $_POST['jml_stok'];
			$insert = $this->model->insertBrg($kode_barang, $nama, $harga, $gambar, $jml_stok);
			@header("location:indexbrg.php");
			
		}
		
		function __destruct(){
		}
	}
?>