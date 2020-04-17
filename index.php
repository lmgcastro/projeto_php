<?php
    header('Content-type: text/html; charset=utf-8 charset=UTF-8');
    include_once 'db/db.php';
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Projeto PHP</title>
	    <!-- <link rel="stylesheet" href="css/style.css"> -->
	</head>
	<body>
<?php
	    //SELECT PREENCHIMENTO TABELA
	    $sql = "SELECT * FROM chat;";
	    $result = mysqli_query($conn, $sql);
	    $resultCheck = mysqli_num_rows($result);
	    if ($resultCheck > 0) {
	        while ($row = mysqli_fetch_assoc($result)) {
	            $sender[] = $row['sender'];
	            $recipient[] = $row['recipient'];
	            $message[] = $row['message'];
	        }
?>
		<table>
			<tr>
				<th>Sender</th>
				<th>Recipient</th>
				<th>Message</th>
			</tr>
<?php
	        for ($c = 0; $c < count($sender); $c++) {
?>
			<tr>
				<td><?php echo $sender[$c] ?></td>
				<td><?php echo $recipient[$c] ?></td>
				<td><?php echo $message[$c] ?></td>
			</tr>
<?php
			}
		}
?>
		</table>
	    <!-- <script src="js/jquery-3.3.1.js"></script> -->
	    <!-- <script src="js/events.js"></script> -->
	</body>
</html>
