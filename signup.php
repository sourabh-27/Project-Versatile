<!DOCTYPE html>
<html>
<title>Model SignUP form</title>
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
			}
	</style>
<body>
	<!-- <div class="container"> -->
		<!-- <h1 class="text-white bg-dark text-center">Modals in Bootstrap 4</h1> -
		<button class="btn btn-success" data-target="#mymodel" data-toggle="modal"></button>-->

	<div class="container wow fadeInDown" style="margin-top: 20px">
		<div class="modal-dialog modal-dialog-centered"> 
			<div class="modal-content">

				<div class="modal-header">
					<h3 class="text-center text-danger">Signup</h3>
					<a href="index.php"><button style="margin-top: -35px;"  type="button" class="close" data-dismiss="modal">&times;</button></a>
				</div>

				<div class="modal-body">
					<form id="validateForm" action="insert.php" method="post">

						<div class="form-group">
							<label><span class="glyphicon glyphicon-user " aria-hidden="true"></span>  Name:</label>
							<input type="text" name="name" class="form-control " placeholder="Name">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-envelope " aria-hidden="true"></span>  Email:</label>
                            <input class="form-control" placeholder="Email" name="email">
                            </div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span>  Password:</label>
							<input type="password" name="password" class="form-control"
							placeholder="Password">
						</div>

						<div class="form-group">
							<label><span class="glyphicon glyphicon-lock " aria-hidden="true"></span> Confirm Password:</label>
                             <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword">
                        </div>

                        <div class="form-group">
                        	<label><span class="glyphicon glyphicon-phone " aria-hidden="true"></span> Contact:</label>
                             <input type="text" class="form-control"  placeholder="Contact" name="phone">
                        </div>

                        <div class="form-group">
                        	<label><span class="glyphicon glyphicon-home " aria-hidden="true"></span> City:</label>
                        	<input  type="text" class="form-control"  placeholder="City" name="city">
                        </div>

                        <div class="form-group">
                        	<label><span class="glyphicon glyphicon-education " aria-hidden="true"></span> College name:</label>
                             <input  type="text" class="form-control"  placeholder="College name" name="collegeName">
                        </div>
                        <button type="submit" class="btn btn-danger">Login</button>
					</form>
					
				</div>

					<!-- <div class="modal-footer justify-content-center"> 
						<button type="submit" name="submit" class="btn btn-danger" data-dismiss="modal">Submit</button>
						
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
	name: {
		validators: {
			regexp:{
				regexp:/^[a-z\s]+$/i,
				message:'The full name can consist of alphabetical characters and spaces only'
			},
			stringLength: {

				min: 3,
				message: 'Please Enter your Full name with minimum 3 letters length'
			},
			notEmpty: {
				message: 'Please Enter your Full name'
			}
		}
	},

	phone: {
		validators: {
			stringLength: {

				min: 10,
				message: 'Please Enter your Phone number with minimum 10 digit length'
			},
			numeric: {
				message: 'The phone no must be a number'
			},
			notEmpty: {
				message: 'Please Enter your phone number'
			}
		}
	},
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
			stringLength: {
				min: 5,
				message: 'Please Enter your password with minimum 5 characters length'
			},
			notEmpty: {
				message: 'Enter your profile password'
			},
		}
	},
	confirmPassword: {
		validators: {
			notEmpty: {
				message: 'Enter confirm your profile password'
			},
			identical: {
				field: 'password',
				message: 'Enter the password, what enter in password field'
			}
		}
	 },
	 city: {
		validators: {
			regexp:{
				regexp:/^[a-z\s]+$/i,
				message:'The city name can consist of alphabetical characters and spaces only'
			},
			stringLength: {
				min: 3,
				max: 20,
				message:'Please enter at least 3 characters and not more than 20'
			},
			notEmpty: {
				message: 'Please Enter your city'
			}
		}
	},
	collegeName: {
		validators: {
			stringLength: {
				min: 2,
				max:50,
				message: 'Please Enter your college name with minimum 2 letters length'
			},
			regexp:{
				regexp:/^[a-z\s]+$/i,
				message:'The college name can consist of alphabetical characters and spaces only'
			},
			notEmpty: {
				message: 'Please Enter your college name'
			}
		}
	},
	}
	
});
});
</script>
</body>
</html>