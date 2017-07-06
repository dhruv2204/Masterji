<!DOCTYPE html>
<html>
	<?php define('access',1);
	include 'head.php' ?>
	 
<?php  define('access',1);
include 'navbar2.php' ?>
	
	<body class="fade-in one" style="background-color:#00000">
		
		<br><br>
		<?php define('access',1);
		include 'connect.php'?>
		<?php
				$branch = $_GET['br'];
				
				$sql="SELECT * FROM ".$branch." order by `Sem`;";
				$result = mysqli_query($con,$sql)
				or header( "Location: http://masterjimob.dhruvsrivastav.com/404.html" );
				$row_count=mysqli_num_rows($result); 
				if($row_count!=0){
			
			
		echo '<div class="container-fluid text-center ">
            <h1 style="color:#000000;font-size:35px;font-family:Chelsea;"><strong>'.$_GET['br'].' Branch</strong></h1><br>
			<h2 style="color:#000000;font-size:35px;font-family:Chelsea; "><strong>Choose Your Semester</strong></h2>
			<br><br>
			
			
				
			<div class="row"> ';
				 while($row = mysqli_fetch_array($result)){
					 $u_agent = $_SERVER['HTTP_USER_AGENT'];
					 if (preg_match('/Chrome/i',$u_agent)){
						 echo " <span>
							<div class='col-sm-6 col-xs-12 col-md-3  '>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front' style='background-image: src(images/card.jpg);'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><strong>Semester ".$row['Sem']."</strong></h1>
											</div>
											<div class='panel-body back'>
												<strong><p style='font-size:25px;font-family:Chelsea; '>". $row['Subject'] ."</p></strong>
											</div>
										</div>
									</div> 
								</span>
					 </div> </span>";}
					 else {
							
							echo "<span>
									<div class='col-sm-6 col-xs-12 col-md-3  ' >
										<span>
											<div class='text hover-img center-block panel panel-default' onClick='this.classList.toggle('hover-img');>
												<div style='color:white;background-color:#16a085;height:350px;width:250px' class='img1'>
													<div class='panel-heading front'>
														<h1 style='color:white;font-size:35px;font-family:Chelsea; src:('/font/Chelsea.tff')' ><strong>Semester ".$row['Sem']."</strong></h1>
													</div>
												</div>
												<div class='text'>
													<h2 style='font-size:25px;font-family:Chelsea; src:('/font/Chelsea.tff')' ><strong>". $row['Subject'] ."</strong></h2>
												</div>
											</div>
										<span>
									</div>
							<span>";
							
				 }}
				
			echo '</div> 
		</div>';
		}
			else{
				echo '<div class="container-fluid text-center "><br><br><br><br><br><br><br><br>
            <h1 style="color:#000000;font-size:35px;font-family:Chelsea;"><strong>'.$_GET['br'].' Branch</strong></h1><br><br>
			<h2 style="color:#000000;font-size:35px;font-family:Chelsea; "><strong>No notes have been provided for this branch.<br> Please request your faculty to upload. Thanks! </strong></h2>
			<br><br>';
			}
			?>
		<?php define('access',1);
			include('switchbranch.php');
		?>

		<?php	 
			mysqli_close($con);
		?>

		<script src="http://masterji.dhruvsrivastav.com/js/polyfills.js"></script>
		<script src="http://masterji.dhruvsrivastav.com/js/demo1.js"></script>


	</body>
</html>
