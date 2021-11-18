<?php
 session_start();
 try{
 	$db = new PDO("mysql:host=localhost;dbname=first_choice","kawede@1","180012@#%&Ab");
 }
 catch(Exeption $e)
 {
 	exit('impossible de se connecter à la base de données');
 }
?>