<?php
    header('Content-type: text/html; charset=utf-8 charset=UTF-8');
    include_once 'db/db.php';
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>Projeto PHP</title>
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
<?php
    if (isset($_POST['sender']) && isset($_POST['recipient'])) {
	    $sen = $_POST['sender'];
	    $rec = $_POST['recipient'];
    } else if (isset($_COOKIE['sender']) && isset($_COOKIE['recipient'])) {
    	$sen = $_COOKIE['sender'];
	    $rec = $_COOKIE['recipient'];
    }
	setcookie("sender", $sen, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("recipient", $rec, time() + (86400 * 30), "/"); // 86400 = 1 day
    $sql = "SELECT * FROM chat WHERE (sender = '" . $sen . "' OR sender = '" . $rec . "') AND (recipient = '" . $rec . "' OR recipient = '" . $sen . "') ORDER BY id DESC;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $sender[] = $row['sender'];
            $recipient[] = $row['recipient'];
            $message[] = $row['message'];
        }
?>
		<table id="tbl_chat">
<?php
	        	for ($c = 0; $c < count($sender); $c++) {
	        		$msg_rec = $sender[$c] == $rec;
?>
			<tr>
				<td class="td_recipient"><?php echo $msg_rec ? $sender[$c] : "" ?></td>
				<td class=<?php echo $msg_rec ? "td_msg_rec" : "td_msg_sen" ?>><?php echo $message[$c] ?></td>
				<td class="td_sender"><?php echo !$msg_rec ? $sender[$c] : "" ?></td>
			</tr>
<?php
				}			
			}
?>
		</table>
		<form id="form_msg" method="POST" action="db/send_msg.php">
			<input class="hide" type="text" name="sender" value=<?php echo $sen ?> />
			<input class="hide" type="text" name="recipient" value=<?php echo $rec ?> />
			<div id="div_msg">
				<input id="inp_msg" type="text" name="message" />
				<button type="submit" name="send">Enviar</button>
			</div>
		</form>
	    <!-- <script src="js/jquery-3.3.1.js"></script> -->
	    <!-- <script src="js/events.js"></script> -->
	</body>
</html>
