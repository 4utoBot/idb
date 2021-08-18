<?php 
require_once("member.php");
require_once("TOpic.php");

function  loadClass($class_name) {
	include "$class_name.php";
	}

spl_autolod_register("loadClass");

   $member = new Member();
   $topic = new Topic();


 ?>
