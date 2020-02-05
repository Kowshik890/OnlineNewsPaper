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
						  <img src="images/shakib_mosad.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Shakib puts Tigers on top</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/tam_1.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>This win started when we lost in Galle: Tamim Iqbal</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/ramos_7.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Ramos takes Real two clear at top</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/root_10.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Hales, Root tons take England to record ODI win over Windies</h3>
						  </div>
						</div>
						<div class="item">
						  <img src="images/trophy_1.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Champions Trophy arrives</h3>
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
						<img src="images/iniesta-bcn.jpg" alt="top" width="100%" height="190px;">
						<p>Iniesta rejects €35m offer from China</p>
					</div>
					<div class="image-side-up">
						<img src="images/maxwell_2.jpg" alt="top" width="100%" height="190px;">
						<p>India fightback after Smith epic knock</p>
					</div>
				</div>
				<div class="news-content">
					<div class="news-content-left">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from sports order by 1 DESC LIMIT 0,5";
							
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

							<a href = "pages_sports.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_sports.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_sports.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-middle">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from sports order by 1 DESC LIMIT 5,5";
							
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

							<a href = "pages_sports.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_sports.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_sports.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-right">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from sports order by 1 DESC LIMIT 10,5";
							
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

							<a href = "pages_sports.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_sports.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_sports.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
				</div>
			</div>