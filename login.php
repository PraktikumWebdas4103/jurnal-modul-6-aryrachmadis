<form action=" " method="POST">
	<table>
		<tr>
			<td><b>Login</b></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php
$host = "localhost"; //host server
$user = "root"; //user login phpmyadmin 
$pass = ""; //user login phpmyadmin
$db = "regis"; //nama database

if (isset($_POST["submit"])) {
	
			$nama = $_POST["nama"];
			$nim = $_POST["nim"];
			$kelas = $_POST["kelas"];
			$jk = $_POST["jk"];
			$hobi = $_POST["hobi"];
			$fakultas = $_POST["fakultas"];
			$alamat = $_POST["alamat"];

			$conn = mysqli_connect($host, $user, $pass,$db);
			$mysqli = "INSERT INTO modul6 (Nama, Nim, Kelas, Jenis_Kelamin, Hobi, Fakultas, Alamat) 
					  VALUES ('$nama', '$nim', '$kelas', '$jk', '$hobi', '$fakultas','$alamat')";	

if (strlen($nim) > 10) {
		echo "Karakter NIM Jangan Lebih Dari 10 <br>";
		echo " ";
	}

	if (strlen($nama) > 25) {
		echo "Karakter Nama Jangan Lebih Dari 25 <br>";
		echo " ";
	}

if ($prodi == "Pilih Fakultas") {
	empty($fakultas);
}

	if (empty($fakultas) || empty($nim) || empty($nama) || empty($email) || empty($jk)) {
				echo "Data Harus Diisi <br>";
				echo " ";
			}

			if (strlen($nim) <= 10 && strlen($nama) <= 25 && (!empty($nim) &&  !empty($nama) && !empty($email) && !empty($jk) && !empty($fakultas))) {
			$result = mysqli_query($conn, $mysqli);
			echo "<h1>Masokk!!</h1>";
				}

	else{
					die("<h1>Gagal!</h1>");
			
	}


		}


?>
