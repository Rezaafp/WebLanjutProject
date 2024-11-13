<?php
	//include class model
	include "model/modeluser.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/viewuser.php"; //memamnggil view.php pada folder view
		}
		
		function viewEdit($kode_user){
			$data = $this->model->selectUser($kode_user); //select data mahasiswa dengan nim ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_edituser.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			include "view/view_adduser.php"; //menampilkan halaman add data
		}
		
		//fungsi update data
		function update(){
			$kode_user = $_POST['kode_user'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$password = $_POST['password'];
			$peran = $_POST['peran'];
			$update = $this->model->updateUser($kode_user,$nama,$email,$telp,$password,$peran);
			@header("location:indexuser.php");
		}
		
		function delete($kode_user){
			$delete = $this->model->deleteUser($kode_user);
			header("location:indexuser.php");
		}
		
		function insert(){
			$kode_user = $_POST['kode_user'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$password = $_POST['password'];
			$peran = $_POST['peran'];
			$insert = $this->model->insertUser($kode_user,$nama,$email,$telp,$password,$peran);
			@header("location:indexuser.php");
			
		}
		
		function __destruct(){
		}
	}
?>