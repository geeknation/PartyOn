<?php

function parse_signed_request($signed_request) {
	list($encoded_sig, $payload) = explode('.', $signed_request, 2);

	$secret = "appsecret";
	// Use your app secret here

	// decode the data
	$sig = base64_url_decode($encoded_sig);
	$data = json_decode(base64_url_decode($payload), true);

	// confirm the signature
	$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
	if ($sig !== $expected_sig) {
		error_log('Bad Signed JSON signature!');
		return null;
	}

	return $data;
}

function base64_url_decode($input) {
	return base64_decode(strtr($input, '-_', '+/'));
}

$data = parse_signed_request($_POST['signed_request']);
echo json_decode($data);
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
				 });*/

			});
		});

	</script>
</html>

