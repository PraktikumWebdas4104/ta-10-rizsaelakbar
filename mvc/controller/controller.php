<?php
	include "model/model.php";

	class controller{
		public $model;
		function __construct(){
			$this->model = new model();

		}

		function index(){
			$this->model->selectAll();
			include "view/view.php";
		}

		function viewEdit($nim){
			$data = $this->model->selectMhs($nim);
			$row = $this->model->fetch($data);
			include "view/view_edit.php";
		}

		function viewInsert(){
			include "view/view_add.php";
		}
		function update(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			$film = $_POST['film'];
			$wisata = $_POST['wisata'];

			$this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata);
			header("location:index.php");
		}

		function delete($nim){
			$this->model->deleteMhs($nim);
			header("location:index.php");
		}

		function insert(){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$angkatan = $_POST['angkatan'];
			$fakultas = $_POST['fakultas'];
			$prodi = $_POST['prodi'];
			$film = $_POST['film'];
			$wisata = $_POST['wisata'];
			$this->model->insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata);
			header("location:index.php");
		}

		function __destruct(){
		}
	}
?>
