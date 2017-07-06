 <?php define('access',1);
require 'core.inc.php';
require 'connect.php';?>

<?php if(adminloggedin()){
	define('access',1);
    include 'head.php';
	include'navbar.php'; 
	echo '
	<html>

		<body id="myPage" class=" fade-in one" >
		
<div class="field  ">
				<div id="branch" class="container-fluid text-center ">
					<br><br>
					<h2 style="color:white;font-size:30px;font-family:Chelsea; src:">Choose Your Branch</h2>
					
					<div class="row  img-responsive ">
					
						<div class="col-sm-6 col-md-4 col-xs-12  " >
							<span  ><a href="http://m.masterji.xyz/addsem.php?br=CS"  ><img src="http://m.masterji.xyz/images/cs.png"  ></a></span>
							<h4 >Computer Science</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="http://m.masterji.xyz/addsem.php?br=EC"><img src="http://m.masterji.xyz/images/ec.png" ></a></span>
							<h4>Electronics</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="http://m.masterji.xyz/addsem.php?br=EE"><img src="http://m.masterji.xyz/images/ee.png" ></a></span>
							<h4>Electrical</h4> 
						</div>
						
	
					
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="http://m.masterji.xyz/addsem.php?br=IT"><img src="http://m.masterji.xyz/images/it.png" ></a></span>
							<h4>Information Technology</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="http://m.masterji.xyz/addsem.php?br=ME"><img src="http://m.masterji.xyz/images/me.png" ></a></span>
							<h4>Mechanical</h4>     
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="http://m.masterji.xyz/addsem.php?br=CE"><img src="http://m.masterji.xyz/images/ce.png" ></a></span>
							<h4>Civil</h4>
							<br><br>
						</div>
					</div>
				</div>
			</div>
			
	</body>

</html>
<h3 align="center">You are logged in. <a href="http://m.masterji.xyz/logout.php">Log out</a></h3>';
	}
	else if(userloggedin()){
		define('access',1);
    include 'head.php';
	 include 'navbar2.php';
	 
if(isset($_POST["submit"]))
	
{					$sem=$_POST['sem'];
					$branch=$_POST['branch'];
					$unit=$_POST['unit'];
					$sub=$_POST['sub'];
					
		if (!$_POST['branch']) {
            $errbranch = 'Please select a branch';
        }
		if (!$_POST['sem']) {
            $errsem = 'Please select a sem';
        }
		if (!$_POST['sub']) {
            $errsub = 'Please enter subject name';
        }
		if (!$_POST['unit']) {
            $errunit = 'Please select a unit';
        }
        
					
					
					
					
						if(!$errbranch && !$errsem && !$errunit && !$errsub ) {
						$target_dir = "../uploads/";
						$target_file= $target_dir.$branch.'_'.$sem.'_'.$sub.'_'.$unit.'_'.basename($_FILES["fileToUpload"]["name"]);
						$uploadOk = 1;
						$fullname=pathinfo($target_file,PATHINFO_BASENAME);
						$filename=pathinfo($target_file,PATHINFO_FILENAME);
						$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						
							$check = filesize($_FILES["fileToUpload"]["tmp_name"]);
							if($check == false) {
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br>File is not ok</strong> </span>";
								$uploadOk = 0;
							}
						
						// Check if file already exists
						else if (file_exists($target_file)) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br>The file already exists.</strong> </span>";
							$uploadOk = 0;
						}
						// Check file size
						else if ($_FILES["fileToUpload"]["size"] > 5000000) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br>The file is too large.</strong> </span>";
							$uploadOk = 0;
						}
						// Allow certain file formats
						else if($FileType != "doc" && $FileType != "odt" && $FileType != "ppt"
						&& $FileType != "pdf" && $FileType != "rar" ) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br> Only doc,odt,ppt and pdf files allowed.</strong> </span>";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						else if ($uploadOk == 0) {
							echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br> Your file was not uploaded</strong> </span>";
						// if everything is ok, try to upload file
						} else {
							
									
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
									
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br> Your file has been uploaded</strong> </span>";
					                } else {
								echo "<span class='text-center center-block' style='font-size:25px;font-family:Chelsea;color:teal'><strong><br><br> Sorry, there was an error in uploading your file</strong> </span>";
							}
						}
				}

				}

 echo '<body id="myPage" class=" fade-in one" > 
					<br><br><br>
					<div class="fluid-container" style="padding-top:20px;padding-left:20px;padding-right:20px"><form class="form-group" action="" method="post" enctype="multipart/form-data">
					<div  class="form-group">
					<label for="sel1">Select Branch:</label>
					<select name="branch"  class=" form-control" id="sel1"  >
						<option selected="selected">'; echo htmlspecialchars($_POST["branch"]); echo'</option>
						<option>CS</option>
						<option>EC</option>
						<option>EE</option>
						<option>CE</option>
						<option>ME</option>
						<option>IT</option>
						
						
					</select>';
					 echo "<p class='text-danger'>$errbranch</p>";
					echo '</div>
					<br>
					<div class="  form-group">
					<label for="sel2">Select Semester:</label>
					<select name="sem" class="form-control" id="sel1" >
					<option selected="selected">'; echo htmlspecialchars($_POST['sem']); echo '</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						
					</select>
					'; echo "<p class='text-danger'>$errsem</p>";
					echo '</div>
					<br>
					<div class="form-group">
					<label for="sel3">Enter Subject Name:</label> <input type="text" class="form-control"  name="sub"  value="'; echo htmlspecialchars($_POST['sub']); echo'">';
					
					 echo "<p class='text-danger'>$errsub</p>";
					echo '</div><br>
					
					<div class="form-group">
					<label for="sel4">Select Unit:</label>
					<select name="unit" class="form-control" id="sel1" >
					<option selected="selected">'; echo htmlspecialchars($_POST['unit']); echo '</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						
					</select>
					'; echo "<p class='text-danger'>$errunit</p>";
					echo '</div><br>
					
					<div class="form-group">
					<input class="btn btn-primary   btn-md  center-block" type="file"   name="fileToUpload" id="fileToUpload"><br>
					<input class="btn  center-block  btn-primary btn-md " type="submit" value="Upload File" name="submit">
					</div><br>
				
			</form>	</div>
</body>

<h3 align="center">You are logged in. <a href="http://m.masterji.xyz/logout.php">Log out</a></h3>';
	}
else{ define('access',1);
 include 'loginform.inc.php';    
}


 
?>
