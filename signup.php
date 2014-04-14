<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sign Up| Party on</title>
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css" type="text/css"/>
		<style type="text/css">
			#sign-up-div {
				width: 50%;
				margin: 1%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{676854189038131}',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
		<fb:registration redirect_uri="http://partyon.oakapp.co/signup.php" />
		<div id="wrapper">
			<div id="sign-up-div">
				<form>
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter Password">
					</div>

					<div class="form-group">
						<label for="confirmpassword">Confirm Password</label>
						<input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
					</div>

					<div class="form-group">
						<label for="dob">Date of Birth</label>
						<input type="text" class="form-control" id="dob" placeholder="dob">
					</div>
					<button type="button" class="btn btn-primary btn-lg">
						Create Account
					</button>
				</form>
			</div>
		</div>
	</body>
</html>

