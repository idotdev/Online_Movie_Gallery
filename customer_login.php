<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER</title>
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
</head>
<style type="text/css">
.block {
  display: block;
  padding: 6px 12px;
  margin-bottom: 3px;
}
.block2 {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 3px;
  margin-top: 4px;
  cursor: pointer;
}
html, body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body
{
	background-image: url('clou.jpeg');
	vertical-align: middle;
	display: table-cell;

}
input
{
	border-radius: 10px;
	display: grid;
  	place-items: center;
}	
input:hover
{
	transform: scale(1.02);
}		
body
{
	background-image: url('clou.jpeg');
}
button
{
	border: 2px solid grey;
	border-radius: 10px;
	font-family: veronica;
	font-size: 15px;
}
button:hover
{
	transform: scale(1.02);
	background-color: #E3E3E3;
	cursor: pointer;
}
h3,h4
{
	font-family: Cambria;
	font-size: 18px;
}
</style>
<body>
	<form method="get" action="customer_lobby.php">
	<h3 style = "text-align: center">Customer Log-in</h3>
	<input style = "text-align: center" type="text" name="x" class="block" placeholder="CUSTOMER ID" required>
	<input style = "text-align: center" type="password" name="y" class="block" placeholder="PASSWORD" required>
	<button name="submit" class="block2">LOGIN</button>
	<button name="submit" class="block2"onclick="f_id()">FORGET ID</button>
	</form>
	<h4>New User? Sign up below:</h4>
	<button name="submit" style="margin-top: -12px;" class="block" onclick="u_sign()">SIGN UP</button>
	<?php

	if(isset($_GET['fn']))
		if($_GET['fn']=="empty")
			echo("<h4>* Invalid details!</h4>");

	?>
	
	

<script type="text/javascript">
  function u_sign()
	{
		window.location="customer_signup.php";
	}	

  function f_id()
	{
		window.location="customer_fid.php";
	}	
</script>
</body>
</html>
