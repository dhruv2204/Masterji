<?php if(!defined('access'))
{
    header('Location: http://masterjimob.dhruvsrivastav.com');
}?>
 <?php define('access',1);
require 'core.inc.php';
session_destroy();
header('Location: http://masterjimob.dhruvsrivastav.com/personal.php' );
?>
