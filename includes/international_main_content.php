<div class="main_content">
				<div class="imageslide">
				
					<div id="myCarousel" class="carousel slide">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" style="width: 100%; height: 100%;" >
						<div class="item active" >
						  <img src="images/trump_prince.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Trump, Saudi Arabia in mutual embrace</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/china-saudi-web.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>China, Saudi Arabia consider deals worth about $65bn</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/letter bomb.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Letter bomb injures one in Paris office</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/china_pakistan.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>China, Pakistan to jointly build missiles, aircraft</h3>
						  </div>
						</div>
						
						<div class="item">
						  <img src="images/park_reuters.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Fall of the Queen</h3>
						  </div>
						</div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
						<span class="icon-prev"></span>
					  </a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					  </a>
					</div>
					
				</div>
				<div class="image-side">
					<div class="image-side-up">
						<img src="images/kashmir_power.jpg" alt="top" width="100%" height="190px;">
						<p>India fast-tracks hydropower projects in disputed Kashmir</p>
					</div>
					<div class="image-side-up">
						<img src="images/syria_war_17.jpg" alt="top" width="100%" height="190px;">
						<p>Syria-Israel tensions flare</p>
					</div>
				</div>
				<div class="news-content">
					<div class="news-content-left">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from international order by 1 DESC LIMIT 0,5";
							
							$run = mysqli_query($conn, $query);

							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white; height:500px;'>";
								/*echo "<table>";
								echo "<tr>";
								echo "<td>";*/
								$posts_id = $row['Id'];
								$posts_title = $row['Post_Title'];
								$posts_date = $row['Post_Date'];
								$posts_author = $row['Post_Author'];
								$posts_image = $row['Post_Image'];
								$posts_content = substr($row['Post_Content'],0,200);


							?>
							<div style="padding: 15px">
							<h3 style="font-size:16px;">

							<a href = "pages_international.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_international.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_international.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-middle">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from international order by 1 DESC LIMIT 5,5";
							
							$run = mysqli_query($conn, $query);

							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white; height:500px;'>";
								/*echo "<table>";
								echo "<tr>";
								echo "<td>";*/
								$posts_id = $row['Id'];
								$posts_title = $row['Post_Title'];
								$posts_date = $row['Post_Date'];
								$posts_author = $row['Post_Author'];
								$posts_image = $row['Post_Image'];
								$posts_content = substr($row['Post_Content'],0,200);


							?>
							<div style="padding: 15px">
							<h3 style="font-size:16px;">

							<a href = "pages_international.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_international.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_international.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-right">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from international order by 1 DESC LIMIT 10,5";
							
							$run = mysqli_query($conn, $query);

							while($row = mysqli_fetch_array($run))
							{
								echo "<div style='border: 1px dotted gray; padding: 5px; background-color: white; height:500px;'>";
								/*echo "<table>";
								echo "<tr>";
								echo "<td>";*/
								$posts_id = $row['Id'];
								$posts_title = $row['Post_Title'];
								$posts_date = $row['Post_Date'];
								$posts_author = $row['Post_Author'];
								$posts_image = $row['Post_Image'];
								$posts_content = substr($row['Post_Content'],0,200);


							?>
							<div style="padding: 15px">
							<h3 style="font-size:16px;">

							<a href = "pages_international.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_international.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_international.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
				</div>
			</div>