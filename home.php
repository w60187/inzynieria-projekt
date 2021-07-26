<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Strona Przepustki">
	<title>Przepustki</title>
	
	<style>
	h1 {
	text-align:center;
	font-size:50px;
	margin-top:200px;

	}
	</style>
	
</head>

<body>

		<h1> PROJEKT <br> Inżynieria oprogramowania</h1>
		
</body>
</html>
