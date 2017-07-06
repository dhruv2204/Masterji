
<!DOCTYPE html>
<html>
	<?php
define('access',1);
	include 'head.php' ?>
	
	<body class="fade-in one" style="background-color:#00000"> 
		<?php define('access',1);
		include 'navbar2.php'?>
		<br><br><br><br>
		
		<div class="container-fluid text-center ">
			<h1 style="color:#000000;font-size:35px;font-family:Chelsea; "><strong>
			<?php
				$subwospace=$_GET['sub'];
				$sub=str_replace("_"," ",$subwospace);
			echo $_GET['br']?> Branch -- Semester <?php echo $_GET['sem']?> -- Subject <?php echo $sub ?> </strong></h1><br>
			<h2 style="color:#000000;font-size:35px;font-family:Chelsea; "><strong>Choose Your Unit</strong> </h2>
			<br><br>
			<?php define('access',1); 
			include 'connect.php'?>
			<?php
				
				$sql="SELECT * FROM ".$subwospace." order by `id`;";
				$result = mysqli_query($con,$sql)
				or header( "Location: http://masterji.dhruvsrivastav.com/404.html" );
				$row_count=mysqli_num_rows($result);
			?>

			<div class='row'> 
				<?php
					while($row = mysqli_fetch_array($result)){
						$u_agent = $_SERVER['HTTP_USER_AGENT'];
					 if (preg_match('/Chrome/i',$u_agent)){
						echo " 
							<div class='col-sm-6 col-xs-12 col-md-3'>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><strong>Unit ".$row['id']."</strong><br><br><br><strong> ".$row['Unit']."</strong></h1>
											</div>
											<div class='panel-body back'>
												<strong><p style='color:black;font-size:25px;font-family:Chelsea;' >". $row['Content'] ."</p></strong>
											</div>
										</div>
									</div> 
								</span>
							</div> 
					 ";}
					 else{
							
							echo "<span>
									<div class='col-sm-6 col-xs-12 col-md-3  '>
										<span>
											<div class='text hover-img center-block panel panel-default'>
												<div style='color:white;background-color:#16a085;height:350px;width:250px' class='img1'>
													<div class='panel-heading front'>
														<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><strong>Unit ".$row['id']."</strong><br><br><br><strong> ".$row['Unit']."</strong></h1>
													</div>
												</div>
												<div class='text'>
													<h2 style='font-size:25px;font-family:Chelsea; src:('/font/Chelsea.tff')' ><strong>". $row['Content'] ."</strong></h2>
												</div>
											</div>
										<span>
									</div>
					 <span>";}
					}
				?>	 
			</div> 
		</div>
		
		<?php define('access',1);
		$branch = $_GET['br'];
		include('switchbranch.php');
		?>
		
		<?php>		
		mysqli_close($con);
		?>

		<script src="http://masterji.dhruvsrivastav.com/js/polyfills.js"></script>
		<script src="http://masterji.dhruvsrivastav.com/js/demo1.js"></script>
		
		
		
		
	</body>
</html>
