<?php if(!defined('access'))
{
    header('Location: http://masterji.dhruvsrivastav.com');
}?>
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
 
<div  id="contact" class="container-fluid  " style="background-color:#f6f6f6;padding:60px;">
				<form class="fixed" role="form" method="POST" action="index.php#contact" id="myForm" >
				<div class="row" style="padding-top:70px;padding-bottom:60px;">
				<strong><p style="color:black;font-size:45px;font-family:Chelsea;" class="text-center">Contact Us</p>
					<div class="col-sm-5" style="color:black;font-size:20px;font-family:Chelsea;">
						<p>Contact us and we'll get back to you within 24 hours.</p>
						<p><span class="glyphicon glyphicon-map-marker"></span> Ghaziabad, U.P.</p>
						
						<p><span class="glyphicon glyphicon-envelope"></span> contactus@dhruvsrivastav.com</p> 
					</div>
					</strong>
					<div class="col-sm-7 ">
					
						<form class="form-horizontal" role="form" method="post" action="index.php#contact">
    <div class="form-group">
        
        <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    
        
        <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" >
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" id="message" name="message" placeholder="Type your message here"></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Answer this 2 + 3 = ?">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <input id="submit" name="submit" type="submit" value="Send"   class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 ">
            <?php  echo "<br>".$result; ?>    
        </div>
    </div>
</form> 
					</div>
							
						
					
					</div> 
					
					</div>
					</form>

				</div>


    
			
