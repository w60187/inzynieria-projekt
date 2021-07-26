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

$usun = $_POST['usun'];

$sql = "DELETE FROM przepustki WHERE LP='$usun';";

if (mysqli_query($conn, $sql)) {
    echo "Usunięto rekord pomyślnie<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<a href="usuwanie_baza.php"><input type="button" value="Powrót"></a>
</body>
</html>
