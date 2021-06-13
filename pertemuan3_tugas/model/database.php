<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "25022002";
	var $db = "pmbmvc";
	var $con;

	function __construct(){
		$this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con,"select * from pmb");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
	return $hasil;
	}
	function input($nama,$prodi,$email){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
			"insert into pmb values('','$nama','$prodi','$email')");
	}
	function hapus($id){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
		"delete from pmb where id = '$id'");
	}
	function edit($id){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
			"select * from pmb where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$nama,$prodi,$email){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
			"update pmb set nama='$nama',prodi='$prodi',email='$email' where id = '$id'");
	}
	}
?>