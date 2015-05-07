<?php
	require_once("config.php");
	if (!isset($_SESSION))
	{
		session_start();
	}
	$stareRegister = "";
	$stareLogin = "";
	$stareChestionare = "";
	$stareSetari = "";
	$stareLogout = "";
	if (empty($_SESSION["login"]))
	{
		$stareSetari = "style = \"display: none;\"";
		$stareLogout = "style = \"display: none;\"";
		$stareChestionare = "style = \"display: none;\"";
	}
	else 
	{
		$stareRegister = "style = \"display: none;\"";
		$stareLogin = "style = \"display: none;\"";
	}
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" href="/Proiect/images/favicon.ico" type="image/x-icon"/></link>
<link rel = "stylesheet" type = "text/css" href = "/Proiect/styles/fundal.css"></link>
<link rel = "stylesheet" type = "text/css" href = "/Proiect/styles/header.css"></link>
</head>

<body>
<div class = "meniu">
	<ul>
		<li <?php if($pagCurenta === "acasa") echo "id = \"curenta\""; ?> class = "acasa" ><a href="/Proiect/homepage.php">Acasă</a></li>
		<li class = "logout" <?php echo $stareLogout ?>><a href = "/Proiect/logout.php">Logout</a></li>
		<li <?php if($pagCurenta === "login") echo "id = \"curenta\"" ?> class = "login" <?php echo $stareLogin ?>><a href = "/Proiect/login.php">Login</a></li>
		<li <?php if($pagCurenta === "register") echo "id = \"curenta\"" ?> class = "register" <?php echo $stareRegister ?>><a href = "/Proiect/register.php">Înregistrare</a></li>
		<li class = "chestionare" <?php echo $stareChestionare ?>>Chestionare
			<ul >
				<li <?php if($pagCurenta === "form1") echo "id = \"curenta\"" ?>><a href = "/Proiect/chestionare/chestionar1.php">Chestionarul 1: Depășirea</a></li>
				<li <?php if($pagCurenta === "form2") echo "id = \"curenta\"" ?>><a href = "/Proiect/chestionare/chestionar2.php">Chestionarul 2: Viteza și distanța dintre vehicule</a></li>
				<li <?php if($pagCurenta === "form3") echo "id = \"curenta\"" ?>><a href = "/Proiect/chestionare/chestionar3.php">Chestionarul 3: Obligațiile conducătorilor de autovehicule</a></li>
				<li <?php if($pagCurenta === "form4") echo "id = \"curenta\"" ?>><a href = "/Proiect/chestionare/chestionar4.php">Chestionarul 4: Conducerea preventivă</a></li>
				<li <?php if($pagCurenta === "form5") echo "id = \"curenta\"" ?>><a href = "/Proiect/chestionare/chestionar5.php">Chestionarul 5: Prioritate de trecere</a></li>
			</ul>
		</li>
		<li <?php if($pagCurenta === "setari") echo "id = \"curenta\""; ?> class = "setari" <?php echo $stareSetari ?>><a href = "/Proiect/account.php">Setări cont</a></li>
	</ul>
</div>
</body>
</html>