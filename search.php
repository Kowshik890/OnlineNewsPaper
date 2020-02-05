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
			<h2 align = "center">Your Search Result is...</h2>
			<?php 
				$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); /*include("includes/connection.php");*/
				
				if(isset($_GET['search']))
				{
					$search_id = $_GET['value'];
					
					
					 //"SELECT * FROM national WHERE Post_Title LIKE '%$search_id%'";
					$search_query = "(SELECT * FROM national WHERE Post_Title LIKE '%$search_id%') 
										UNION
										(SELECT * FROM international WHERE Post_Title LIKE '%$search_id%') 
										UNION
										(SELECT * FROM sports WHERE Post_Title LIKE '%$search_id%')
										UNION
										(SELECT * FROM entertainment WHERE Post_Title LIKE '%$search_id%')";
					$run_query = mysqli_query($conn, $search_query);
					
					while($search_row = mysqli_fetch_array($run_query))
					{
						$posts_id = $search_row['Id'];
						$title = $search_row['Post_Title'];
						$posts_date = $search_row['Post_Date'];
						$posts_author = $search_row['Post_Author'];
						$image = $search_row['Post_Image'];
						$content = substr($search_row['Post_Content'],0,200);
					
			?>
			<center>
			<a href = "pages_national.php?id=<?php echo $posts_id; ?>">
			<h3><?php echo $title; ?></h3></a>
			<p style="padding-left: 20px" align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>
			<p style="padding-right: 20px" align = "right">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
			<img src = "images/<?php echo $image; ?>"width = "400" height = "250">
			<p style="padding:15px" align = "justify"><?php echo $content; ?></p>
			</center>
			<?php } } ?>
		</div>
		<div><?php include("includes/sidebar.php"); ?></div>
		<div><?php include("includes/footer.php"); ?></div>
	</body>
<html>