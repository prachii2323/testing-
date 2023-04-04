<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  </head>
  <style>
	input,select{
		margin-bottom:20px;
	}
	img{
		margin-bottom:40px;
	}
	form{
		width:90%;
		border-radius:10px;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
		padding:20px;
		margin:auto;
		margin-top:10%;
	}
	.input{
		width:70%;
		margin:auto;
		border:2px solid green;
	}
	@media screen and (min-width: 1000px) {
    form{
    width:40%;
  }
}
	</style>
<body>
	<form align="center" method="post">
	<h2>Login</h2><br>
	<input type="password" name="pass" class=" input form-control" placeholder="Password" required></input><br>
<input type="submit" value= "Login" class="btn btn-lg btn-success" name="Submit"></input>
	</form>
</body>
<?php
session_start();
if(!empty($_POST['Submit'])){
	$givenPass=$_POST['pass'];
	$password = 'faguniya';
	$hashedPassword= password_hash($password, PASSWORD_DEFAULT);
if(password_verify($givenPass,$hashedPassword)){
	$_SESSION['flag']=1;
	?>
	<script>
		var answer = confirm ("Please click on OK to continue.")
		if (answer)
		window.location=document.URL+="/CGM";	
	</script>
	<?php
}else{
    ?>
    <script>
    alert("Invalid Password");
    </script>
    <?php
  }
}
?>
