<?php

	session_start();
	$newfile = fopen("CSRFSTP_Token.txt", "w") or die("Cannot open file!");
	$_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
	$txt = $_SESSION['csrf_token'].",";
	fwrite($newfile, $txt);

	$session_id = session_id();
	setcookie('cookieName_sessionID',$session_id,time()+60*60*24*365,'/');
	$txt1 = $session_id."\n";
	fwrite($newfile, $txt1);

	fclose($newfile);

	echo $_SESSION['csrf_token'];

?>