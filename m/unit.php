<!DOCTYPE html>
<html lang="en" class="no-js">

	<?php define('access',1);
 	include 'head.php' ?>
	<?php 
	define('access',1);
	include 'connect.php'?>
	<body id="myPage" class=" fade-in one" style="background-color:white">
		
		
		<div id="st-container" class="st-container" >
			<!-- 	
				example menus 
				these menus will be on top of the push wrapper
			-->
			
			
			

			<nav class="st-menu st-effect-1" style="background-color:#393E46;border:2px solid #0C2233;" id="menu-4">
				<h2 class="icon icon-note">masterji</h2>
				<ul>
					<li><a class="icon icon-male" href="http://masterjimob.dhruvsrivastav.com/about.php">About Us</a></li>
					<li><a class="icon icon-study" href="http://masterjimob.dhruvsrivastav.com/index.php">Choose Your Branch</a></li>
					<li><a class="icon icon-like" href="#">Follow Us</a></li>
					<li><a class="icon icon-mail" href="http://masterjimob.dhruvsrivastav.com/contact.php">Contact Us</a></li>
					
				</ul>
			</nav>

			
							
			
			

			<!-- content push wrapper -->
			<div class="st-pusher">
				<!-- 	
					example menus 
					these menus will be under the push wrapper
				-->
				<nav class="st-menu st-effect-1 menucolor" style="background-color:#393E46;border:2px solid #0C2233;" id="menu-3">
					
					<h2 class="icon icon-note " >masterji</h2>
					<ul>
						<li><a class="icon icon-male" href="http://masterjimob.dhruvsrivastav.com/about.php">About Us</a></li>
					<li><a class="icon icon-study" href="http://masterjimob.dhruvsrivastav.com/index.php">Choose Your Branch</a></li>
					<li><a class="icon icon-like" href="#">Follow Us</a></li>
					<li><a class="icon icon-mail" href="http://masterjimob.dhruvsrivastav.com/contact.php">Contact Us</a></li>
					</ul>
				</nav>

				

				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<!-- Top Navigation -->
						
						
						<div class=" clearfix">
							<div id="st-trigger-effects" >
							<button class=" btn btn-link btn-lg " data-effect="st-effect-1" type="button">
							
							<span class="glyphicon glyphicon-menu-hamburger " style="color:#029B83" area-hidden="true"></span>
							</button>
							
								<div class="container-fluid text-center ">
			<h1 style="color:#0d88bf;font-size:25px;font-family:Titi; "><strong>
			<?php
				$subwospace=$_GET['sub'];
				$sub=str_replace("_"," ",$subwospace);
			echo $_GET['br']?> Branch -- Semester <?php echo $_GET['sem']?> -- Subject <?php echo $sub ?> </strong></h1><br>
			<h2 style="color:#0d88bf;font-size:25px;font-family:Titi; "><strong>Choose Your Unit</strong> </h2>
			<br><br>
			<?php include 'connect.php'?>
			<?php
				
				$sql="SELECT * FROM ".$subwospace." order by `id`;";
				$result = mysqli_query($con,$sql)
				or header( "Location: http://masterjimob.dhruvsrivastav.com/404.html" );
				$row_count=mysqli_num_rows($result);
			?>

			<div class="row panel-group" id="accordion">  
				<?php
					while($row = mysqli_fetch_array($result)){
						
					 
					 echo "
											<div class='panel center-block  panel-default' style='margin-bottom:20px;margin-left:10%;margin-right:10%;'>
												<div class='panel-heading' style='padding:10px'>
													<h4 class='panel-title'>
														<a data-toggle='collapse' data-parent='#accordion' href='#collapse".$row['id']."'><strong><p style='font-size:20px;font-family:Titi; '>".$row['id'].". ".$row['Unit']."</p></strong></a>
													</h4>
												</div>
												<div id='collapse".$row['id']."' class='panel-collapse collapse'>
													<div class='panel-body'><strong><p style='font-size:17px;font-family:Titi; '>". $row['Content'] ."</p></strong>
													</div>
												</div>
											</div>
										
									";
					

										
									
					
					}
					
				?>	 
			</div> 
		</div>
		
		<?php
		$branch = $_GET['br'];
		define('access',1);
		include('switchbranch.php');
		?>
		
		<?php		
		mysqli_close($con);
		?>

		<script src="http://masterjimob.dhruvsrivastav.com/js/polyfills.js"></script>
		<script src="http://masterjimob.dhruvsrivastav.com/js/demo1.js"></script>
		

							</div>
							
						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<script src="http://masterjimob.dhruvsrivastav.com/js/classie.js"></script>
		<script src="http://masterjimob.dhruvsrivastav.com/js/sidebarEffects.js"></script>
		<script src="http://masterjimob.dhruvsrivastav.com/js/jquery-2.1.1.js"></script>
		<script src="http://masterjimob.dhruvsrivastav.com/js/velocity.min.js"></script>
		<script src="http://masterjimob.dhruvsrivastav.com/js/main.js"></script> <!-- Resource jQuery -->
	</body>
</html>
