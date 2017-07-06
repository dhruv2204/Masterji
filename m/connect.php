<?php if(!defined('access'))
{
    header('Location: http://masterjimob.dhruvsrivastav.com');
}?>
<?php $con = mysqli_connect('mysql.hostinger.in','u204408550_abes','happybirthday','u204408550_abes');
				
				if (!$con) {
								die('Could not connect: ' . mysqli_error($con));
							}
				mysqli_select_db($con,"u204408550_abes"); 
				
				?>
