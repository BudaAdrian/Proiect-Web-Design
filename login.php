<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	if (!isset($_SESSION))
	{
		session_start();
	}
	$pagCurenta = "login";
	$nume = $parola = "";
	$numeErr = $parolaErr = "";
	$mesaj = "";
	if (isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		header("location:" . ROOT_LINK . "homepage.php");
		exit;
	}
	if (isset($_POST["submit"]))
	{
		$nume = $_POST["nume"];
		$parola = $_POST["parola"];
		$eroare = false;
		if (empty($nume))
		{
			$numeErr = "Rubrica nume trebuie completată!";
			$eroare = true;
		}
		if (empty($parola))
		{
			$parolaErr = "Rubrica parolă trebuie completată!";
			$eroare = true;
		}
		if (!$eroare)
		{
			$nume = mysqli_real_escape_string($conexiune, $nume);
			$parola = mysqli_real_escape_string($conexiune, $parola);
			$parola = md5($parola);
			$cerere = "SELECT * FROM `utilizatori` WHERE `nume` = '$nume' AND `parola` = '$parola'";
			$rez = mysqli_query($conexiune, $cerere);
			if (mysqli_num_rows($rez) === 1)
			{
				$_SESSION["login"] = $nume;
				$_SESSION["chestionar"] = "1";
				header("location:" . ROOT_LINK . "homepage.php");
			}
			else
			{			
				$mesaj =  "Numele sau parola sunt incorecte! Daca nu v-ați creat un cont vă puteți înregistra <a href = \"" . ROOT_LINK . "register.php\">aici</a>.";
				$_SESSION["login"] = "";
				$_SESSION["chestionar"] = "";
			}
		}
	}
?>

<?php include ROOT_DIR . "header.php"; ?>
<title>Login</title>
</head>

<body>
<?php include ROOT_DIR . "meniu.php"; ?>
<h2>Login</h2>
<form name = "form_login" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
	<table>
		<tr>
			<td>
				<input type = "text" name = "nume" maxlength = "30" placeholder = "Nume" value = "<?php echo $nume ?>">
				<span class = "error"><?php echo $numeErr ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input type = "password" name = "parola" maxlength = "10" placeholder = "Parola">
				<span class = "error"><?php echo $parolaErr ?></span>
			</td>
		</tr>
		<tr>
			<td colspan = "2">Ți-ai uitat parola? Reseteaz-o <a href = "<?php echo ROOT_LINK .  "reset_pass.php "?>">aici</a>.</td>
		</tr>
		<tr>
			<td colspan = "2"><input type = "submit" name = "submit" value = "Login"></td>
		</tr>
	</table>
</form>
<?php echo $mesaj ?>
</body>
</html>