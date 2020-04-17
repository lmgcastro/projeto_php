<?php
	include_once 'db.php';

	$sen = $_POST['sender'];
	$rec = $_POST['recipient'];
	$msg = $_POST['message'];

	$sql = "INSERT INTO chat VALUES (DEFAULT, '$sen', '$rec', '$msg');";
	mysqli_query($conn, $sql);

	header("Location: ../chat.php?msg=sent");
?>