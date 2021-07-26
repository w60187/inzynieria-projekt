<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
		exit();
	}

?>

<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<link rel="stylesheet" type="text/css" href="style_logowanie.css">
<TITLE>Logowanie</TITLE>
</HEAD>
<BODY>

<div class="login">
  <div class="form">
  <FORM NAME = "formularz1" target="_self"
      ACTION = "login.php"
      METHOD = "POST"
>
    <h2>Logowanie</h2>
    <input type="text" name="login" placeholder="Username">
    <input type="password" name="haslo" placeholder="Password">
    <input type="submit" value="Zaloguj" class="submit">
	<a href="niezalogowany.php"> <input class="submit" value="Bez logowania">	</a>
	
	<center>
	<br>
<?php
        if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
		exit();
?>	
</center>
	</FORM>
	
	
	
  </div>
</div>








</CENTER>
</BODY>
</HTML>
