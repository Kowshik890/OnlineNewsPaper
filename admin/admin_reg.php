<?php
			$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("includes/connection.php");
			//function to test data

			if (isset($_POST['submit'])) {
				$fname = mysqli_real_escape_string($conn,$_POST['firsName']);
				$lname = mysqli_real_escape_string($conn,$_POST['lastName']);
				$uname= mysqli_real_escape_string($conn,$_POST['username']);
				$pass = mysqli_real_escape_string($conn, $_POST['password']);
				$cpass = mysqli_real_escape_string($conn, $_POST['conPassword']);
				$phone= mysqli_real_escape_string($conn,$_POST['phoneNo']);
				$email = mysqli_real_escape_string($conn, $_POST['email']);
				$address = mysqli_real_escape_string($conn,$_POST['address']);
		  
				/*filtering datas
				$fname = test_data($fname);
				$lname = test_data($lname);
				$uname = test_data($uname);
				$pass = test_data($pass);
				$cpass = test_data($cpass);
				$phone = test_data($phone);
				$email = test_data($email);
				$address = test_data($address);*/

				$insert = "insert into admin (FirstName,LastName,Username,Password,ConfirmPassword,PhoneNo,Email,Address) values('$fname','$lname','$uname','$pass','$cpass','$phone','$email','$address')";
				$result = mysqli_query($conn,$insert);
				if($result)
				{
					echo "<script>alert('Registered Successfully');</script>";
					header("Location:admin_login.php");
				}
				else
				{
					echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
				}
			}
			function test_data($data)
			{
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			//mysqli_close($conn);
		?>

<html>
	<head>
		<title>Online News Portal</title>
		<link rel="icon" type="image/jpg" sizes="16x16" href="../images/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="admin_style.css" rel="stylesheet" media="all">
		
		  <script>
			function ValidationForm(){
			  var fname = document.getElementById("firsName").value;
			  var lname = document.getElementById("lastName").value;
			  var uname = document.getElementById("username").value;
			  var pass = document.getElementById("password").value;
			  var cpass = document.getElementById("conPassword").value;
			  var phone = document.getElementById("phoneNo").value;
			  var email = document.getElementById("email").value;
			  var address = document.getElementById("address").value;
			  var emailPattern = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
			  var msg ;
			  if(fname=="")
			  {
				window.alert("First name can\'t be empty");
				//msg="Firstname can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//fname.focus();
				return false;
			  }
			  if(lname=="")
			  {
				window.alert("Last name can\'t be empty");
				//msg="Lastname can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
			//	lname.focus();
				return false;
			  }
			  if(uname=="")
			  {
				window.alert("Username can\'t be empty");
				//msg="Username can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//uname.focus();
				return false;
			  }
			  else if(username.length >=6 &&  username.length <15)
			  {
				window.alert("Username should be in a range of 6 character to 15 character");
				//msg = "Username should be in a range of 6 character to 15 character.";
				//document.getElementById("err").innerHTML = msg;
			//	uname.focus();
				return false;
			  }
			  if(pass=="")
			  {
				window.alert("Password can\'t be empty");
				//msg = "Password can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//pass.focus();
				return false;
			  }
			  else if(pass.length<=6)
			  {
				window.alert("Password must be 6 characters long");
				//msg = "Password must be 6 characters long";
				//document.getElementById("err").innerHTML = msg;
				//pass.focus();
				return false;
			  }
			  if(cpass=="")
			  {
				window.alert("Confirm password can\'t be empty");
				//msg = "Confirm password can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//cpass.focus();
				return false;
			  }
			  if(pass!==cpass)
			  {
				window.alert("Password and Confirm Password didn\'t matched");
				//msg = "Password and Confirm Password didn\'t matched";
				//document.getElementById("err").innerHTML = msg;
				//cpass.focus();
				return false;
			  }
			  if(phone=="")
			  {
				window.alert("Phone Number can\'t be empty");
				//msg = "Phone Number can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//phone.focus();
				return false;
			  }
			  if(email=="")
			  {
				window.alert("Email address can\'t be empty");
				//msg = "Email address can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//email.focus();
				return false;
			  }
			  else if(!emailPattern.test(email))
			  {
				window.alert("Email pattern is not valid");  
				//msg = "Email pattern is not valid";
				//document.getElementById("err").innerHTML = msg;
				//email.focus();
				return false;
			  }
			  if(address=="")
			  {
				  window.alert("Address can\'t be empty");
				//msg = "Address can\'t be empty";
				//document.getElementById("err").innerHTML = msg;
				//address.focus();
				return false;
			  }
			 // return true;
			}
		  </script>
	</head>
	<body>
		
		
		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/navbar.php"); ?></div>			
			<form method="post" onsubmit="return ValidationForm();">
				<div class="main_content-register">
					<div class="container">
						<h1 class="well">Admin Registration Form</h1>
						<div class="col-lg-12 well">
						<span id="err"></span>
							<div class="row">
								<form>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6 form-group">
												<label>First Name</label>
												<input id="firsName" type="text" placeholder="Enter First Name Here.." name= "firsName" class="form-control">
											</div>
											<div class="col-sm-6 form-group">
												<label>Last Name</label>
												<input id="lastName" type="text" placeholder="Enter Last Name Here.." name= "lastName" class="form-control">
											</div>
										</div>	
										
										<div class="form-group">
											<label>Username</label>
											<input id="username" type="text" placeholder="Enter Phone Number Here.." name= "username" class="form-control">
										</div>	
										
										<div class="form-group">
											<label>Password</label>
											<input id="password" type="password" placeholder="Enter Password Here.." name= "password" class="form-control">
										</div>
										
										<div class="form-group">
											<label>Confirm Password</label>
											<input id="conPassword" type="password" placeholder="Confirm Your Password Here.." name= "conPassword" class="form-control">
										</div>
										
										<div class="form-group">
											<label>Phone Number</label>
											<input id="phoneNo" type="text" placeholder="Enter Phone Number Here.." name= "phoneNo" class="form-control">
										</div>		
										
										<div class="form-group">
											<label>Email Address</label>
											<input id="email" type="email" placeholder="Enter Email Address Here.." name= "email" class="form-control">
										</div>	
										
										<div class="form-group">
											<label>Address</label>
											<textarea id="address" placeholder="Enter Address Here.." rows="3" name= "address" class="form-control"></textarea>
										</div>
										<input type="submit"  name="submit" value="Submit" style= "margin-left:160px;" class="btn btn-lg btn-info"/>
										<input type="reset"  name="reset" value="Reset" style= "margin-left:150px;" class="btn btn-lg btn-info">
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</form>
		<div><?php include("includes/footer.php"); ?></div>		
	</body>
</html>

