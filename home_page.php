<?php
	
	if(isset($_POST['username'],$_POST['password'])){
		$uname = $_POST['username'];
		$pwd = $_POST['password'];
		if($uname == 'admin' && $pwd == 'admin123'){
			echo "<h2>";
			echo 'You have Successfully logged in!';
			echo "</h2>";			
		}		
		else{
			echo "<h2>";
			echo 'Invalid Credentials! Try Again!';
			echo "</h2>";
			exit();
		}		
	}

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>CSRF Synchronizer Token Pattern</title>
            <link rel="stylesheet" type="text/css" href="source_style.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        	<script>
        
				$(document).ready(function(){	
						
					var xhttp;
					xhttp = new XMLHttpRequest();
					
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("token_to_be_added").setAttribute('value', this.responseText);
						}   
					};
			
					xhttp.open("GET", "generate_token.php", true);
					xhttp.send(); 
					       
				});			
			</script>        
      	</head>
       
		<body>
			<div id="parent">
        	<form action="new_post.php" method="post" id="form_login">          
                <br>  <h1>Post your comments here...</h1>
                <br> <br>
                
                <div id="userpass">
                        Enter your comment: <input type="text" name="comment">
                </div>
                
                <br>
                <input type="Submit" value="Update Comment">
                
                <div id="div1">
                    <input type="hidden" name="csrf_token" value="" id="token_to_be_added"/>
                </div>           
            </form>
            </div>
        </body> 
    </html>
