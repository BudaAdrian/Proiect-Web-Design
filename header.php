<?php
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
<link rel="icon" href="<?php echo ROOT_LINK . "images/favicon.ico" ?>" type="image/x-icon"/></link>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/fundal.css" ?>"></link>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/header.css" ?>"></link>