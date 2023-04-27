



<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      
    });
  });
  </script>
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" action="login.php" method="post" class="input-group" action="index.html">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" name="u_name" id="email" class="input-field" placeholder="Username or Phone Number" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" name="psame" id="password" class="input-field" placeholder="Password" style="width: 88%; border: none;" required="required">
				</div>

				<br><br>
				<button type="submit" name="login" class="submit-btn">Log In</button>
			</form>


			<!-- <div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div> -->
			
			<!-- Registration Form -->
			<form id="register" action="regis.php" method="post" class="input-group">
				<input type="text" name="u_name" class="input-field" placeholder="Full Name" required="required">
				<input type="email" name="e_mail" class="input-field" placeholder="Email Address" required="required">
				<input type="password"  class="input-field" placeholder="Create Password" name="psame" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="csame" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" name="send" id="btnSubmit" class="submit-btn reg-btn">Register</button>
			</form>
		</div>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>