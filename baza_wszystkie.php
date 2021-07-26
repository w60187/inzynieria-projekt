
<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Strona Przepustki">
<style>

cel {
width:50px;
}

</style>
</head>
<body>
<table cellpadding="2" border="1">
<center><tr><td><b> LP</b> </td><td><b> <center>Imie i nazwisko</center></b> </td><td><b><center> Firma</center> </b></td><td><b><center> Cel </center></b></td><td><b><center> Rodzaj</center></b></td><td><b><center> Liczba<br> osób</center> </b></td><td><b><center> Data<br> wydania</center></b></td><td><b><center> Data<br> ważności</center></b></td><td><b><center> Wystawił</center> </b></td><td><b> Uwagi</b></td></tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "przepustki";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM przepustki ORDER BY data_wydania DESC;";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	$cel = $row["cel"];
	$fixedcel = wordwrap($cel, 8, "\n", false);
	$charakter = $row["charakter"];
        $fixedcharakter = wordwrap($charakter, 8, "\n", false);
	$nazwisko = $row["nazwisko"];
	$fixednazwisko = wordwrap($nazwisko, 8, "\n", false);
	echo "<tr>";
        echo "<td>" . $row["LP"]. "</td>";
	echo "<td style='width: 8em; height: 1em'><center>" . $row["imie"]. " " . $fixednazwisko. "</center></td>";
	echo "<td>" . $row["firma"]. "</td>";
	echo "<td style='width: 7em; height: 1em'>" . $fixedcel. "</td>";
	echo "<td style='width: 7em; height: 1em'>" . $fixedcharakter. "</td>";
	echo "<td><center>" . $row["liczba_osob"]. "</center></td>";
	echo "<td>" . $row["data_wydania"]. "</td>";
 	echo "<td>" . $row["data_waznosci"]. "</td>";
 	echo "<td>" . $row["wystawil"]. "</td>";
 	echo "<td>" . $row["uwagi"]. "</td>";
    }
} else {
    echo "Brak rekordów";
}




mysqli_close($conn);
?>
</table>
</body>
</html>
