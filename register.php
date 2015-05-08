<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	if (!isset($_SESSION))
	{
		session_start();
	}
	if (isset($_SESSION["login"]) && !empty($_SESSION["login"]))
	{
		header("location:" . ROOT_LINK . "homepage.php");
		exit;
	}
	$pagCurenta = "register";
	$nume = $parola = $parola_confirm = "";
	$numeErr = $parolaErr = $parola_confirmErr = "";
	$mesaj = "";
	if (isset($_POST["submit"]))
	{
		$nume = $_POST["nume"];
		$parola = $_POST["parola"];
		$parola_confirm = $_POST["parola_confirm"];
		$eroare = false;
		if (empty($nume))
		{
			$numeErr = "Rubrica nume utilizator trebuie completată!";
			$eroare = true;
		}
		else
		{
			if (!preg_match("/^[a-zA-Z_0-9@$-]*$/", $nume))
			{
				$numeErr = "Numele conține caractere nepermise!";
				$eroare = true;
			}
		}
		if (empty($parola))
		{
			$parolaErr = "Rubrica parolă trebuie completată!";
			$eroare = true;
		}
		if ($parola !== $parola_confirm)
		{
			$parola_confirmErr = "Parolele nu se potrivesc!";
			$eroare = true;
		}
		if (!$eroare)
		{
			$nume = mysqli_real_escape_string($conexiune, $nume);
			$cerere = "SELECT nume FROM utilizatori WHERE nume = '$nume'";
			$rez = mysqli_query($conexiune, $cerere);
			if (mysqli_num_rows($rez) != 0)
			{
				$numeErr = "Numele este folosit! Va rugăm incercați alt nume.";
			}
			else
			{
				$parola = md5($parola);
				$parola = mysqli_real_escape_string($conexiune, $parola);
				$cerere = "INSERT INTO `utilizatori` (`ID`, `nume`, `parola`, `scor_form_1`, `scor_form_2`, `scor_form_3`, `scor_form_4`, `scor_form_5`, `scor_maxim`, `form_scor_maxim`) VALUES (NULL, '$nume', '$parola', 0, 0, 0, 0, 0, 0, 0)";
				$sql = mysqli_query($conexiune, $cerere);
				if ($sql === false)
				{
					$mesaj =  "S-a produs o eroare. Va rugăm incercați din nou.<br>";
				}
				else 
				{
					$mesaj = "V-ați înregistrat cu succes. Veți fi redirecționat către pagina de login în câteva momente.";
					header("refresh: 5;url = " . ROOT_LINK . "login.php");
				}
			}
			mysqli_free_result($rez);
		}
	}
?>

<?php include ROOT_DIR . "header.php"; ?>
<title>Înregistrare</title>
</head>

<body>
<?php include ROOT_DIR . "meniu.php"; ?>
<h2>Formular de înregistrare:</h2>
<?php echo $mesaj ?>
<form name = "form_inregistrare" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
	<table>
	<tr>
		<td>
			<input type = "text" name = "nume" maxlength = "30" value = "<?php echo $nume ?>" placeholder = "Nume utilizator">
			<span class = "error"><?php echo " " . $numeErr; ?></span>
		</td>
	</tr>
	<tr>
		<td>
			<input type = "password" name = "parola" maxlength = "10" placeholder = "Parolă">
			<span class = "error"><?php echo " ". $parolaErr; ?></span>
		</td>
	</tr>
	<tr>
		<td>
			<input type = "password" name = "parola_confirm" maxlength = "10" placeholder = "Confirmă parola">
			<span class = "error"><?php echo " " . $parola_confirmErr; ?></span>
		</td>
	</tr>
	<tr>
		<td colspan = "2"><input type = "submit" name = "submit" value = "Înregistrează"></td>
	</tr>
	</table>
	
</form>
<br>Numele poate conține numai litere, cifre și caracterele: - , _ , @ , $!
<br>Parola poate avea maxim 10 caractere!
</body>
</html>