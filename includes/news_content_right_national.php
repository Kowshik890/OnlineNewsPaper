<?php 
						
							$conn = mysqli_connect("localhost", "root", "", "onlinenewsportal");
							$query = "select * from national order by rand() LIMIT 5"; //include("connection.php");
							
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

							<a href = "pages_national.php?id=<?php echo $posts_id; ?>">

							<?php echo $posts_title ;?>
							</a>
							</h3>

							<p align = "left">Published on:&nbsp;&nbsp;<b><?php echo $posts_date ;?></b></p>

							<center>
								<a href ="pages_national.php?id=<?php echo $posts_id; ?>" >
								<img src = "images/<?php echo $posts_image ?>"width = "290" height = "180"></a>
							</center>
							
							<p align = "right" style="padding-top:5px;">Posted by:&nbsp;&nbsp;<b><?php echo $posts_author ;?></b></p>
							
							<p align = "justify"><?php echo $posts_content ;?></p>

							<p align = "right" style="font-size: 18px " ><a href = "pages_national.php?id=<?php echo $posts_id; ?>">Read More</a></p>

							</div>
						<?php //echo "</td>"; ?>
						<?php //echo "</tr>"; ?>
						<?php /*echo "</table>";*/ echo "</div>"; } ?>