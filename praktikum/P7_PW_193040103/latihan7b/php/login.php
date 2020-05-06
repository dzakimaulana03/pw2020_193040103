<?php 
	session_start();
	require 'function.php';
	// Melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
	if(isset($_SESSION['username'])) {
		header("Location: admin.php");
		exit;
	}
	// Login
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
		// Mencocokan username
		if(mysqli_num_rows($cek_user) > 0) {
			$row = mysqli_fetch_assoc($cek_user);
			if (password_verify($password, $row['password'])) {
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['hash'] = $row['id'];
			}
			if($row['id'] == $_SESSION['hash']) {
				header("Location: admin.php");
				die;
			}
			header("Location: ../index.php");
			die;
		}
		$error = true;
	}


?>


<!DOCTYPE html>
<html>
<head>
	<!-- CSS Materialize -->
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Akhir CSS Materialize -->
      <link rel="stylesheet" href="../assets/css/login.css">

	<title>Login</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col s9">
			<div class="login">
			<h2>Login Admin</h2>
		<div class="row"> 
	<form action="" method="post">
		
		<?php if (isset($error)) : ?>
			<p>username atau password salah</p>
		<?php endif; ?>
	 
	 <div class="input-field col s9">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Masukan username</label>
        </div>
         
       		 <div class="input-field col s9">
        	 <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
    	 </div>
    	 
		</div>
		<div class="remember">
			<label name="remember" >
        <input type="checkbox" for="remember" name="remember" />
        <span>Remember me</span>
        </label>
        <div>
		<button type="submit" name="submit" class=" blue darken-1 "><a class="white-text">LOGIN</a></button>
		</div>
	<div class="registrasi">
		<p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
	</div>
		
</div>

	</form>



 </div>
</div>



<!-- Java Script -->

<!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../assets/js/materialize.min.js">
   </script>

</body>
</html> 