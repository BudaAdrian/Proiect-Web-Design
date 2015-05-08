<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	if (!isset($_SESSION))
	{
		session_start();
	}
	$pagCurenta = "acasa";
	$utilizator = "";
	$noLogin = "";
	$chestionare = "";
	$salut;
	date_default_timezone_set('Europe/Bucharest');
	$ora = date("H");
	if ($ora <= 9)
		$salut = "Bună dimineața";
	else if ($ora <= 17)
		$salut = "Bună ziua";
	else $salut = "Bună seara";
	if ((!isset($_SESSION["login"]) && empty($_SESSION["login"])) || (isset($_SESSION["login"]) && empty($_SESSION["login"])))
	{
		$noLogin = "Bun venit pe site. Ca să accesezi chestionarele de pe site trebuie să te loghezi. Dacă nu ai cont va trebui să te înregistrezi.";
	}
	else
	{	
		$cerere = "SELECT `scor_form_1`, `scor_form_2`, `scor_form_3`, `scor_form_4`, `scor_form_5`, `scor_maxim`, `form_scor_maxim` FROM `utilizatori` WHERE `nume` = '".
		$_SESSION["login"] . "'";
		$rez = mysqli_query($conexiune, $cerere);
		$rez = mysqli_fetch_array($rez);
		$chestionare = "
		$salut, " .  $_SESSION["login"] . "\n
		<div class = \"scoruri\">
			<h2>Scorurile dumneavoastră:</h2>
			<table>
				<tr>
					<td>Chestionarul 1:</td>
					<td>$rez[0]</td>
				</tr>
				<tr>
					<td>Chestionarul 2:</td>
					<td>$rez[1]</td>
				</tr>
				<tr>
					<td>Chestionarul 3:</td>
					<td>$rez[2]</td>
				</tr>
				<tr>
					<td>Chestionarul 4:</td>
					<td>$rez[3]</td>
				</tr>
				<tr>
					<td>Chestionarul 5:</td>
					<td>$rez[4]</td>
				</tr>
			</table>
			Cel mai mare scor al dumneavostră este $rez[5] și l-ați obținut la chestionarul $rez[6].<br>
		</div>";
	}
?>

<?php include ROOT_DIR . "header.php"; ?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/homepage.css" ?>"></link>
<title>Teste grilă</title>
</head>

<body>
<?php include ROOT_DIR . "meniu.php"; ?>
<?php echo $noLogin ?>
<?php echo $chestionare ?>
</body>
</html>