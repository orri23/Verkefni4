<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
<title>Titill vefsíðu</title>
</head>
<body>
<?php 
	include "dbcon.php";
	include "query.php";
 ?>
	
	<form action="insert.php" method="post">
		<label>Nafn: </label>
		<input type="text" name="nafn" required ><br>
		
		<label>Linkur: </label>
		<input type="text" name="linkur" required ><br>

		<input type="submit">
	</form>


	<?php 
		# birtir töflu með player og score
		foreach ($myndir as $entry) {
			echo '<img src="'.$entry[1].'"> <br> <h1> ' .$entry[0].'</h1>';
		}
	 ?>

</body>
</html>