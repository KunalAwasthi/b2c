<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Sign up | B2C
		</title>
		<script language="JavaScript" type="text/javascript" src="js/index.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/validate.js"></script>
		<!--reCaptch JS-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	<?php
		//include head
		include 'headTags.php';
	?>
	</head>
<body class="body">
	
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="340871764456-pqe4gcc4c2ojfkreg031uelvcs9b19c6.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
		<?php
			//include head
			include 'headTags.php';
		?>
	</head>
<body class="body">
	<?php
		//including header
		include 'header.php';
	?>
	<!--Content Here-->
	<div class="form-card">
		<div class="row">
			<div class="col-6">
				
					<h3>Sign up</h3>
					<form class="jk-form" id="sgn-form">
						<div class="vs" id="vs">
							<h3 id="vsh3">Something Went wrong</h3>
						</div>
						<div class="form-group">
							<input id="name" onchange="validate({'id':'name','name':'Email Address','regex':/^[a-zA-Z ]+$/,'length':null,'min_length':9,'max_length':null})" type="text" placeholder="Full Name" name="c_fullname"/>
						</div>
						<div class="form-group">
							<input id="email" onchange="validate({'id':'email','name':'Email Address','regex':/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,'length':null,'min_length':8,'max_length':null})" type="text" placeholder="E-mail Address (eg. example@example.org)" name="c_email"/>
						</div>
						<div class="form-group">
							<input id="m-num" type="text" onchange="validate({'id':'m-num','name':'mobile','regex':/^[0-9]*$/,'length':10,'min_length':null,'max_length':null})" placeholder="10 Digit Mobile Number" name="c_mobile"/>
						</div>
						<div class="form-group">
							<input id="password" onchange="validate({'id':'password','name':'Email Address','regex':null,'length':null,'min_length':8,'max_length':null})" placeholder="8 character password" type="password" name="pwd" minlength="8" />
						</div>
						<div class="form-group">
						<div class="jk-checkbox">
							<input type="checkbox" name="ctus" id="ctus" value="1">
							<label for="ctus">opt to be a Merchant also</label>
						</div>
						<div class="g-recaptcha" data-sitekey="6LcB-VIUAAAAAOOoNpduuRkr81bVGNuMeFV0Vdl4"></div>	
						</div>
						<div class="form-group">
							<input type="button" id="btn-sgn" class="btn btn-primary-color" value="Register"/>
						</div>
					</form>
					<a class="_redfge" href="/login.php">Already a Mamber ! Log In</a>
				
			</div>
		</div>
	</div>
	<div class="blurdfg">
	</div>

	<?php
		//including footer
		include 'footer.php';
	?>
</body>
</html>