<?php
	$hostname   = "localhost";
	$username = "root";
	$pass     = "";
	$db       = "pendaftaran";
	$con     = new mysqli($hostname, $username, $pass, $db);

	if($con==false){
			die("koneksi gagal". $con->connect_error);
	}
		if (isset($_POST['submit'])) {
				$nama=$_POST['nama'];
				$nim=$_POST['nim'];
				$kelas=$_POST['kelas'];
				$jenisk=$_POST['jk'];
				$hobi = implode(", ", $_POST['hoby']);
				$fakultas=$_POST['fakultas'];
				$alamat=$_POST['alamat'];
		}
		$error=array();
		if(strlen($_POST['nama']) <= 35){
			$error['nama']=="Harus 35";
		}if(strlen($_POST['nim']) != 10){
			$error['nim']=="Harus 10";
		}if(empty($kelas)){
			$error['kelas']=="Kelas harus diisi!!!";
		}if(empty($jenisk)){
			$error['jk']=="Jenis Kelamin harus diisi!!!";
		}if(empty($hobi)){
			$error['hoby']=="Hobby harus diisi!!!";
		}if(empty($fakultas)){
			$error['fakultas']=="Fakultas harus diisi!!!";
		}
		$sql="INSERT INTO data(nama,nim,kelas,jenis kelamin,hobi,fakultas,alamat) VALUES ('$nama','$nim','$kelas',$jenisk','$hobi','$fakultas','$alamat')";
				if(mysqli_query($con,$sql)){
					echo "Database sudah masuk";
				}else{
					echo "error";
				}
?>