<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form POST</title>
</head>
<body>
    <legend>FORM POST</legend><br><br>
	<form action="?action=edit" method="POST">
		<table>
			<label for="">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan nama anda"></td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim" placeholder="Masukkan nim anda"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>:</td>
					<td><input type="text" name="jurusan" placeholder="Masukkan jurusan"></td>
				</tr>
				<tr>
					<td>Kampus</td>
					<td>:</td>
					<td><input type="text" name="kampus" placeholder="Nama kampus"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="text" name="email" placeholder="Email anda"></td>
				</tr>
			</label>
		</table>
					<button type="submit" name="submit" value="Kirim">Kirim</button>
	</form> <br><br>
	-------------------------------------------------------------------------------- <br>
	<?php  
		if ($_POST) {
			echo "Nama 		: ". $_POST ['nama']; echo "<br>";
			echo "Nim 		: ". $_POST ['nim']; echo "<br>";
			echo "Nama 	: ". $_POST ['nama']; echo "<br>";
			echo "Nim 	: ". $_POST ['nim']; echo "<br>";
			echo "Jurusan 	: ". $_POST ['jurusan']; echo "<br>";
			echo "Kampus	: ". $_POST ['kampus']; echo "<br>";
			echo "Email 	: ". $_POST ['email']; echo "<br>";
		}
	?>
	--------------------------------------------------------------------------------
<br>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Muhamad Haidir haya</td>
            </tr><br>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>Sistem Informasi (malam)</td>
            <tr><br>
                <td>Matkul</td>
                <td>:</td>
                <td>Praktikum Berbasis Web 2</td>
            </tr>
        </table>
</body>
</html> 
</html>
