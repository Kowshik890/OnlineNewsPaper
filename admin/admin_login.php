<?php 
			 $error = '';      
			 
			 if(isset($_POST['submit']))                     
			{                 
			  
				  $name = $_POST['username'];
				  $password = $_POST['password'];
				  $link = mysqli_connect("localhost", "root", ""); //include("includes/connection.php");
				  $db = mysqli_select_db($link,  "onlinenewsportal");
				  $query = mysqli_query( $link , "SELECT * FROM admin WHERE Username='$name' AND Password='$password' ") or die(mysqli_error($link));
				  $rows = mysqli_num_rows($query);
				  echo mysqli_error($link);
				  if($rows == 1)
				  {
					  header("Location: admin_index.php");
				  }
				  else
				  {
					  // echo mysqli_error($link);
					  echo  "<script>alert('Incorrect Username or Password')</script>";
				  }
				//  mysqli_close($link);
				  
			}
?>

<!doctype>
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
				var uname = document.getElementById("username").value;
				var pass = document.getElementById("password").value;
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
					//uname.focus();
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
			}
		</script>
	</head>
	<body>
		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/navbar.php"); ?></div>
			<form method="post" onsubmit="return ValidationForm();">
				<div class="main_content-login">
					<div class="container">    
						<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
							<div class="panel panel-info" >
									<div class="panel-heading">
										<div class="panel-title"><h2 style="text-align: center;">Admin Login Form</h2></div>
									</div>     

									<div style="padding-top:30px" class="panel-body" >

										<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
											
										<form method="POST" id="loginform" class="form-horizontal" role="form">
													
											<div style="margin-bottom: 25px" class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
														<input id="username" type="text" class="form-control" name="username" value="" placeholder="Enter Your Username ">                                        
													</div>
												
											<div style="margin-bottom: 25px" class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
														<input id="password" type="password" class="form-control" name="password" placeholder="Enter Your Password">
													</div>
													

												
													<div class="input-group">
													  <div class="checkbox">
														<label>
														  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
														</label>
													  </div>
													</div>


												<div style="margin-top:10px" class="form-group">
													<!-- Button -->

													<div class="col-sm-12 controls">
													  <input type="submit" id="btn-login" style= "margin-left:80px; margin-bottom:10px; width: 100px;" class="btn btn-success" name="submit" value="Login">
													</div>
												</div>
										</form>   

												<div class="form-group">
													<div class="col-md-12 control">
														<div style="border-top: 1px solid#888; padding-top:15px;padding-left: 40px; font-size:85%" >
															Don't have an account! 
														<a href="#" onClick="window.location.href='admin_reg.php'">
															Sign Up Here
														</a>
														</div>
													</div>
												</div>    
											  



										</div>                     
								</div>  
						</div>
						
					</div>
				</div>
			</form>
		<div><?php include("includes/footer.php"); ?></div>		
	</body>
</html>