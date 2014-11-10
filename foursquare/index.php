<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>
	</head>
	<body>
		<input type="text" id="q">
		&nbsp;
		<button id="search">
			Search
		</button>
		<div id="namedata"></div>
		<script type="text/javascript" src="../libs/jquery1.9.js"></script>
		<script type="text/javascript">
			$(function() {

				$("#search").click(function() {
					var q = $("#q").val();
					$.ajax({
						url : "https://api.foursquare.com/v2/venues/search?client_id=V5HDIRMHEKCZLHAKI4P134CN2D4NW2IX2SWBKBLVQ13HATMA&client_secret=PYUMHBMECBFV25JTIWU4ZEFDK2IIVOWDEDO5ED4G0YZQ2MY3&v=20130815&near=Nairobi&query="+q,
						dataType : "json",
						type : "GET",
						success : function(data) {
							console.log(data);
							// var places = data.response.venues.categories;
							// $(places).each(function(index, arrData) {
								// $("#namedata").text(arrData.name + "<br/>");
							// });

						}
					});
				});

			});
		</script>
		<pre>
			<br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM reported WHERE seq ='95'' at line 1' in C:\wamp\www\ptk3\backend\new\_archix\Document.php on line <i>73</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> PDOException: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM reported WHERE seq ='95'' at line 1 in C:\wamp\www\ptk3\backend\new\_archix\Document.php on line <i>73</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>383568</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\ptk3\backend\new\app.php' bgcolor='#eeeeec'>..\app.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0041</td><td bgcolor='#eeeeec' align='right'>430136</td><td bgcolor='#eeeeec'>Document->deleteFoundDocument(  )</td><td title='C:\wamp\www\ptk3\backend\new\app.php' bgcolor='#eeeeec'>..\app.php<b>:</b>51</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0265</td><td bgcolor='#eeeeec' align='right'>437632</td><td bgcolor='#eeeeec'>PDOStatement->execute(  )</td><td title='C:\wamp\www\ptk3\backend\new\_archix\Document.php' bgcolor='#eeeeec'>..\Document.php<b>:</b>73</td></tr>
</table></font>
		</pre>
	</body>
</html>

