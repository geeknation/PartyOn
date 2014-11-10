$(function() {

	$(".login-btn").click(function() {
		var idselector="#";
		var $emptyFields = Array();
		var $emptyPasswords = Array();
		$(".sign-up-form").find("input[type=text]").each(function() {
			if ($(this).val() == "") {
				$emptyFields.push($(this).attr("id"));
			}

		});
		$(".sign-up-form").find("input[type=password]").each(function() {
			if ($(this).val() == "") {
				$emptyPasswords.push($(this).attr("id"));
			}
		});
		if ($emptyFields.length > 0) {
			for (var i = 0; i <= $emptyFields.length; i++) {
				$("#" + $emptyFields[i]).before('<label class="control-label text-danger"> Field is required </label>');
				$("#" + $emptyFields[i]).parent(".form-group").addClass("has-error");
			}
		} else if ($emptyPasswords.length > 0) {
			for (var i = 0; i <= $emptyPasswords.length; i++) {
				$("#" + $emptyPasswords[i]).before('<label class="control-label text-danger"> Field is required </label>');
				$("#" + $emptyPasswords[i]).parent(".form-group").addClass("has-error");
			}
		} else if ($("#password").val()!=$("#confirmpassword").val()) {
			$("#password").popover({
				placement : 'left',
				html:true,
				content : '<b class="text-danger">Passwords not matching</b>',
				animation : true,
				trigger:"manual"
			}).popover("show");
		} else if(validateEmail($("#email").val())==false) {
			//
			$("#email").popover({
				placement : 'right',
				html:true,
				content : '<b class="text-danger">Enter a valid email address</b>',
				animation : true,
				trigger:"manual"
			}).popover("show");
			
		}else{
			//submit the form
			var formData=$(".sign-up-form").serialize();
			$.ajax({
				url:"_epg.php",
				data:formData,
				type:"POST",
				dataType:"json",
				beforeSend:function(){
					//show loader
					
				},
				success:function(){
					//hide loader
				},
				error:function(){
					
				}
			}).done(function(data){
				if(data.action=="create-account" && data.message=="account created"){
					window.location.href="completesignup.php";
				}
			});
		}

	});
	
	function validateEmail(email){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}

});
