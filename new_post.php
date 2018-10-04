<?php

require_once 'token_validate.php';


$val = $_POST["csrf_token"];


if(isset($_POST['comment'])){
	if(token::checkToken($val,$_COOKIE['cookieName_sessionID'])){
		echo "<h2>";
		echo "Your comment is ! ".$_POST['comment'];	
		echo "</h2>";	
	}
	
	else{
		echo "<h2>";
		echo "Wrong".$_COOKIE['cookieName_sessionID'];
		echo "</h2>";
	}
}

?>