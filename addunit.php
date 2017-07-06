 <?php define('access',1);
  include 'head.php';
require 'core.inc.php';
require 'connect.php';?>

<?php if(adminloggedin()){
	define('access',1);
    include 'head.php';
	include'navbar2.php'; 
	$subwospace=$_GET["sub"];
	$sub=str_replace("_"," ",$subwospace);
	echo '
	<html>
	<body class="fade-in one" style="background-color:#00000"> 
		
		<br><br><br><br>
		<div class="container-fluid text-center ">
			<h1 style="color:#0d88bf;font-size:35px;font-family:Chelsea; "><strong>'.$_GET["br"].' Branch -- Semester ' . $_GET["sem"].' -- Subject ' .  $sub. '</strong></h1><br>
			<h2 style="color:#0d88bf;font-size:35px;font-family:Chelsea; "><strong>Edit Unit</strong> </h2>
			<br><br>';
						function removeDirectory($path) {
														$files = glob($path . '/*');
														foreach ($files as $file) {
															is_dir($file) ? removeDirectory($file) : unlink($file);
														}
														rmdir($path);
														return;
													}
			
				$branch = $_GET["br"];$sem=$_GET["sem"];
				if(isset($_POST["uploadaction"]))
				{
						$id2=$_POST['id'];
						$target_dir = "Notes/".$branch."/".$sem."/".$subwospace."/".$id2."/";
						$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
						$uploadOk = 1;
						$fullname=pathinfo($target_file,PATHINFO_BASENAME);
						$filename=pathinfo($target_file,PATHINFO_FILENAME);
						$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						
							$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
							if($check == false) {
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>File is not ok</strong> </span>";
								$uploadOk = 0;
							}
						
						// Check if file already exists
						else if (file_exists($target_file)) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>The file already exists.</strong> </span>";
							$uploadOk = 0;
						}
						// Check file size
						else if ($_FILES["fileToUpload"]["size"] > 500000000) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>The file is too large.</strong> </span>";
							$uploadOk = 0;
						}
						// Allow certain file formats
						else if($FileType != "doc" && $FileType != "odt" && $FileType != "ppt" && $FileType != "pptx" && $FileType != "docx"
						&& $FileType != "pdf" ) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong> Only doc,odt,ppt and pdf files allowed.</strong> </span>";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						else if ($uploadOk == 0) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>Your file was not uploaded</strong> </span>";
						// if everything is ok, try to upload file
						} else {
							if(!is_dir($target_dir."/"))
							{mkdir($target_dir."/");}
									
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>Your file has been uploaded</strong> </span>";
								$str="<a href=\"https://docs.google.com/gview?url=http://masterji.dhruvsrivastav.com/Notes/".$branch."/".$sem."/".$subwospace."/".$id2."/".$fullname."\">".$filename."</a><br>";
								
								$sql1="UPDATE `".$subwospace."` SET `Content`=concat(`Content`,'".$str."') WHERE `id`=".$id2.";";
								
								$query=mysqli_query($con,$sql1);
							
								
							} else {
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong>Sorry, there was an error in uploading your file</strong> </span>";
							}
						}
					

				}
				if(isset($_POST['addunitnew'])&&(!empty($_POST['unitno']))&&(!empty($_POST['unitn'])))
				{	$id=$_POST['unitno'];$name=$_POST['unitn'];	
					if(!is_dir("Notes/".$branch."/".$sem."/".$subwospace."/".$id."/"))
					{mkdir("Notes/".$branch."/".$sem."/".$subwospace."/".$id."/");}
					$sql2="INSERT INTO `".$subwospace."` (`id`, `Unit`, `Content`) VALUES ('".$id."', '".$name."', '');";
					$query3=mysqli_query($con,$sql2);
				}
				if(isset($_POST['deleteunit']))
				{	$id2=$_POST['id'];
					$tgt="Notes/".$branch."/".$sem."/".$subwospace."/".$id2."/";
					removeDirectory($tgt);		
					$sql="DELETE FROM `".$subwospace."` WHERE `id`=".$id2.";";
					$query=mysqli_query($con,$sql);
				}
				if(isset($_POST['deletefile'])&&(!empty($_POST['del'])))
				{	$uname=$_POST['uname'];$id2=$_POST["id"];$del=$_POST['del'];
					$deltext="";
					$target_dir = "Notes/".$branch."/".$sem."/".$subwospace."/".$id2."/";
					if (is_dir($target_dir)){
								if ($dh = opendir($target_dir)){
									while (($file = readdir($dh)) !== false){
										if(($file!='.')&&($file!='..')){
											$filename=pathinfo($file,PATHINFO_FILENAME);
											if($filename==$del)
										$deltext= $file;}
									}
									closedir($dh);
								}
								}
								
		$str="<a href=\"https://docs.google.com/gview?url=http://masterji.dhruvsrivastav.com/Notes/".$branch."/".$sem."/".$subwospace."/".$id2."/".$deltext."\">".$del."</a><br>";
						
					$sql4="UPDATE `".$subwospace."` SET `Content`= REPLACE(`Content`,'".$str."','') WHERE `id`=".$id2.";";
					$query4=mysqli_query($con,$sql4)  or header("Location: http://masterji.dhruvsrivastav.com/404.html");
					unlink($target_dir."/".$deltext) or header("Location: http://masterji.dhruvsrivastav.com/404.html");
				}
				
				$sql="SELECT * FROM ".$subwospace." order by `id`;";
				$result = mysqli_query($con,$sql) or header("Location: http://masterji.dhruvsrivastav.com/404.html");
				
				$row_count=mysqli_num_rows($result);
			

			echo "<div class='row'>" ;
				while($row = mysqli_fetch_array($result)){
						echo " 
							<div class='col-sm-6 col-xs-12 col-md-3'>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><strong>Unit ".$row['id']."</strong><br><br><br><strong> ".$row['Unit']."</strong></h1>
											</div>
											<div class='panel-body back'>
												
												<strong><p style='font-size:25px;font-family:Chelsea;' >". $row['Content'] ."</p>
												<form class='form-group' action='' method='post' enctype='multipart/form-data'>
												<input type='hidden' name='id' value='". $row['id'] ."'>
												<input type='hidden' name='uname' value='". $row['Unit'] ."'>
												<input type='file' name='fileToUpload' id='fileToUpload'>
													<br>
													<input type='text' name='del'/><br>
													<input class='btn btn-danger btn-lg' type='submit' value='Upload' name='uploadaction'>
													<input class='btn btn-danger btn-lg' type='submit' value='Delete' name='deletefile'>
													<input class='btn btn-danger' type='submit' name='deleteunit' value='X'>
												</form>	
												</strong>
											</div>
										</div>
									</div> 
								</span>
							</div> 
							";
					}
				echo "	 
				<span>
							<div class='col-sm-6 col-xs-12 col-md-3  '>
								<span>
									<div class=' center-block flip-container panel panel-default text-center' onClick='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='panel-heading front' style='background-image: src(images/card.jpg);'>
												<h1 style='color:white;font-size:35px;font-family:Chelsea; ' ><br><br><br><strong>Add Unit</strong></h1>
											</div>
											<div class='panel-body back'>
											<strong><form action='' method='POST' style='color:black;font-size:25px;font-family:Chelsea; '>
													Enter Unit No: <input type='text' name='unitno'/><br>
													Enter Unit Name: <input type='text' name='unitn'/><br>
													<input class='btn btn-danger btn-lg' type='submit' name='addunitnew' value='Add'/>														
												</form></strong>
												
											</div>
										</div>
									</div> 
								</span>
							</div> </span>
			</div> 
		</div>";
		
		
		$branch = $_GET['br'];
		define('access',1);
		include('switchbranch.php');
		mysqli_close($con);
		
echo "
		<script src='http://masterji.dhruvsrivastav.com/js/polyfills.js'></script>
		<script src='http://masterji.dhruvsrivastav.com/js/demo1.js'></script>
		
		
		
		
	</body>
</html>
<h3 align='center'>You are logged in. <a href='http://masterji.dhruvsrivastav.com/logout.php'>Log out</a></h3>";
	}
else{define('access',1);
 include 'loginform.inc.php';    
}


 
?>
