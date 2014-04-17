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
			body{
				background:#390072;
			}
			#sign-up-div {
				border: solid thin #000000;
				background:#FFFFFF;
				margin-top:5%;
				text-align:center;
				padding:1%;
			}
			#sign-up-div>p{
				margin:0 auto;
			}
			#loginpanel {
				border: solid thin #000000;
				background:#FFFFFF;
			}
			#start-user-panel {
				width: 50%;
				margin-right: 5%;
				float: right;
				padding: 1%;
			}
			.btn-fb{
				
			}
			.navbar-default{
				background-color:#FFFFFF !important;
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
						location.href="signup.php";
					} else if (response.status === 'not_authorized') {
						document.getElementById("facebook-login").innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block btn-fb" onclick="login()">Sign Up with Facebook (recommended)</button>';
					} else {
						document.getElementById("facebook-login").innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block btn-fb" onclick="login()">Sign Up with Facebook (recommended)</button>';
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

		<div class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Link</a>
					</li>

					<li>
						<a href="#">Link</a>
					</li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">Link</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>

		<div id="wrapper">

			<div id="start-user-panel">
				<div id="loginpanel" class="panel">
					<form class="form-inline" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="password">
						</div>
						<button type="submit" class="btn btn-default">
							Login
						</button>
					</form>
				</div>
				<div id="sign-up-div" class="panel">
					<div id="facebook-login"></div>
					<p>OR</p>
					<button type="button" class="btn btn-lg btn-block">Sign Up with Email</button>
				</div>
			</div>

		</div>
		<script type="text/javascript" src="libs/jquery1.9.js"></script>
		<script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="main.js"></script>

	</body>
</html>

