<!doctype>
<html>
	<head>
		<title>Online News Portal</title>
		<link rel="icon" type="image/jpg" sizes="16x16" href="../images/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="admin_style.css" rel="stylesheet" media="all">
	</head>
	<body>
		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/navbar.php"); ?></div>
		<div><?php include("includes/sidebar.php"); ?></div>
		<div class="main_content-insert">
			<h3 style="margin-top: 0px;">Welcome To The Admin Panel</h3>
			<p style="padding-left: 240px;">This is the admin panel where you can manage your website files and content</p>
			<form method = "post" action = "insert_posts_international.php" enctype = "multipart/form-data" >
				<table width = "500" align = "center" style="box-shadow: 8px 8px; border: 5px solid black;">
					<tr>
						<td align = "center" bgcolor = "#D1BDB3" colspan = "6">
							<h2>Insert New Post For Internaional</h2>
						</td>
					</tr>
				
					<tr>
						<td align = "right">Post Title: </td>
						<td><input type = "text" name = "title" size = "30"  placeholder="Enter The Title..." tabindex="1" required></td>
					</tr>
					
					<!--tr>
						<td align = "right">Post Date: </td>
						<td><input type = "date" name = "pdate" size = "30"   tabindex="2" required></td>
					</tr-->
					
					<tr>
						<td align = "right">Post Author: </td>
						<td><input type = "text" name = "author" size = "30"  placeholder="Enter The Author Name..." tabindex="3" required></td>
					</tr>
										
					<tr>
						<td align = "right">Post Image: </td>
						<td><input type = "file" name = "image"  tabindex="4" required></td>
					</tr>
					
					<tr>
						<td align = "right">Post Content: </td>
						<td><textarea name = "content" cols = "30" rows = "15"  placeholder="Enter The Content..." tabindex="5" required></textarea></td>
					</tr>
					
					<tr>
						<td align = "center" colspan = "6"><input type = "submit" name = "submit" value = "Publish Now"></td>
					</tr>
				</table>
			</form>

		</div>
		<div><?php include("includes/footer.php"); ?></div>		
	</body>
</html>

<?php  
	$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("includes/connection.php");
	
	if(isset($_POST['submit']))
	{
		$posts_title = $_POST['title'];
		//$posts_date = $_POST['pdate'];
		$posts_author = $_POST['author'];
		$posts_content = $_POST['content'];
		$posts_image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		
		if($posts_title=='' or $posts_content=='' or $posts_author=='' or $posts_image=='')
		{
			echo "<script>alert('Any of the field is empty.')</script>";
			
			exit();

		}
		else
		{
			move_uploaded_file($image_tmp,"../images/$posts_image");
			$insert_query = "insert into international (Post_Title,Post_Author,Post_Image,Post_Content) values ('$posts_title','$posts_author','$posts_image','$posts_content')";
			$result = mysqli_query($conn,$insert_query);
			if($result)
			{
				echo "<script>alert('Post Published Successfully!!!')</script>";
				echo "<script>window.open('view_posts_international.php','_self')</script>";
			}
			else
			{
				echo "ERROR: Could not able to execute $insert_query. " . mysqli_error($conn);
			}
		}
	}


?>
