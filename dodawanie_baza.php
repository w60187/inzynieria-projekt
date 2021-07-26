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

<h3> Dodawanie wpisu </h3>

<form action="wpis_baza.php" method="post">
<table>
<tr><td>Imie: </td><td><input type="text" name="imie" required></td></tr>
<tr><td>Nazwisko: </td><td><input type="text" name="nazwisko" required></td></tr>
<tr><td>Firma: </td><td><input type="text" name="firma" required></td></tr>
<tr><td>Cel: </td><td rows="2"><input type="text" name="cel" required></td></tr>
<tr><td>Rodzaj: </td></tr>
 </td><td> <input type="radio" name="charakter" value="A1 Jednorazowa indywidualna" checked> A1</td><td> Jednorazowa indywidualna</td></tr>
 </td><td> <input type="radio" name="charakter" value="A2 Jednorazowa grupowa"> A2</td><td> Jednorazowa grupowa</td></tr>
 </td><td> <input type="radio" name="charakter" value="B1 Tymczasowa indywidualna"> B1</td><td>  Tymczasowa indywidualna</td></tr>
 </td><td> <input type="radio" name="charakter" value="B2 Tymczasowa grupowa"> B2</td><td>  Tymczasowa grupowa</td></tr>
<tr><td>Liczba osób: </td><td><input type="number" name="liczba_osob" required></td></tr>
<tr><td>Data wydania: </td><td><input type="date" name="data_wydania" required></td></tr>
<tr><td>Data ważności: </td><td><input type="date" name="data_waznosci" required></td></tr>
<tr><td>Wystawił: </td><td><input type="text" name="wystawil" required></td></tr>
<tr><td>Uwagi: </td><td><textarea rows="2" cols="30" name="uwagi">Brak</textarea></td></tr>
<tr><td>Język: </td><td><input type="radio" name="jezyk" value="Polski" checked> Polski</td></tr>
<tr><td></td><td>               <input type="radio" name="jezyk" value="Angielski">Angielski</td></tr>

<tr><td colspan="2"><input type="submit" value="Dodaj"><input type="reset"></td></tr>
</table>
</form>

</body>
</html>
