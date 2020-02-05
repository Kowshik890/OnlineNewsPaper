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
						  <img src="images/jaya_ahsan_6.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Jaya on Boishakh</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/avatar_2.jpg" alt="Chania" class="img-responsive">
						  <div class="carousel-caption">
							<h3>"Avatar 2" movie "not happening" in 2018, James Cameron says</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/jennifer.jpg-ns.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Jennifer Lawrence tops list of highest-paid actresses</h3>
						  </div>
						</div>

						<div class="item">
						  <img src="images/maxresdefault.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Animation movies Despicable Me 3 to watch out in 2017</h3>
						  </div>
						</div>
						<div class="item">
						  <img src="images/aynabaji_4.jpg" alt="Flower" class="img-responsive">
						  <div class="carousel-caption">
							<h3>Aynabaji</h3>
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
						<img src="images/aamir_khan_6.jpg" alt="top" width="100%" height="190px;">
						<p>No interest in Hollywood?</p>
					</div>
					<div class="image-side-up">
						<img src="images/emma watson.jpg" alt="top" width="100%" height="190px;">
						<p>Emma Watson private photos stolen in hack</p>
					</div>
				</div>
				<div class="news-content">
					<div class="news-content-left">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from entertainment order by 1 DESC LIMIT 0,5";
							
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

							<a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_entertainment.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-middle">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from entertainment order by 1 DESC LIMIT 5,5";
							
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

							<a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_entertainment.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
					
					<div class="news-content-right">
					
						<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal"); //include("connection.php");
							$query = "select * from entertainment order by 1 DESC LIMIT 10,5";
							
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

							<a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_entertainment.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_entertainment.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>
					</div>
				</div>
			</div>