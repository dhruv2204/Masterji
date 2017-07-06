<html>
	<?php
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|k	pt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
	header('Location: http://masterjimob.dhruvsrivastav.com');
?>	
		 
	<?php
	define('access',1);
	include 'head.php' ?>
	

	<body id="myPage" class=" fade-in one" >
	
		<!--Here comes the navbar-->
		<?php define('access',1);
		include('navbar.php'); ?>

			<!--Here comes the Jumbotron--> 
			<div class="jumbotron text-center  " style="font-family:Chelsea;padding-top:140px " >
				<h1><img src="images/mlogo.png" style="padding-top:40height:347px;width:550px" alt="masterji_logo"  class="img-responsive center-block " ><h1 style="color:teal;font-size:45px;font-family:Chelsea; "><strong>Master Ji</strong></h1></h1> 
					<strong><p><br></p></strong>
			</div>

  
			<!--Here comes the about page-->
			<div id="about" class="container-fluid   text-center " style="color:white;font-size:35px;font-family:Chelsea; ">
				<strong><p style="font-size:70px;">About<p> </strong>
				<strong>We provide Engineering students quick access to a vast resource.</strong>
				<br><strong>The search hierarchy that we use is simple and time saving.</strong>
				<br><strong>Browse and download from our collection.</strong>
				<br><strong>Everything is sorted for you so that all you care about, is just studying.</strong>
				<br><strong><p style="font-size:60px">Good Luck !<p> </strong>
			</div>
			
			<!--Here comes the branch-->
			<div class="field  ">
				<div id="branch" class="container-fluid text-center ">
					<br><br>
					<h2 style="color:white;font-size:40px;font-family:Chelsea;">Choose Your Branch</h2>
					<br><br>
					<div class="row  img-responsive ">
					
						<div class="col-sm-6 col-md-4 col-xs-12  " >
							<span  ><a href="semester.php?br=CS"  ><img src="images/cs.png" alt="Computer_Science" ></a></span>
							<h4 >Computer Science</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="semester.php?br=EC"><img src="images/ec.png" alt="Electronics" ></a></span>
							<h4>Electronics</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="semester.php?br=EE"><img src="images/ee.png" alt="Electrical" ></a></span>
							<h4>Electrical</h4> 
						</div>
						
	
					
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="semester.php?br=IT"><img src="images/it.png" alt="Information_Technolgy"></a></span>
							<h4>Information Technology</h4>
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="semester.php?br=ME"><img src="images/me.png" alt="Mechanical" ></a></span>
							<h4>Mechanical</h4>     
						</div>
						
						<div class="col-sm-6 col-md-4 col-xs-12  ">
							<span ><a href="semester.php?br=CE"><img src="images/ce.png" alt="Civil"></a></span>
							<h4>Civil</h4>
							<br><br>
						</div>
					</div>
				</div>
				<br><br><br>
			</div>

			<!--Here comes the carousel-->
			
			<div id="myCarousel"  class="carousel slide text-center " data-ride="carousel" >
				<br><br><br>
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				
				<div class="carousel-inner " role="listbox" >
					<div class="item active" >	
						<h4><img src="images/easysearch.png" ><br><p style="text-decoration:none;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The hierarchy followed helps the user to search for the topics very easily.</p></h4>
					</div>
					<div class="item">
						<h4><img src="images/savetime.png" ><br><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp No ads, No survey, No signup saves a lot of time.<p></h4>
					</div>
					<div class="item">
						<h4><img src="images/sorted.png" ><br><p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp We have sorted everything (Branch->Year->Sem->Subject->Unit).</p></h4>
					</div>
				</div>

				
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div></div>
			<!--Here comes the contact-->
			
			<?php define('access',1);
			include 'contact.php';
			?>

			<!--Here comes the footer-->
			<div id="footer" >
				<footer class="container-fluid text-center  " style="width:100%;background-color:#f6f6f6">
				<a href="#myPage" title="To Top">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<p style="font-size:20px;font-family:Chelsea; ; font-weight: 800;">All rights reserved by masterji(2016)</p> 
			</div>

	</body>

</html>
