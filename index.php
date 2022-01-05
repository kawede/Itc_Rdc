<?php

$url='';
if(isset($_GET['url']))
{
  $url=explode('/', $_GET['url']);
}

if($url== '')
{
  require 'mains/home.php';
}
else if ($url[0]== 'about')
{
	require 'mains/about.php';
}
else if ($url[0]== 'contact')
{
	require 'mains/contact.php';
}
else if ($url[0]== 'project')
{
	require 'mains/project.php'; 
}
else if($url[0]=='sign_training')
{
	require 'mains/sign_training.php';
}
else if($url[0]=='galeries')
{
	require 'mains/galeries.php';
}
else if ($url[0]== 'accueil')
{
	require 'mains/home.php'; 
}
else if ($url[0]== 'take_partTraining')
{
	require 'mains/take_partTraining.php';
}
else if ($url[0]== 'inscription')
{
	require 'mains/inscription.php';
}
else if($url[0]=='send'){
	require 'mains/send.php';
}
else if($url[0]=='emploi'){
	require 'mains/emploi.php';
}
else if($url[0]=='formation'){
	require 'mains/formation.php';
}
else
{
  require 'mains/404.php';
}
