<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Login</title>
  </head>

  <body class="text-center">
    <form action="<?=base_url('welcome/checkuser')?>" name="loginform" method="POST" class="form-signin" onsubmit="return validateForm()">
      
	  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="loginid" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	<script>
	
	function validateForm() {
		var x = document.forms["loginform"]["loginid"].value;
		if (x == "") {
			alert("login id must be filled out");
			return false;
		}
		
		var y = document.forms["loginform"]["pwd"].value;
		if (y == "") {
			alert("password must be filled out");
			return false;
		}


	}
	</script>
	
	

  </body>
</html>