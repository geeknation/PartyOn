<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add event</title>
		<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.css">
	</head>
	<body>
		<div id="alert_user">
			<?php
if(isset($_GET['flag'])){
$f=$_GET['flag'];

if($f=="eventsaved"){
echo "
<div class='alert alert-success'>Event has been saved successfully</div>
";

}
else if($f=="errorsavingevent"){
echo "
<div class='alert alert-error'>
Problem occured while saving your event, please try again.
</div>
";
}
}
?>
		</div>
		<form id="createeventform" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Name:</td>
					<td>
					<input type="text" name="event_name" id="event_name">
					</td>
				</tr>
				<tr>
					<td>Location:</td>
					<td>
					<input type="text" name="event_location" id="event_location">
					</td>
				</tr>
				<tr>
					<td>From:</td>
					<td>
					<input type="text" name="event_start_date" id="event_start_date">
					start time
					<input type="text" name="event_start_time" id="event_start_time">
					</td>
				</tr>
				<tr>
					<td>To:</td>
					<td>
					<input type="text" name="event_end_date" id="event_end_date">
					end time:
					<input type="text" name="event_end_time" id="event_end_time">
					</td>
				</tr>
				<tr>
					<td>DJ:</td>
					<td>
					<input type="text" name="event_dj" id="event_dj">
					</td>
				</tr>
				<tr>
					<td>Upload an Image</td>
					<td>
					<input type="file" name="event_image" id="event_image">
					</td>
				</tr>
				<tr>
					<td>
					<input type="hidden" name="saveevent" value="saveevent">
					<input type="button" class="btn btn-default" id="create_event" value="Create Event">
					</td>
				</tr>
			</table>
		</form>
		<script type="text/javascript" src="libs/jquery1.9.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#create_event").click(function() {
					//check if values are empty using javascript
					var name = $("#event_name").val();
					var startdate = $("#event_start_date").val();
					var enddate = $("#event_end_date").val();
					var starttime = $("#event_start_time").val();
					var endtime = $("#event_end_time").val();
					var eventdj = $("#event_dj").val();
					var location = $("#event_location").val();

					if(name == "" || starttime == "" || endtime == "" || location == "" || enddate == "" || startdate == "" || eventdj == "") {

						//alert user of empty fields.
						$("#user_alert").html("<b>Please fill in all the fields</b>").addClass("alert alert-info");
					} else {
						$("#createeventform").submit();
					}
				});
			});

		</script>
		<script type="text/javascript" src="libs/bootstrap/js/bootstrap.js"></script>
	</body>
</html>

<?php

if (isset($_POST['saveevent'])) {

	//process the submitted form
	$eventname = $_POST['event_name'];
	$startdate = $_POST['event_start_date'];
	$starttime = $_POST['event_start_time'];
	$enddate = $_POST['event_end_date'];
	$endtime = $_POST['event_end_time'];
	$location = $_POST['event_location'];
	$eventimage = $_FILES['event_image']['name'];
	$dj=$_POST['event_dj'];
	
	//echo $eventname . "<p/>" . $starttime . "<p/>" . $endtime . "<p/>" . $location . "<p/>" . $eventimage;
	
	$imgname = $_FILES['event_image']['name'];
	$imgtempname = $_FILES['event_image']['tmp_name'];
	$imgsize = $_FILES['event_image']['size'];
	$imgtype = $_FILES['event_image']['type'];
	$imgdestination = "eventimages/" . $imgname;
	$imgtypes = array("image/jpeg", "image/jpg", "image/png", "image/gif");	
	$check = in_array($imgtype, $imgtypes);
	
	if ($check) {
		//upload the image.
		$upload = move_uploaded_file($imgtempname, $imgdestination);
		//make sure the image is uploaded.
		if ($upload) {
			include "dbconn.inc.php";	
			$query = "INSERT into events(`event_name`,`event_image` ,`event_start_time` ,`event_start_date` ,`event_end_time` ,`event_end_date` ,`event_dj` ,`event_location`
) VALUES('" . $eventname . "','" . $imgdestination . "','" . $starttime . "','" . $startdate . "','" . $endtime . "','" . $enddate . "','" . $dj . "','" . $location . "')";
			$stmt = $conn -> prepare($query);
			$stmt-> execute();
			//make sure the query executes
			if ($stmt) {
				//provide successful prompt to user
				header("location: addevent.php?flag=eventsaved");
			} else {
				//show error in error
				header("location: addevent.php?flag=errorsavingevent");
			}
		} else {
			//provide error if image is not uploaded
			header("location: addevent.php?flag=errorsavingevent");
		}

	}
	// else if image type is not supported
	else {
		header("location: addevent.php?flag=imagenotsupported");
	}

}


?>