<?php

$url = '';

if (isset($_GET['url'])) {
	$url = explode('/', $_GET['url']);
}

if ($url == '') {
	require 'login.php';
}

elseif ($url[0]=='formation') {
	require'formation.php';
}
elseif ($url[0]=='categorie')
{
	require'categorie.php';
}
elseif ($url[0]=='programme')
{
	require'programme.php';
}
elseif ($url[0]=='region')
{
	require'region.php';
}
elseif ($url[0]=='profile')
{
	require'profile.php';
}
elseif($url[0]=='table_cours')
{
	require 'table_cours.php';
}
elseif($url[0]=='sign_training')
{
	require 'sign_training.php';
}
else
{
	echo "456";
} 

