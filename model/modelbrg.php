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
			$query = "select * from barang";
			return $this->execute($query);
		}
		
		function selectBrg($kode_barang){
			$query = "select * from barang where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function updateBrg($kode_barang, $nama, $harga, $gambar, $jml_stok){
			$query = "update barang set kode_barang='$kode_barang', nama='$nama', harga='$harga', gambar='$gambar', jml_stok='$jml_stok' where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function deleteBrg($kode_barang){
			$query = "delete from barang where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function insertBrg($kode_barang, $nama, $harga, $gambar, $jml_stok){
			$query = "insert into barang values ('$kode_barang', '$nama', '$harga', '$gambar','$jml_stok')";
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