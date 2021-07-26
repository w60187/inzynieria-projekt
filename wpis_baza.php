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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "przepustki";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$imie = $_POST['imie']; 
$nazwisko = $_POST['nazwisko'];
$firma = $_POST['firma'];
$cel = $_POST['cel'];
$charakter = $_POST['charakter'];
$liczba_osob = $_POST['liczba_osob'];
$data_wydania = $_POST['data_wydania'];
$data_waznosci = $_POST['data_waznosci'];
$wystawil = $_POST['wystawil'];
$uwagi = $_POST['uwagi'];

$_SESSION['imie']=$imie;
$_SESSION['nazwisko']=$nazwisko;
$_SESSION['firma']=$firma;
$_SESSION['charakter']=$charakter;
$_SESSION['data_wydania']=$data_wydania;
$_SESSION['data_waznosci']=$data_waznosci;
$_SESSION['wystawil']=$wystawil;
$_SESSION['jezyk']= $_POST['jezyk'];

$sql = "INSERT INTO przepustki (imie, nazwisko, firma, cel, charakter, liczba_osob, data_wydania, data_waznosci, wystawil, uwagi)
VALUES ('$imie', '$nazwisko','$firma', '$cel', '$charakter', '$liczba_osob', '$data_wydania', '$data_waznosci', '$wystawil', '$uwagi')";

if (mysqli_query($conn, $sql)) {
    echo "Dodano pomyślnie<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="dodawanie_baza.php"><input type="button" value="Powrót"></a>
</body>
</html>
