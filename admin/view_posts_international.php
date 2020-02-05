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
		<p style="padding-left: 365px;"><b>View Posts Form International Table</b></p>
		<table width = "960px" align="center" border = "2px">
		<tr>
			<td colspan = "10" align = "center" bgcolor = "#acedef" >
				<h2>View All Posts</h2>
			</td>
		</tr>
		
		<tr bgcolor= "#03adb2" align= "center">
			<th>Post ID</th>
			<th>Post Title</th>
			<th>Post Date</th>
			<th>Post Author</th>
			<th>Post Image</th>
			<th>Post Content</th>
			<th>Delete Post</th>
			<th>Update Post</th>			
		</tr>
		
		
		<?php 
			$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("includes/connection.php");
		
			$select_query = "select * from international order by 1 DESC";
			
			if($result = mysqli_query($conn, $select_query)){
				if(mysqli_num_rows($result) > 0){
			
			while($row = mysqli_fetch_array($result))
			{
				$posts_id = $row['Id'];
				$posts_title = $row['Post_Title'];
				$posts_date = $row['Post_Date'];
				$posts_author = $row['Post_Author'];
				$posts_image = $row['Post_Image'];
				$posts_content = substr($row['Post_Content'],0,80);	
		
		?>
		<tr align= "center">
			<td><?php echo $posts_id; ?></td>
			<td><?php echo $posts_title; ?></td>
			<td><?php echo $posts_date; ?></td>
			<td><?php echo $posts_author; ?></td>
			<td><img src = "../images/<?php echo $posts_image; ?>" height = "80" width ="100" ></td>
			<td><?php echo $posts_content; ?></td>
			<td><a href = "delete_posts_international.php?delete=<?php echo $posts_id; ?>">Delete</a></td>
			<td><a href = "update_posts_international.php?edit=<?php echo $posts_id; ?>">Update</a></td>
			
		</tr>
			<?php } } } ?>
		</table>
	
	</div>
	<div><?php include("includes/footer.php"); ?></div>	
</body>
</html>
