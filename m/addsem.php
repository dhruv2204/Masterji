 <?php define('access',1);
  include 'head.php';
require 'core.inc.php';
require 'connect.php';?>

<?php if(adminloggedin()){
	define('access',1);
    include 'head.php';
	include'navbar2.php'; 
	echo '
	<html>
	<body class="fade-in one" style="background-color:#00000">
		<br><br>
		<div class="container-fluid text-center ">
            <h1 style="color:#0d88bf;font-size:35px;font-family:Chelsea;"><strong>'. $_GET["br"].' Branch</strong></h1><br>
			<h2 style="color:#0d88bf;font-size:35px;font-family:Chelsea; "><strong>Edit Semesters</strong></h2>
			<br><br>';
			
					function removeDirectory($path) {
														$files = glob($path . '/*');
														foreach ($files as $file) {
															is_dir($file) ? removeDirectory($file) : unlink($file);
														}
														rmdir($path);
														return;
													}
				$branch = $_GET['br'];
				if(isset($_POST['addsubject'])&&(!empty($_POST['Subject'])))
				{
					$sem=$_POST['Sem'];
					$sub=$_POST['Subject'];
					$subwospace=str_replace(" ","_",$sub);
					if(!is_dir("../Notes/".$branch."/".$sem."/".$subwospace."/"))
					{mkdir("../Notes/".$branch."/".$sem."/".$subwospace."/");}
					$subwospace=str_replace(" ","_",$sub);
					$str="<a href=\"unit.php?br=".$branch."&sem=".$sem."&sub=".$subwospace."/\">".$sub."</a><br>";
					$sql1="UPDATE `".$branch."` SET `Subject`=concat(`Subject`,'".$str."') WHERE `Sem`=".$sem.";";
					$sql2="CREATE TABLE IF NOT EXISTS `".$subwospace."` (`id` int(10) PRIMARY KEY,`Unit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,`Content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
					$query=mysqli_query($con,$sql1);
					$query2=mysqli_query($con,$sql2);
				}
				if(isset($_POST['addsemester'])&&(!empty($_POST['Sem'])))
				{	
					$sem=$_POST['Sem'];
					if(!is_dir("../Notes/".$branch."/".$sem."/"))
					{mkdir("../Notes/".$branch."/".$sem."/");}
					$sql2="INSERT INTO `".$branch."` (`Sem`, `Subject`) VALUES ('".$sem."', '');";
					$query3=mysqli_query($con,$sql2);
				}
				if(isset($_POST['deletesubject'])&&(!empty($_POST['Subject'])))
				{
					$sem=$_POST['Sem'];
					$sub=$_POST['Subject'];
					$subwospace=str_replace(" ","_",$sub);
					$dir="../Notes/".$branch."/".$sem."/".$subwospace."/";
					removeDirectory($dir);		
					$str="<a href=\"unit.php?br=".$branch."&sem=".$sem."&sub=".$subwospace."/\">".$sub."</a><br>";
					$sql1="UPDATE `".$branch."` SET Subject= REPLACE(Subject,'".$str."','') WHERE Sem=".$sem.";";
					$sql2="DROP TABLE `".$subwospace."`;";
					$query=mysqli_query($con,$sql1);
					$query2=mysqli_query($con,$sql2);
				}
				if(isset($_POST['deletesem']))
				{		
						$sem=$_POST['Sem'];
						$dir="../Notes/".$branch."/".$sem."/";
							if (is_dir($dir)){
									if ($dh = opendir($dir)){
										while (($file = readdir($dh)) !== false){
											if(($file!='.')&&($file!='..')){
												$sql5="DROP TABLE `".$file."`;";
												$query5=mysqli_query($con,$sql5);}
										}
										closedir($dh);
									}
									}
				
					removeDirectory($dir);	
					
					$sql="DELETE FROM `".$branch."` WHERE `Sem`=".$sem.";";
					$query=mysqli_query($con,$sql);
				}
				$sql="SELECT * FROM " .$branch. " order by `Sem`;";
				$result = mysqli_query($con,$sql)
				or die("Error: ".mysqli_error($con));
				$row_count=mysqli_num_rows($result);
			
	
			echo "<div class='row'> ";
				
					while($row = mysqli_fetch_array($result)){
						$editsub=$row['Subject'];
						$res=str_replace("unit.php","addunit.php",$editsub);
							
						echo " <span>
							<div class='col-sm-6 col-xs-12 col-md-3  '>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front' style='background-image: src(images/card.jpg);'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><strong>Semester ". $row['Sem']."</strong></h1>
											</div>
											<div class='panel-body back'>
												
												<strong><p style='font-size:25px;font-family:Chelsea; '>". $res ."</p>
												<form action='' method='POST' style='font-size:25px;font-family:Chelsea; '>
													 <input type='hidden' name='Sem' value='". $row['Sem'] ."'>	
													Subject: <input type='text' name='Subject'/><br>
													<input class='btn btn-danger btn-lg' type='submit' name='addsubject' value='Add'/>
													<input class='btn btn-danger btn-lg' type='submit' name='deletesubject' value='Del'/><br>
													<input class='btn btn-danger' type='submit' name='deletesem' value='X'>
												</form>
												</strong>
												
											</div>
										</div>
									</div> 
								</span>
							</div> </span>
							";
					}
					 
				echo "<span>
							<div class='col-sm-6 col-xs-12 col-md-3  '>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front' style='background-image: src(images/card.jpg);'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><br><br><br><strong>Add Semester</strong></h1>
											</div>
											<div class='panel-body back'>
											<strong><form action='' method='POST' style='color:black;font-size:25px;font-family:Chelsea; '>
													Enter Semester: <input type='text' name='Sem'/><br>
													<input class='btn btn-danger btn-lg' type='submit' name='addsemester' value='Add'/>														
												</form></strong>
												
											</div>
										</div>
									</div> 
								</span>
							</div> </span>
			</div> 
		</div>";
		
		
			 
			mysqli_close($con);
		
echo "
		<script src='http://masterjimob.dhruvsrivastav.com/js/polyfills.js'></script>
		<script src='http://masterjimob.dhruvsrivastav.com/js/demo1.js'></script>


	</body>
</html>
<h3 align='center'>You are logged in. <a href='http://masterjimob.dhruvsrivastav.com/logout.php'>Log out</a></h3>";
	}
else{ define('access',1);
 include 'loginform.inc.php';    
}


 
?>
