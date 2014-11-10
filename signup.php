<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sign Up| Party On</title>
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="libs/vegas/jquery.vegas.css" type="text/css"/>
		<style type="text/css">
			body {
				background: #390072;
				font-family: 'Open Sans', sans-serif !important;
			}
			#wrapper {
				margin-top: 1%;

			}
			#billboard {
				width: 30%;
				background: #FFFFFF;
				height: 400px;
				float: left;
				margin-left: 3%;
			}
			#sign-up-div {
				border: solid thin #ccc;
				background: #FFFFFF;
				margin:0 auto;
				padding: 2%;
				width: 70%;
			}
			#sign-up-div > p {
				margin: 0 auto;
			}
			.navbar-default {
				background-color: #FFFFFF !important;
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
						document.getElementById("facebook-login").innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block btn-fb" onclick="login()">Sign Up with Facebook (recommended)</button><p>OR</p>';
					} else {
						document.getElementById("facebook-login").innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block btn-fb" onclick="login()">Sign Up with Facebook (recommended)</button><p>OR</p>';
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
					var name = response.name;
					var firstname = response.first_name;
					var lastname = response.last_name;
					var gender = response.gender;
					var location = response.location;

					$("#fb-name").text(name);
					// $("#firstname").val(firstname);
					// $("#lastname").val(lastname);
					// $("#location").val(location.name);
					// $("#email").val(email);
					// $("#dob").val(dob);

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
						<a href="#"></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img id="img" width="30" height="30" class="img-circle"/>
							<b>&nbsp;<span id="fb-name"></span></b>
						 <b class="caret"></b>
						 </a>
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
		<!-- end of navbar -->
		<div id="wrapper">
			<!-- <div id="billboard" class="panel">

			</div> -->
			<div id="sign-up-div" class="panel panel-default">
				<div id="facebook-login"></div>
				<div class="panel-heading">
					
				</div>
				<hr />

				<form class="sign-up-form">
					<div id="respdata"></div>
					<!-- <div class="form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control input-sm" id="firstname" name="firstname" placeholder="First Name">
					</div>
					<div class="form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control input-sm" id="lastname" name="lastname" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control input-sm" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<input type="text" class="form-control input-sm" id="location" name="location" placeholder="Location">
					</div>
					<div class="form-group">
						<label for="dob">Date of Birth</label>
						<input type="text" class="form-control input-sm" id="dob" name="dob" placeholder="dob">
					</div> -->
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control input-sm" id="username" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control input-sm" id="password" name="password" placeholder="Enter Password">
					</div>

					<div class="form-group">
						<label for="confirmpassword">Confirm Password</label>
						<input type="password" class="form-control input-sm" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
					</div>
					<button type="button" class="btn btn-primary btn-lg login-btn">
						Create Account
					</button>
					<input type="hidden" value="create-user" class="flag" name="flag">
				</form>

			</div>

		</div>
		<script type="text/javascript" src="libs/jquery1.9.js"></script>
		<script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="main.js"></script>
		<script type="text/javascript" src="libs/vegas/jquery.vegas.js"></script>
		<script type="text/javascript">
			$(function() {

				$.vegas('slideshow', {
					backgrounds : [{
						src : 'images/1.jpg'
					}, {
						src : 'images/DJ1.jpg'
					}, {
						src : 'images/GHGHG.jpg'
					}],
					fade : 7000
				});

			});
		</script>
	</body>
</html>

