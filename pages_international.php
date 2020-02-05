<!doctype>
<html>
	<head>
		<title>Online News Portal</title>
		<link rel="icon" type="image/jpg" sizes="16x16" href="images/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="style.css" rel="stylesheet" media="all">
	</head>
	<body>
		<div><?php include("includes/header.php"); ?></div>
		<div><?php include("includes/navbar.php"); ?></div>
		<div class="main_content">
			<?php	
				
				$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); /*include("includes/connection.php");*/

				if(isset($_GET['id']))
				{
					
				$pages_id = $_GET['id'];
				$select_query = "select * from international where Id = '$pages_id'";
				$run_query = mysqli_query($conn, $select_query);

				while($row = mysqli_fetch_array($run_query))
				{
					$posts_id = $row['Id'];
					$posts_title = $row['Post_Title'];
					$posts_date = $row['Post_Date'];
					$posts_author = $row['Post_Author'];
					$posts_image = $row['Post_Image'];
					$posts_content = $row['Post_Content'];


				?>
				<div style="padding: 15px">
				<h2 style="text-align: center">

				<a href = "pages_international.php?id=<?php echo $posts_id; ?>">

				<?php echo $posts_title ;?>
				</a>
				</h2>

				<p style="margin-left: 10px;" align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

				<p align = "right">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>

				<center><img src = "images/<?php echo $posts_image ?>"width = "500" height = "300"></center>

				<p align = "justify"><?php echo $posts_content ;?></p>


				</div>

				<?php } } ?>
		</div>
		<div><?php include("includes/sidebar.php"); ?></div>
		<div><?php include("includes/footer.php"); ?></div>
	</body>
<html>