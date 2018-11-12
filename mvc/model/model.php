<?php
	class model{
		function __construct(){
			$this->conn = mysqli_connect('localhost','root','','jurnal10');
		}

		function execute($query){
			return $this->conn->query($query);
		}

		function selectAll(){
			$query = "SELECT * FROM mahasiswa";
			return $this->execute($query);
		}

		function selectMhs($nim){
			$query = "SELECT * FROM mahasiswa WHERE NIM = $nim";
			return $this->execute($query);
		}

		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi,$film, $wisata){
			$this->Film = "";
			if (!empty($film)) {
					foreach ($film as $value) {
						$Film .= $value.", ";
					}
				}
			$this->Wisata = "";
			if (!empty($wisata)) {
					foreach ($wisata as $value) {
						$Wisata .= $value.", ";
					}
				}
			$query = "UPDATE mahasiswa SET Nama = '$nama', Angkatan = $angkatan, Fakultas = '$fakultas', Program = '$prodi', Film = '$Film', Wisata = '$Wisata' WHERE NIM = $nim";
			return $this->execute($query);
		}

		function deleteMhs($nim){
			$query = "DELETE FROM mahasiswa WHERE NIM = $nim";
			return $this->execute($query);
		}

		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata){
			$this->Film = "";
			if (!empty($film)) {
					foreach ($film as $value) {
						$Film .= $value.", ";
					}
				}
			$this->Wisata = "";
			if (!empty($wisata)) {
					foreach ($wisata as $value) {
						$Wisata .= $value.", ";
					}
				}
			$query = "INSERT INTO mahasiswa(NIM, Nama, Angkatan, Fakultas, Program, Film, Wisata) VALUES('$nim', '$nama', '$angkatan', '$fakultas', '$prodi', '$Film', '$Wisata')";
			return $this->execute($query);
		}

		function fetch($var){
			return mysqli_fetch_array($var);
		}
		function __destruct(){
		}
	}
?>
