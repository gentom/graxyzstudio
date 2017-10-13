<?php
	

	if($_POST){
		$user = $_POST['user'];
		$email = $_POST['address'];
		$main = $_POST['InputMessage'];
		
		$to = 'graxyz.com@gmail.com';
		$header = 'From:' . $email . "\r\n";
		mail($to,$user,$main,$header);

		header('Location: http://graxyz.com/index.html');
	} else {
		header('Location: http://graxyz.com/index.html');
	}

?>