<?php 

require 'function.php';

$novel = query("SELECT * FROM novel");
 ?> 


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<div class="container">
		<?php foreach($novel as $nv) : ?>
			<p class="Judul">
				<a href="detail.php?id=<?= $nv['id']?>">
					<?= $nv["Judul Buku"];  ?>
				</a>
			</p>
<?php endforeach; ?>
	</div>


</body>
</html> 