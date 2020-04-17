<?php
    header('Content-type: text/html; charset=utf-8 charset=UTF-8');
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Projeto PHP</title>
	    <!-- <link rel="stylesheet" href="css/style.css"> -->
	</head>
	<body>
		<form action="chat.php" method="POST">
			<label>Seu nick</label>
			<input type="text" name="sender" />
			<label>Outro nick</label>
			<input type="text" name="recipient" />
			<button type="submit">Ir</button>
		</form>
	    <!-- <script src="js/jquery-3.3.1.js"></script> -->
	    <!-- <script src="js/events.js"></script> -->
	</body>
</html>
