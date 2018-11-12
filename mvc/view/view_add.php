<html>
	<head>
		<title>TA10</title>
	</head>
		<body>
			<form action="" method="POST">
				<table border="1" cellpadding="5" cellspacing="0" align="center">
					<t>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim"/></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama"/></td>
					</tr>
					<tr>
						<td>Angkatan</td>
						<td>:</td>
						<td><input type="text" name="angkatan"/></td>
					</tr>
					<tr>
						<td>Fakultas</td>
						<td>:</td>
						<td><input type="text" name="fakultas"/></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td><input type="text" name="prodi"/></td>
					</tr>
					<tr>
						<td>Pilih Aliran Film</td>
						<td>:</td>
						<td>
								<input type="checkbox" name="film[]" value ="Action">Action<br>
								<input type="checkbox" name="film[]" value ="Horror">Horror<br>
								<input type="checkbox" name="film[]" value ="Drama">Drama<br>
								<input type="checkbox" name="film[]" value ="Animasi">Animasi<br>
						</td>
						<tr>
						<td>Pilih Wisata</td>
						<td>:</td>
						<td>
								<input type="checkbox" name="wisata[]" value ="Bali">Bali<br>
								<input type="checkbox" name="wisata[]" value ="Lombok">Lombok<br>
								<input type="checkbox" name="wisata[]" value ="Palu">Palu<br>
								<input type="checkbox" name="wisata[]" value ="Banyuwangi">Banyuwangi<br>
								<input type="checkbox" name="wisata[]" value ="Raja Ampat">Raja Ampat<br><br>
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="submit"/></td>
					</tr>
				</table>
			</form>
		</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$main = new controller();
		$main->insert();
	}
?>
