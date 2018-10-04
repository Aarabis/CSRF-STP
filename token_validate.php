<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
	echo "<script>alert('Done!');</script>";
		
		
		$newfile = fopen("CSRFSTP_Token.txt", "r") or die("Unable to open file!");
		list($tok,$sid) = explode(",",chop(fgets($newfile)),2); 
		fclose($newfile);
		
		if($tok == $token){
			if($sessionIdentifier == $sid ){
				return true;
			}
		}		
	}		
}

?>