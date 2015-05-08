<?php
	require_once "DB-config.php";
	require_once "root-config.php";
	if (!isset($_SESSION))
	{
		session_start();
	}
	if (empty($_SESSION["login"]))
	{
		header("location: homepage.php");
		exit;
	}
	$mesaj1 = $mesaj2 = $mesaj3 = $mesaj4 = $mesaj5 = $mesajAll = "";
	$pagCurenta = "setari";
	$recal_max = false;
	if (isset($_POST["reset_form_1"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_1` = 0 WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$recal_max = true;
		$mesaj1 = "Scorul chestionarului 1 a fost resetat cu succes.";
	}
	else if (isset($_POST["reset_form_2"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_2` = 0 WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$recal_max = true;
		$mesaj2 = "Scorul chestionarului 2 a fost resetat cu succes.";
	}
	else if (isset($_POST["reset_form_3"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_3` = 0 WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$recal_max = true;
		$mesaj3 = "Scorul chestionarului 3 a fost resetat cu succes.";
	}
	else if (isset($_POST["reset_form_4"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_4` = 0 WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$recal_max = true;
		$mesaj4 = "Scorul chestionarului 4 a fost resetat cu succes.";
	}
	else if(isset($_POST["reset_form_5"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_5` = 0 WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$recal_max = true;
		$mesaj5 = "Scorul chestionarului 5 a fost resetat cu succes.";
	}
	else if (isset($_POST["reset_all"]))
	{
		$cerere = "UPDATE `utilizatori` SET `scor_form_1` = 0, `scor_form_2` = 0, `scor_form_3` = 0, `scor_form_4` = 4, `scor_form_5` = 5 `scor_maxim` = 0 `form_scor_maxim` = 0 WHERE `nume` = '" . $_SESSION["login"] . "'";
		$mesajAll = "Toate scorurile au fost resetate cu succes.";
	}
	if ($recal_max)
	{
		$cerere = "UPDATE `utilizatori` SET scor_maxim = (SELECT greatest(x.scor_form_1, x.scor_form_2, x.scor_form_3, x.scor_form_4, x.scor_form_5) FROM (SELECT * FROM `utilizatori` WHERE nume = '" . $_SESSION["login"] . "') as x) WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
		$cerere = "UPDATE `utilizatori` SET form_scor_maxim = (select case when x.scor_maxim = x.scor_form_1 then 1 when x.scor_maxim = x.scor_form_2 then 2 when x.scor_maxim = x.scor_form_3 then 3 when x.scor_maxim = x.scor_form_4 then 4 when x.scor_maxim = x.scor_form_5 then 5 else 0 end FROM (SELECT * FROM `utilizatori` WHERE nume = '" . $_SESSION["login"] . "') as x) WHERE nume = '" . $_SESSION["login"] . "'";
		$sql = mysqli_query($conexiune, $cerere);
	}
	
?>

<?php include ROOT_DIR . "header.php"; ?>
<title>Cont</title>
</head>

</body>
<?php include ROOT_DIR . "meniu.php"; ?>
<div>
	<h3>Resetare scoruri:</h3>
	<form method = "post" action = " <?php echo $_SERVER['PHP_SELF'] ?>">
		<table>
			<tr>
				<td><input type = "submit" name = "reset_form_1" value = "Resetează scorul chestionarului 1"></td>
				<td><?php echo $mesaj1 ?></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "reset_form_2" value = "Resetează scorul chestionarului 2"></td>
				<td><?php echo $mesaj2 ?></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "reset_form_3" value = "Resetează scorul chestionarului 3"></td>
				<td><?php echo $mesaj3 ?></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "reset_form_4" value = "Resetează scorul chestionarului 4"></td>
				<td><?php echo $mesaj4 ?></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "reset_form_5" value = "Resetează scorul chestionarului 5"></td>
				<td><?php echo $mesaj5 ?></td>
			</tr>
			<tr>
				<td><input type = "submit" name = "reset_all"  value = " Resetează toate scorurile"></td>
				<td><?php echo $mesajAll ?></td>
			</tr>
		</table>
		
	</form>
</div>
<div>
	<h3>Resetare parolă:</h3>
	<input id = "reset_pass" type = "button" value = "Schimbă parola" onclick = "window.location.href = '<?php echo ROOT_LINK . "reset_pass.php"?>'"><br>
<div>
</body>
</html>