<?php
	
	$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("includes/connection.php");
	if(isset($_GET['edit']))
	{
		$edit_id = $_GET['edit'];
		
		$edit_query = "select * from entertainment where Id = $edit_id";
		
		$run = mysqli_query($conn,$edit_query);
		
		while($row = mysqli_fetch_array($run))
		{
			$posts_id = $row['Id'];
			$posts_title = $row['Post_Title'];
			//$posts_date = $row['Post_Date'];
			$posts_author = $row['Post_Author'];
			$posts_image = $row['Post_Image'];
			$posts_content = $row['Post_Content'];
		}
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
	</head>
	<body>
		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/navbar.php"); ?></div>
		<div><?php include("includes/sidebar.php"); ?></div>
		<div class="main_content-insert">
			<h3 style="margin-top: 0px;">Welcome To The Admin Panel</h3>
			<p style="padding-left: 240px;">This is the admin panel where you can manage your website files and content</p>
			<form method = "post" action = "update_posts_entertainment.php?edit_form=<?php echo $edit_id; ?>" enctype = "multipart/form-data" >
				<table width = "500" align = "center" style="box-shadow: 8px 8px; border: 5px solid black;">
					<tr>
						<td align = "center" bgcolor = "#D1BDB3" colspan = "6">
							<h2>Update New Post For International</h2>
						</td>
					</tr>
				
					<tr>
						<td align = "right">Post Title: </td>
						<td><input type = "text" name = "title" size = "30" value = "<?php echo $posts_title; ?>" placeholder="Enter The Title..." tabindex="1" ></td>
					</tr>
					
					<!--tr>
						<td align = "right">Post Date: </td>
						<td><input type = "date" name = "pdate" size = "30"  value = "<?php echo $posts_date; ?>" tabindex="2" ></td>
					</tr-->
					
					<tr>
						<td align = "right">Post Author: </td>
						<td><input type = "text" name = "author" size = "30" value = "<?php echo $posts_author; ?>" placeholder="Enter The Author Name..." tabindex="3" ></td>
					</tr>
										
					<tr>
						<td align = "right">Post Image: </td>
						<td><input type = "file" name = "image"  tabindex="4" ><img src = "../images/<?php echo $posts_image; ?>" height= "80px" width = "100px" ></td>
					</tr>
					
					<tr>
						<td align = "right">Post Content: </td>
						<td><textarea name = "content" cols = "30" rows = "15"  placeholder="Enter The Content..." tabindex="5" ><?php echo $posts_content; ?></textarea></td>
					</tr>
					
					<tr>
						<td align = "center" colspan = "6"><input type = "submit" name = "update" value = "Update Now"></td>
					</tr>
				</table>
			</form>

		</div>
		<div><?php include("includes/footer.php"); ?></div>		
	</body>
</html>


<?php
	
	
	
	if(isset($_POST['update']))
	{
		$update_id = $_GET['edit_form'];
		
		$posts_title1 = $_POST['title'];
		//$posts_date1 = $_POST['pdate'];
		$posts_author1 = $_POST['author'];
		$posts_content1 = $_POST['content'];
		$posts_image1 = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		if($posts_title1=='' || $posts_author1=='' || $posts_content1=='' || $posts_image1=='')
		{
			echo "<script>alert('Any of the fields is empty.')</script>";
			exit();
		}
		else
		{
			move_uploaded_file($image_tmp,"../images/$posts_image1");
			$update_query = "update entertainment set Post_Title='$posts_title1', Post_Author='$posts_author1', Post_Image='$posts_image1', Post_Content='$posts_content1' where Id='$update_id'";
			
			if(mysqli_query($conn, $update_query))
			{
				echo "<center><h1>Post Has Been Updated Successfully!!!</h1></center>";
				echo "<script>window.open('view_posts_entertainment.php','_self')</script>";
			}
		}
	}
?>
