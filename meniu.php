<?php require_once "root-config.php"; ?>

<div class = "meniu">
	<ul>
		<li <?php if($pagCurenta === "acasa") echo "id = \"curenta\""; ?> class = "acasa" ><a href="<?php echo ROOT_LINK . "homepage.php" ?>">Acasă</a></li>
		<li class = "logout" <?php echo $stareLogout ?>><a href = "<?php echo ROOT_LINK . "logout.php" ?>">Logout</a></li>
		<li <?php if($pagCurenta === "login") echo "id = \"curenta\"" ?> class = "login" <?php echo $stareLogin ?>><a href = "<?php echo ROOT_LINK . "login.php" ?>">Login</a></li>
		<li <?php if($pagCurenta === "register") echo "id = \"curenta\"" ?> class = "register" <?php echo $stareRegister ?>><a href = "<?php echo ROOT_LINK . "register.php" ?>">Înregistrare</a></li>
		<li class = "chestionare" <?php echo $stareChestionare ?>>Chestionare
			<ul >
				<li <?php if($pagCurenta === "form1") echo "id = \"curenta\"" ?>><a href = "<?php echo ROOT_LINK . "chestionare/chestionar1.php"?>">Chestionarul 1: Depășirea</a></li>
				<li <?php if($pagCurenta === "form2") echo "id = \"curenta\"" ?>><a href = "<?php echo ROOT_LINK . "chestionare/chestionar2.php"?>">Chestionarul 2: Viteza și distanța dintre vehicule</a></li>
				<li <?php if($pagCurenta === "form3") echo "id = \"curenta\"" ?>><a href = "<?php echo ROOT_LINK . "chestionare/chestionar3.php"?>">Chestionarul 3: Obligațiile conducătorilor de autovehicule</a></li>
				<li <?php if($pagCurenta === "form4") echo "id = \"curenta\"" ?>><a href = "<?php echo ROOT_LINK . "chestionare/chestionar4.php"?>">Chestionarul 4: Conducerea preventivă</a></li>
				<li <?php if($pagCurenta === "form5") echo "id = \"curenta\"" ?>><a href = "<?php echo ROOT_LINK . "chestionare/chestionar5.php"?>">Chestionarul 5: Prioritate de trecere</a></li>
			</ul>
		</li>
		<li <?php if($pagCurenta === "setari") echo "id = \"curenta\""; ?> class = "setari" <?php echo $stareSetari ?>><a href = "account.php">Setări cont</a></li>
	</ul>
</div>