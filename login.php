<?php

include 'config/koneksi.php';
include 'function/function.php';

session_start();

if (isset($_POST['login'])) {

	$username = antiSQLInjection($_POST['username']);
	$password = antiSQLInjection(md5($_POST['password']));

	$query = mysqli_query($koneksi, "
		SELECT * FROM users WHERE username = '$username' AND password = '$password'
		");

	$cekLogin = mysqli_num_rows($query);

	if($cekLogin > 0)
	{
		echo "
			<script>
			
			Swal.fire({
				icon: 'success',
				title: 'Oops...',
				text: 'Sukses Login',
				})
				
			</script>
		";
		}
		else{
			echo "Gagal";
		}


	}


?>