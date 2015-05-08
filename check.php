<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	$pct = 0;
	if (!isset($_SESSION))
	{
		session_start();
	}
	$pagCurenta = "verificare";
	if (isset($_POST["verifica"]))
	{
		if (!isset($_SESSION["chestionar"]) && !empty($_SESSION["chestionar"]))
		{
			header("location: homepage.php");
			exit;
		}
		else
		{
			$rasp;
			$corect1 = array("c", "b", "b", "a", "c", "a", "a", "a", "c", "c");
			$corect2 = array("a", "b", "b", "b", "c", "a", "c", "a", "b", "a");
			$corect3 = array("a", "b", "b", "b", "a", "b", "c", "b", "a", "a");
			$corect4 = array("b", "c", "a", "c", "b", "b", "b", "a", "c", "b");
			$corect5 = array("b", "b", "c", "a", "a", "b", "c", "a", "c", "c");
			$i = 0;
			foreach ($_POST as $val)
			{
				if ($val === "Verificare")
					break;
				else $rasp[$i++] = $val;
			}
			switch($_SESSION["chestionar"])
			{
				case "1":
					for ($i = 0;$i < sizeof($rasp);$i++)
					{
						if ($rasp[$i] === $corect1[$i])
							$pct += 2;
					}
					break;
				case "2":
					for ($i = 0;$i < sizeof($rasp);$i++)
					{
						if ($rasp[$i] === $corect2[$i])
							$pct += 2;
					}
					break;
				case "3":
					for ($i = 0;$i < sizeof($rasp);$i++)
					{
						if ($rasp[$i] === $corect3[$i])
							$pct += 2;
					}
					break;
				case "4":
					for ($i = 0;$i < sizeof($rasp);$i++)
					{
						if ($rasp[$i] === $corect4[$i])
							$pct += 2;
					}
					break;
				case "5":
					for ($i = 0;$i < sizeof($rasp);$i++)
					{
						if ($rasp[$i] === $corect5[$i])
							$pct += 2;
					}
					break;
				default: break;
			}
			$cerere = "UPDATE `utilizatori` SET scor_form_" . $_SESSION['chestionar'] . "= $pct WHERE `nume` = '" . $_SESSION['login'] . "'";
			$sql = mysqli_query($conexiune, $cerere);
			$cerere = "UPDATE `utilizatori` SET scor_maxim = (SELECT greatest(x.scor_form_1, x.scor_form_2, x.scor_form_3, x.scor_form_4, x.scor_form_5) FROM (SELECT * FROM `utilizatori` WHERE nume = '" . $_SESSION["login"] . "') as x) WHERE nume = '" . $_SESSION["login"] . "'";
			$sql = mysqli_query($conexiune, $cerere);
			$cerere = "UPDATE `utilizatori` SET form_scor_maxim = (select case when x.scor_maxim = x.scor_form_1 then 1 when x.scor_maxim = x.scor_form_2 then 2 when x.scor_maxim = x.scor_form_3 then 3 when x.scor_maxim = x.scor_form_4 then 4 when x.scor_maxim = x.scor_form_5 then 5 else 0 end FROM (SELECT * FROM `utilizatori` WHERE nume = '" . $_SESSION["login"] . "') as x) WHERE nume = '" . $_SESSION["login"] . "'";
			$sql = mysqli_query($conexiune, $cerere);
			if ($pct === 20)
			{
				$mesaj = "Excelent! Ai reușit să răspunzi la toate întrebările și ai acumulat %pct de puncte.";
			}
			else if ($pct > 0)
				$mesaj = "Felicitări, ai acumulat $pct puncte și ai răspuns corect la " . $pct / 2 . " întrebări din 10.";
			else $mesaj = "Aoleu, nu ai reușit să răspunzi la nicio întrebare și nu ai acumulat nici un punct.";
		}
		
	}
	else
	{
		header("location: homepage.php");
		exit;
	}
?>

<?php include ROOT_DIR . "header.php"; ?>
<title>Punctaj chestionar <?php echo $_SESSION["chestionar"] ?></title>
</head>

<body>
<?php include ROOT_DIR . "meniu.php"; ?>
<div><?php echo $mesaj ?></div>
</body>
</html>