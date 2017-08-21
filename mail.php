<?php
	

	if($_POST){
		$user = $_POST['user'];
		$email = $_POST['address'];
		$main = $_POST['InputMessage'];
		
		$to = 'info@graxyz.com';
		$header = 'From:' . $email . "\r\n";
		mail($to,$user,$main,$header);

		header('Location: http://graxyz.com/index.html');
	} else {
		header('Location: http://graxyz.com/index.html');
	}

?>