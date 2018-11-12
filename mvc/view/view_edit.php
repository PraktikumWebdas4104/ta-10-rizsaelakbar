<html>
	<head>
		<title>TA10</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Aliran Film</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="film[]" value ="Action" <?php if (strpos(" ".$row['Film'],"Action")) {
								echo "checked";
							}?>>Action<br>
							<input type="checkbox" name="film[]" value ="Horror" <?php if (strpos(" ".$row['Film'],"Horror")) {
								echo "checked";
							}?>>Horror<br>
							<input type="checkbox" name="film[]" value ="Drama" <?php if (strpos(" ".$row['Film'],"Drama")) {
								echo "checked";
							}?>>Drama<br>
							<input type="checkbox" name="film[]" value ="Animasi" <?php if (strpos(" ".$row['Film'],"Animasi")) {
								echo "checked";
							}?>>Animasi<br>
					</td>
				</tr>
				<tr>
					<td>Pilih Wisata</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="wisata[]" value ="Bali" <?php if (strpos(" ".$row['Wisata'],"Bali")) {
								echo "checked";
							}?>>Bali<br>
							<input type="checkbox" name="wisata[]" value ="Lombok" <?php if (strpos(" ".$row['Wisata'],"Lombok")) {
								echo "checked";
							}?>>Lombok<br>
							<input type="checkbox" name="wisata[]" value ="Palu" <?php if (strpos(" ".$row['Wisata'],"Palu")) {
								echo "checked";
							}?>>Palu<br>
							<input type="checkbox" name="wisata[]" value ="Banyuwangi" <?php if (strpos(" ".$row['Wisata'],"Banyuwangi")) {
								echo "checked";
							}?>>Banyuwangi<br>
							<input type="checkbox" name="wisata[]" value ="Raja Ampat" <?php if (strpos(" ".$row['Wisata'],"Raja Ampat")) {
								echo "checked";
							}?>>Raja Ampat<br><br>
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
		$main->update();
	}
?>
