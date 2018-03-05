<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	#header {
		margin: 0 15px 0 15px;
		padding: 12px 10px 12px 10px;
		border: 1px dotted #D0D0D0;
	}

	#body {
		margin: 0 15px 0 15px;
		padding: 12px 10px 12px 10px;
		border: 1px dotted #D0D0D0;
		background-color: #F8F8F8;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Calculator!</h1>

	<div id="header">

		<form name ="userinput" action="calculator" method="post" onsubmit="return validateForm()">
			Integer Value <input type="text" name="input" value=""> 
			<br/>
			<br/>
			<b>Options : </b>
			<br/>
			<button name="sbm" value="odd" type="submit">Sum of odd-indexed digits</button>
			<button name="sbm" value="even" type="submit">Sum of even-indexed digits</button>
			<button name="sbm" value="all" type="submit">Sum of all indexed digits</button>
			
		</form>


	</div>

	<div id="body">
		<?php echo $sum ?>
	</div>

	<p class="footer">
		Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>

	
</div>
	<script>
	function validateForm() {
		var x = document.forms["userinput"]["input"].value;
		if (x == "") {
			alert("Integer Value must be filled out");
			return false;
		}else if(!isNaN(parseFloat(x))){
			alert("Please enter a valid integer value");
			return false;
		}else if(x < 0){
			alert("Please enter a valid integer value");
			return false;
		}
	}

	function isNumeric(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}
	</script>
</body>

</html>
