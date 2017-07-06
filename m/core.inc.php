<?php if(!defined('access'))
{
    header('Location: http://m.masterji.xyz');
}?>
<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
$http_referer=$_SERVER['HTTP_REFERER'];
function adminloggedin(){
    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])&&($_SESSION['user_id']==1)){
        return true;   
    }else{
        return false;
    }
}

function userloggedin(){
    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])&&($_SESSION['user_id']==2)){
        return true;   
    }else{
        return false;
    }
}

?>
