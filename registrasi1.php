<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
		<h2><p>FORM REGISTRASI MAHASISWA</p></h2>
	<form action="proses1.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" required="">Laki-laki<br></td>
				<td><input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
				<td><input type="radio" name="jk" value="lain">Dan lain-lain<br></td>
			</tr>
			<tr>
				<td><b>Hobi</b></td>
				<td>
					<input type="checkbox" name="hoby[]" value="Acting" required="">Berenang <br>
					<input type="checkbox" name="hoby[]" value="Bermain Gitar">Bermain Gitar 
				</td>
				<td>
					<input type="checkbox" name="hoby[]" value="Badminton" >Badminton<br>
					<input type="checkbox" name="hoby[]" value="Futsal">Futsal
				</td>
				<td>
					<input type="checkbox" name="hoby[]" value="Makan">Makan<br>
					<input type="checkbox" name="hoby[]" value="Tidur">Tidur
				</td>
				<td>
					<input type="checkbox" name="hoby[]" value="Basket">Basket<br>
					<input type="checkbox" name="hoby[]" value="Dance">Dance
				</td>
				<td>
					<input type="checkbox" name="hoby[]" value="Menulis">Menulis<br>
					<input type="checkbox" name="hoby[]" value="Other Hobby">Dan lain-lain
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FKB">Fakultas Komunikai dan Bisnis</option>
    				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    				<option value="FTI">Fakultas Teknik Informatika</option>
    				<option value="FTE">Fakultas Teknik Elektro</option>
    			</select>
    			</td>
    		</tr>
    		<tr>
    			<td>Alamat</td>
    			<td><input type="textarea" name="alamat"></td>
    		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>