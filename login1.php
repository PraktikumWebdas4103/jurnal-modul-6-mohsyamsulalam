<form action=" " method="POST">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
	 		<td>Password :</td>
	 		<td><input type="Password" name="pass"></td>
	 	</tr>
	 	<tr>
	 		<td></td>
	 		<td><input type="submit" name="submit"></td>
	 	</tr>
	 </table>
	</form>

<?php
session_start();
$alam=array(
	"user"=>"syamsulalam",
	"pass" =>"15juni98"
);
		if(isset($_POST['submit'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];


			if($user== $alam["user"] && $pass==$alam["pass"]){
				$_session['user']=$user;
				header("location:proses1.php");
			}else{
				header("location:login1.php");
			}

		}
?>