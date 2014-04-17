<?php

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>

	</head>
	<body>
		<h1>New Web Project Page</h1>
		<div id="fb-root"></div>

	</body>
	<script type="text/javascript" src="libs/jquery1.9.js"></script>
	<script type="text/javascript">
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

		}; ( function(d) {
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

				

				image.setAttribute("src", 'https://graph.facebook.com/' + response.id + '/picture');

				//document.getElementById("loginpanel").innerHTML = "<button class='btn btn-danger' onclick='logout()'>Logout</button>";
			});
		}

		/*
		 $(document).ready(function() {
		 $.ajaxSetup({
		 cache : true
		 });
		 $.getScript('//connect.facebook.net/en_US/all.js', function() {
		 FB.init({
		 appId : '676854189038131',
		 fields : 'last_name'
		 }, function(response) {
		 console.log(response);

		 });
		 /*
		 FB.api('/me', {
		 fields : 'last_name'
		 }, function(response) {
		 console.log(response);
		 });

		 });
		 });*/

	</script>
</html>

