<?php
	$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("includes/connection.php");

	if(isset($_GET['delete']))
	{
		$delete_id = $_GET['delete'];
		$delete_query = "delete from international where Id = '$delete_id'";
		if(mysqli_query($conn,$delete_query))
		{
			echo "<script>alert('Post Has Been Deleted...')</script>";
			echo "<script>window.open('view_posts_international.php','_self')</script>";
		}
	}
?>