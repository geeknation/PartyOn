<?php
/*
require_once ("facebook-php-sdk/src/facebook.php");

var_dump($auth);
 $config = array(
 'appId' => '676854189038131',
 'secret' => '1b1c02ce90b6d86bc83059be2b1e0ca4',
 'allowSignedRequest' => false, // optional but should be set to false for non-canvas apps,
 );
 $facebook = new Facebook($config);
 $facebook->setAccessToken("CAAJnmGWAmjMBAIl1uSUoNN4PSuT9ZCvNGPlMam0HRuM84SVZBJJD6VmC58p9RvvUl6dfd1HHFzRJpDE5XUZCi4oPZAvpLZCZAERMypnuorRqkyX368ZBjYpt9t13UZBPOFfwaFrXw9SssWYC6dpekqQ6xdPHIPX2pmZBanwwb9bEE0U04g6qKcNqsMF9yvENDwOgZD");
 $response=$facebook->api("/me?fields=email,user_birthday");
 var_dump($response);
 //$user = $facebook -> getUser();

 if ($user) {
 try {
 $user_profile = $facebook -> api('/me');
 } catch(FacebookApiException $e) {
 $user = NULL;
 }
 }

 if ($user) {
 $logoutUrl = $facebook -> getLogoutUrl();
 } else {
 $loginUrl = $facebook -> getLoginUrl(array('scope' => 'email', 'redirect_uri' => $site_url, ));
 }

 if ($user) {
 Echo "Email : " . $user_profile['email'];
 }*/
?>
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
					appId : '676854189038131',
					access_token : 'CAAJnmGWAmjMBAIl1uSUoNN4PSuT9ZCvNGPlMam0HRuM84SVZBJJD6VmC58p9RvvUl6dfd1HHFzRJpDE5XUZCi4oPZAvpLZCZAERMypnuorRqkyX368ZBjYpt9t13UZBPOFfwaFrXw9SssWYC6dpekqQ6xdPHIPX2pmZBanwwb9bEE0U04g6qKcNqsMF9yvENDwOgZD',
					status : true,
					xfbml : true
				});
				FB.getLoginStatus(function(response) {
					if (response.status === 'connected') {
						testAPI();
					} else if (response.status === 'not_authorized') {
						//login();
						document.getElementById("loginpanel").innerHTML = "<a href='#' onclick='login()'><img src='facebook-register-button.png' /></a>";
					} else {
						//login();
						document.getElementById("loginpanel").innerHTML = "<a href='#' onclick='login()'><img src='facebook-register-button.png' /></a>";
					}
				});

			};
			( function(d) {
					var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
					if (d.getElementById(id)) {
						return;
					}
					js = d.createElement('script');
					js.id = id;
					js.async = true;
					js.src = "//connect.facebook.net/en_US/all.js";
					ref.parentNode.insertBefore(js, ref);
				}(document));
			function login() {
				FB.login(function(response) {
					if (response.authResponse) {
						location.href = "signup.php";
					} else {
						location.href = "signup.php";
					}
				}, {
					scope : 'email,user_location,user_birthday'
				});
			}

			function logout() {
				FB.logout(function(reponse) {
					location.href = "signup.php";
				});
			}

			function testAPI() {
				var resp = document.getElementById("respdata");
				FB.api('/me', function(response) {
					var email = response.email;
					var dob = response.birthday
					var image = document.getElementById('img');
					var firstname = response.first_name;
					var lastname = response.last_name;
					var gender = response.gender;
					var location = response.location;
					console.log(location);

					$("#firstname").val(firstname);
					$("#lastname").val(lastname);
					$("#location").val(location.name);
					$("#email").val(email);
					$("#dob").val(dob);

					image.setAttribute("src", 'https://graph.facebook.com/' + response.id + '/picture');

					//document.getElementById("loginpanel").innerHTML = "<button class='btn btn-danger' onclick='logout()'>Logout</button>";
				});
			}

			/*
			 function getEmail(id) {
			 var url="https://graph.facebook.com/"+id;
			 var	email='';
			 $.post(url, function(result) {
			 email=result;
			 });
			 return email;
			 }*/

		</script>
		
		
		<div id="loginpanel"></div>
		<div id="wrapper">
			<div id="sign-up-div">
				<img id="img" width="50" height="50"/>
				<div id="loginpanel"></div>
				<div id="respdata"></div>
				<form>
					<div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" id="firstname" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" id="lastname" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<input type="text" class="form-control" id="location" placeholder="Location">
					</div>
					<div class="form-group">
						<label for="dob">Date of Birth</label>
						<input type="text" class="form-control" id="dob" placeholder="dob">
					</div>
					<hr/>
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
					<button type="button" class="btn btn-primary btn-lg">
						Create Account
					</button>
				</form>
			</div>
		</div>
		<script type="text/javascript" src="libs/jquery1.9.js"></script>
	</body>
</html>

