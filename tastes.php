<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Tastes </title>
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="libs/Font-Awesome/css/font-awesome.min.css" type="text/css"/>
		<link rel="stylesheet" href="libs/awesome-checkbox/awesome-bootstrap-checkbox.css" type="text/css"/>
		<link rel="stylesheet" href="libs/vegas/jquery.vegas.css" type="text/css"/>
		<link rel="stylesheet" href="libs/bootstrap-checkbox-x/css/checkbox-x.min.css" type="text/css"/>

		<style type="text/css">
			.wrap {
				width: 80%;
				margin: 0 auto;
				margin-top: -1.5%;
				background-color: #FFFFFF;
				overflow: visible;
				padding: 2%;
			}
			#pallette {
				width: 40%;
				margin: 0 auto;
				border: solid thin #ccc;
			}
			div.checkbox {
				text-align: left;
				width: 50%;
				margin: 0 auto;
			}
			div.checkbox label {
				padding-left: 2%;
			}
			button.pick-tastes {
				behaviour: url();
			}
		</style>
	</head>
	<body>
		<?php ?>
		<div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</div><!--end of navbar-->

		<div class="wrap">
			<div class="panel panel-default" id="pallette">
				<div class="panel-heading">
					Choose what you Like
				</div>
				<div class="panel-body">

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="clubbing" type="checkbox" class="col-sm-2" value="clubbing" data-size="xl" data-toggle="checkbox-x">
								<label for="clubbing" class="col-lg-10"> <b>Clubbing</b> </label>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="concerts" type="checkbox" class="col-sm-2" value="concerts" data-size="xl" data-toggle="checkbox-x">
								<label for="concerts" class="col-lg-10"> <b>Concerts</b> </label>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="festivals" type="checkbox" class="col-sm-2" value="festivals" data-size="xl" data-toggle="checkbox-x">
								<label for="festivals" class="col-lg-10"> <b>Festivals</b> </label>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="sporting_events" type="checkbox" class="col-sm-2" value="sporting_events" data-size="xl" data-toggle="checkbox-x">
								<label for="sporting_events" class="col-lg-10"> <b>Sporting Events</b> </label>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="house_parties" type="checkbox" class="col-sm-2" value="house_parties" data-size="xl" data-toggle="checkbox-x">
								<label for="house_parties" class="col-lg-10"> <b>House Parties</b> </label>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox checkbox-success checkbox-circle">
								<input id="corporate_events" type="checkbox" class="col-sm-2" value="corporate_events" data-size="xl" data-toggle="checkbox-x">
								<label for="corporate_events" class="col-lg-10"> <b>Corporate Events</b> </label>
							</div>
						</div>

						<input type="button" class="btn btn-info btn-block" id="pick-tastes" value="Save and continue">
					</form>

				</div>

			</div>
		</div>

		</div>

		<script type="text/javascript" src="libs/jquery1.9.js"></script>
		<script type="text/javascript" src="libs/modernizr/modernizr-2.8.3.js"></script>
		<script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="libs/vegas/jquery.vegas.js"></script>
		<script type="text/javascript" src="libs/webshim/js-webshim/minified/polyfiller.js"></script>
		<script type="text/javascript">
			Modernizr.load({
				test : Modernizr.geolocation,
				yep : 'geo.js',
				nope : 'geo-polyfill.js'
			});
			webshims.polyfill();
			jQuery(document).ready(function($) {

				/*
				 $.vegas('slideshow', {
				 backgrounds : [{
				 src : 'images/1.jpg'
				 }, {
				 src : 'images/DJ1.jpg'
				 }, {
				 src : 'images/GHGHG.jpg'
				 }],
				 fade : 7000
				 });*/

			});

		</script>

	</body>
</html>

