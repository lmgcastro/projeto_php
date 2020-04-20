<?php
    header('Content-type: text/html; charset=utf-8 charset=UTF-8');
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Início</title>
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<form action="chat.php" method="POST">
			<div id="div_ini">
				<label>Seu nick</label>
				<input class="inp_ini" type="text" name="sender" />
				<label>Outro nick</label>
				<input class="inp_ini" type="text" name="recipient" />
				<button type="submit">Ir</button>
			</div>
		</form>
	    <!-- <script src="js/jquery-3.3.1.js"></script> -->
	    <!-- <script src="js/events.js"></script> -->
	</body>
</html>
