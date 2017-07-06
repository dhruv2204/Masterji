<!DOCTYPE html>
<html lang="en" class="no-js">
	<?php define('access',1);
	include 'head.php' ?>
	
	<body id="myPage" class=" fade-in one" style="background-color:#e24f61">
		
		
		<div id="st-container" class="st-container">
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
				<nav class="st-menu st-effect-1" style="background-color:#393E46;border:2px solid #0C2233;" id="menu-3">
					<h2 class="icon icon-note">masterji</h2>
					<ul>
						<li><a class="icon icon-male" href="http://masterjimob.dhruvsrivastav.com/about.php">About Us</a></li>
					<li><a class="icon icon-study" href="http://masterjimob.dhruvsrivastav.com/index.php">Choose Your Branch</a></li>
					<li><a class="icon icon-like" href="#">Follow Us</a></li>
					<li><a class="icon icon-mail" href="http://masterjimob.dhruvsrivastav.com/contact.php">Contact Us</a></li>
					</ul>
				</nav>

				

				<div class="st-content " style="background-color:#e24f61"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<!-- Top Navigation -->
						
						
						<div class=" clearfix">
							<div id="st-trigger-effects" >
							<button class=" btn btn-link btn-lg " data-effect="st-effect-1" type="button">
							<span class="glyphicon glyphicon-menu-hamburger" style="color:white" area-hidden="true"></span>
							</button>
							
								
								<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'contactus@dhruvsrivastav.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your answer is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
 
<div  id="contact" class="container-fluid  " style="background-color:#e24f61;padding-top:10px;">
				<form class="fixed" role="form" method="POST" action="contact.php" id="myForm" >
				<div class="row" >
				<div style="padding-right:10%;padding-left:10%;">
				<strong ><p style="color:white;font-size:30px;font-family:Titi;" class="text-center">Contact Us</p>
					<div class="col-sm-12" style="color:white;font-size:15px;font-family:Titi;">
						<p style="color:white;font-family:Titi;">Contact us and we'll get back to you within 24 hours.</p>
						<p style="color:white;font-family:Titi;"><span class="glyphicon glyphicon-map-marker"></span> Ghaziabad, U.P.</p>
						
						<p style="color:white;font-family:Titi;"><span class="glyphicon glyphicon-envelope"></span> contactus@dhruvsrivastav.com</p> 
					</div>
					</strong></div>
					<div class="col-sm-12 ">
					
						<form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        
        <div class="col-sm-12">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    
        
        <div class="col-sm-12">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" >
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-12">
            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Type your message here"></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-12">
            <input type="text" class="form-control" id="human" name="human" placeholder="Answer this 2 + 3 = ?">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <input id="submit" name="submit" type="submit" value="Send"   class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 ">
            <?php  echo "<br>".$result; ?>    
        </div>
    </div>
</form> 
					</div>
							
						
					
					</div> 
					</form>
					</div>
		
	</main> <!-- cd-content -->
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
