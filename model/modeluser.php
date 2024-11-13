<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		public $connect;
		function __construct(){
			$connect = mysqli_connect("192.168.10.253", "a112113571","polke001","a112113571");
			
			$this->connect=$connect;
		}
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		function selectAll(){
			$query = "select * from user";
			return $this->execute($query);
		}
		
		function selectUser($kode_user){
			$query = "select * from user where kode_user='$kode_user'";
			return $this->execute($query);
		}
		
		function updateUser($kode_user, $nama, $email, $telp, $password, $peran){
			$query = "update user set kode_user='$kode_user', nama='$nama', email='$email', telp='$telp', password='$password', peran='$peran' where kode_user='$kode_user'";
			return $this->execute($query);
		}
		
		function deleteUser($kode_user){
			$query = "delete from user where kode_user='$kode_user'";
			return $this->execute($query);
		}
		
		function insertUser($kode_user, $nama, $email, $telp, $password, $peran){
			$query = "insert into user values ('$kode_user', '$nama', '$email', '$telp','$password','$peran')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>