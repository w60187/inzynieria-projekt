<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
?>
<html>
<head>
<style>
input {
  border: 2px solid red;
  border-radius: 25px;
  margin:2px;
}
</style>
</head>
<body>

<h3> Usuwanie wpisu </h3>

<form action="usun_baza.php" method="post">
<table>
<tr><td>Podaj numer wpisu: </td><td><input type="number" name="usun"></td></tr>
<tr><td colspan="2"><input type="submit" value="Usuń"><input type="reset"></td></tr>
</table>
</form>

</body>
</html>
