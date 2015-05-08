<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	if (!isset($_SESSION))
	{
		session_start();
	}
	$pagCurenta = "reset";
	$nume = $parola = $parola_confirm = "";
	$numeErr = $parolaErr = $parola_confirmErr = "";
	$mesaj = "";
	if (!empty($_SESSION["login"]))
	{
		$nume = $_SESSION["login"];
	}
	if (isset($_POST["submit"]))
	{
		$nume = $_POST["nume"];
		$parola = $_POST["parola"];
		$parola_confirm = $_POST["parola_confirm"];
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
			if (mysqli_num_rows($rez) === 0)
			{
				$numeErr = "Numele introdus nu a fost găsit! Dacă nu aveți cont va rugăm să vă <a /Proiect/href = 'register.php'>înregistrați</a>.";
			}
			else
			{
				$parola = md5($parola);
				$parola = mysqli_real_escape_string($conexiune, $parola);
				$cerere = "UPDATE `utilizatori` SET `parola` = '$parola' WHERE `nume` = '$nume'";
				$sql = mysqli_query($conexiune, $cerere);
				if ($sql === false)
				{
					$mesaj = "S-a produs o eroare. Va rugăm încercați din nou.";
				}
				else
				{
					if (isset($_SESSION["login"]) && !empty($_SESSION["login"]))
					{
						$mesaj = "Parolă schimbată cu succes. Veți fi redirecționat către pagina cu setări ale contului în câteva momente.";
						header("refresh: 5;url = " . ROOT_LINK . "account.php");
					}
					else
					{
						$mesaj = "Parolă schimbată cu succes. Veți fi redirecționat către pagina de login în câteva momente.";
						header("refresh: 5;url = " . ROOT_LINK . "login.php");
					}
				}
			}
			mysqli_free_result($rez);
		}
	}
?>

<?php include ROOT_DIR . "header.php"; ?>
<title>Resetare parola</title>
</head>

<body>
<?php include ROOT_DIR . "meniu.php"; ?>
<h2>Resetare parolă:</h2>
<?php echo $mesaj ?>
<form name = "form_reset" method = "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
	<table>
		<tr>
			<td>
				<input type = "text" name = "nume" maxlength = "30" placeholder = "Nume" value = "<?php echo $nume ?>">
				<span class = "error"><?php echo " " . $numeErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input type = "password" name = "parola" maxlength = "10" placeholder = "Noua parolă">
				<span class = "error"><?php echo " ". $parolaErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input type = "password" name = "parola_confirm" maxlength = "10" placeholder = "Confirmă noua parolă">
				<span class = "error"><?php echo " " . $parola_confirmErr; ?></span>
			</td>
		</tr>
		<tr>
			<td colspan = "2"><input type = "submit" name = "submit" value = "Schimbă parola"></td>
		</tr>
	</table>
</form>

</body>
</html>