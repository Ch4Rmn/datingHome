<?php 
require_once('config.php');


function generatePass($password,$shaKey){
$strongPass = md5($shaKey . md5($password));
return $strongPass;
}
?>