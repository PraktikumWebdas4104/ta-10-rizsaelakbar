<html>
	<head>
		<title>TA10</title>
	</head>
	<body>
		<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr>
				<td>NIM</td>
				<td>Nama</td>
				<td>Angkatan</td>
				<td>Fakultas</td>
				<td>Program</td>
				<td>Film</td>
				<td>Wisata</td>
				<td colspan="2">Operasi</td>
			</tr>
			<?php
				$data = $this->model->selectAll();
					while($row = $this->model->fetch($data)){
						echo "
							<tr>
								<td>$row[0]</td>
								<td>$row[1]</td>
								<td>$row[2]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
								<td>$row[5]</td>
								<td>$row[6]</td>
								<td><a href='index.php?e=$row[0]'>Edit</a></td>
								<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
							</tr>
					";
			}?>
		</table>
		<center><a href='index.php?i=add'>Tambah Data</a></center>
	</body>
</html>
