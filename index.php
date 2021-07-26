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
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Strona Przepustki">
	<title>Przepustki</title>
</head>

<body>
<div id="top">
	<div id="NAGLOWEK"> <a href="index.php"><img src="logo.png"></a></div>
	<div id="MENU">

<ol id="menu">
    <li><a href="index.php">Strona główna</a></li>

    <li><a href="dodawanie_baza.php" target="ramka1">Dodaj przepustkę</a></li>
      
    <li><a href="usuwanie_baza.php" target="ramka1">Usuń przepustkę</a></li>

    <li class="dol"><a href="#">Przepustki</a>
      <ul>
        <li><a href="baza_wszystkie.php" target="ramka1">Wszystkie przepustki</a></li>
        <li><a href="baza.php" target="ramka1">Aktualne przepustki</a></li>

      </ul>
    </li>
	<li><a href="logout.php">Wyloguj</a>
  </ol>


	</div>
	<div id="TRESC">
		<iframe name="ramka1" src="home.php">  </iframe>
	</div>
	<div id="STOPKA">
		<center><p>&copy Dominik Gazda </p></center>
	</div>
</div>
</body>

</html>
