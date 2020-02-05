<div class="sidebar">
				<div style="border-bottom: 1px solid black;">
					<form action= "search.php" method = "get" enctype = "multipart/form-data" >
					<input type="text" name="value" id="search" placeholder="Search Here" style="border-radius: 5px; margin: 15px; width: 210px; height:30px; margin:left;font-size: 20px;">
					<input type="submit" class="search" name="search" value="Search" style="border-radius: 3px; border: 2px solid gray; margin-top: 25px; background-color: #80dced"/>
					</form>
				</div>
				
				<div class="latest">
					<h2>Latest News...</h2>
					<div class="latest_national">
						<h3><u>National</u></h3>
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal");
							$query = "select * from national order by 1 DESC LIMIT 3";
							
							$run = mysqli_query($conn, $query);
							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white;'>";
								
								$posts_id = $row['Id'];
								$title = $row['Post_Title'];
								$image = $row['Post_Image'];
								
							?>
							<div class="latest-photoandcontent">
								<div class="latest-photo">
									<a href ="pages_national.php?id=<?php echo $posts_id; ?>" >
									<img src = 'images/<?php echo $image; ?>' width = '50px' height = '50px'></img></a>
								</div>
								<div class="latest-content">
									<a href ="pages_national.php?id=<?php echo $posts_id; ?>" >
									<p><?php echo $title; ?></p></a>
								</div>
							</div>
						<?php echo "</div>"; } ?>
					</div>
					<div class="latest_national">
						<h3><u>Interational</u></h3>
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal");
							$query = "select * from international order by 1 DESC LIMIT 3";
							
							$run = mysqli_query($conn, $query);
							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white;'>";
								
								$posts_id = $row['Id'];
								$title = $row['Post_Title'];
								$image = $row['Post_Image'];
								
							?>
							<div class="latest-photoandcontent">
								<div class="latest-photo">
									<a href ="pages_international.php?id=<?php echo $posts_id; ?>" >
									<img src = 'images/<?php echo $image; ?>' width = '50px' height = '50px'></img></a>
								</div>
								<div class="latest-content">
									<a href ="pages_international.php?id=<?php echo $posts_id; ?>" >
									<p><?php echo $title; ?></p></a>
								</div>
							</div>
						<?php echo "</div>"; } ?>
					</div>
					<div class="latest_national">
						<h3><u>Sports</u></h3>
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal");
							$query = "select * from sports order by 1 DESC LIMIT 3";
							
							$run = mysqli_query($conn, $query);
							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white;'>";
								
								$posts_id = $row['Id'];
								$title = $row['Post_Title'];
								$image = $row['Post_Image'];
								
							?>
							<div class="latest-photoandcontent">
								
								<div class="latest-photo">
									<a href ="pages_sports.php?id=<?php echo $posts_id; ?>" >
									<img src = 'images/<?php echo $image; ?>' width = '50px' height = '50px'></img></a>
								</div>
								<div class="latest-content">
									<a href ="pages_sports.php?id=<?php echo $posts_id; ?>" >
									<p><?php echo $title; ?></p></a>
								</div>
							</div>
						<?php echo "</div>"; } ?>
					</div>
					<div class="latest_national">
						<h3><u>Entertainment</u></h3>
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal");
							$query = "select * from entertainment order by 1 DESC LIMIT 3";
							
							$run = mysqli_query($conn, $query);
							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white;'>";
								
								$posts_id = $row['Id'];
								$title = $row['Post_Title'];
								$image = $row['Post_Image'];
								
							?>
							<div class="latest-photoandcontent">
								<div class="latest-photo">
									<a href ="pages_entertainment.php?id=<?php echo $posts_id; ?>" >
									<img src = 'images/<?php echo $image; ?>' width = '50px' height = '50px'></img></a>
								</div>
								<div class="latest-content">
									<a href ="pages_entertainment.php?id=<?php echo $posts_id; ?>" >
									<p><?php echo $title; ?></p></a>
								</div>
							</div>
						<?php echo "</div>"; } ?>
					</div>
				</div>
			</div>