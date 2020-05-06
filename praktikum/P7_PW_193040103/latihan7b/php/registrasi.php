<?php 
	require 'function.php';

	if(isset($_POST["register"])) {
		if(registrasi($_POST) > 0 ) {
			echo "<script>
					alert('Registrasi Berhasil');
					document.location.href = 'login.php';
					</script>";
		}else {
			echo "<script>
					alert('Registrasi Gagal');
					</script>";
		}
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
      <link rel="stylesheet" href="../assets/css/registrasi.css">
	<title>Registrasi</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col s10">
	<h3>Registrasi Admin</h3>
	<form action="" method="post">

		 <div class="input-field col s10">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate" name="username">
          <label for="username">Masukan username</label>
        </div>
         <div class="input-field col s10">
        	 <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
          <br>
          <br>
    	  <div>
		<button type="submit" name="register" class=" blue darken-1 "><a class="white-text">REGISTER</a></button>
		</div>
	</div>
</div>

	</form>



<!-- Java Script -->

<!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../assets/js/materialize.min.js">
   </script>

</body>
</html> 