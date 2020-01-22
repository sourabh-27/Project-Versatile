<!DOCTYPE html>
<html>
<title>Model Login form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 	 <!-- Animinate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- End -->
</head>
	<style type="text/css"> 
		body{
			/*background: url(images/15.jpg);*/
			background-image: linear-gradient(to right, #C04848 , #480048);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			height: 550px;
			width:100%;
			}
	</style>
<body>
	
		

	 <div class="container wow zoomIn"  style="margin-top: 100px; ">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-header">
					<h3 class="text-center">Login</h3>
					 <a href="index.php"><button style="margin-top: -35px;"  type="button" class="close glyphicon glyphicon-remove " data-dismiss="modal "></button></a>
					<!-- <div style="float: right; margin-top: -35px;"><a href="index.php"><button><span class="glyphicon glyphicon-remove text-dark"></span></button></a></div> -->
				</div>

				<div class="modal-body">
					<form id="validateForm" action="action.php" method="post">
						<div class="form-group">
							<label><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Email:</label>
							<input type="email" name="user" class="form-control" placeholder="Email">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span>  Password:</label>
							<input type="password" name="password" class="form-control"
							placeholder="Password">
						</div>
						<button type="submit" class="btn btn-danger ">Login</button>
					</form>
					
				</div>

					<!-- <div class="modal-footer justify-content-center"> 
						<button type="submit" name="submit" class="btn btn-danger">Login</button>
						
					</div>-->
				
			</div>
			
		</div>

		
	</div>


	<!-- </div> -->

<!-- Wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- end -->




<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script type="text/javascript">
	$(document).ready(function(){	
$('#validateForm').bootstrapValidator({
/*feedbackIcons: {
	valid: 'glyphicon glyphicon-ok',
	invalid: 'glyphicon glyphicon-remove',
	validating: 'glyphicon glyphicon-refresh'
},*/
fields: {
	
	email: {
		validators: {
			notEmpty: {
				message: 'Please Enter your email address'
			},
			emailAddress: {
				message: 'Please Enter a valid email address'
			}
		}
	},
	password: {
		validators: {
			notEmpty: {
				message: 'Enter your profile password'
			}
			/*regexp:{
         	regexp: "^(?=.*\d).{4,8}$",
			message:' Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.'
       		}*/
		}
	}
	}
	
});
});
</script>
</body>
</html>   