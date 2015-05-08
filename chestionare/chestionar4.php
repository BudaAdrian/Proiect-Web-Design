<?php
	session_start();
	require_once "../root-config.php";
	if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
	{
		header("location:../homepage.php");
		exit;
	}
	else $_SESSION["chestionar"] = "4";
	$pagCurenta = "form4";
?>

<?php include ROOT_DIR . "header.php"; ?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/chestionare.css" ?>"></link>
<title>Chestionar 4</title>

<script>
var index = 0;
var intrebari = [];
var raspunsuri = [];
function init()
{
	intrebari = document.getElementsByClassName("intrebare");
	intrebari[0].style.display = "block";
	for (var i = 0; i < intrebari.length;i++)
	{
		raspunsuri["q" + (i + 1)] = "";
	}
}

function raspuns(varianta)
{
	raspunsuri[varianta.name] = varianta.value;
	verifica();
}

function verifica()
{
	for (var i in raspunsuri)
	{
		if (!raspunsuri.hasOwnProperty(i))
			continue;
		if (raspunsuri[i] == "")
			return;
	}
	document.getElementById("verif").style.display = "block";
}

function prec()
{
	if (index - 1 >= 0)
	{
		intrebari[index].style.display = "none";
		index--;
		intrebari[index].style.display = "block";
	}
}

function urm()
{
	if (index + 1 !== intrebari.length)
	{
		intrebari[index].style.display = "none";
		index++;
		intrebari[index].style.display = "block";
		if (index + 1 === intrebari.length)
		{
			
		}
	}
}
</script>
</head>

<body onLoad = "init()">
<?php include ROOT_DIR . "meniu.php"; ?>
<h1>Chestionarul 4: Conducerea preventivă</h1>
<form name = "chestionar" method = "post" action = "<?php echo ROOT_LINK . "check.php" ?>">
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>1.)Vă puteți apropia de vehiculul din față?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q1" onclick = "raspuns(this)">A.)da;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q1" onclick = "raspuns(this)">B.)nu, pentru că astfel blocați intersecția;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q1" onclick = "raspuns(this)">C.)legea nu prevede obligații în această situație.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar4/q1.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table width = 100%>
						<tr>
							<td>2.) Când ninge abundent veți folosi:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q2" onclick = "raspuns(this)">A.)luminile de poziție;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q2" onclick = "raspuns(this)">B.)claxonul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q2" onclick = "raspuns(this)">C.)luminile de întâlnire ale farurilor.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar4/q2.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>3.)Vă este permis să claxonați un biciclist înainte de a-l depăși?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q3" onclick = "raspuns(this)">A.)da, dacă distanța este de peste 25 m;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q3" onclick = "raspuns(this)">B.)nu;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q3" onclick = "raspuns(this)">C.)numai în reprize foarte scurte.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar4/q3.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>4.)Acvaplanarea se produce:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q4" onclick = "raspuns(this)">A.)când drumul este denivelat;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q4" onclick = "raspuns(this)">B.)când vântul suflă din față;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q4" onclick = "raspuns(this)">C.)la viteză mare și când drumul este acoperit de apă.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
		<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>5.)Circulația cu viteză duce adeseori la accidente în:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q5" onclick = "raspuns(this)">A.)parcări;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q5" onclick = "raspuns(this)">B.)intersecții;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q5" onclick = "raspuns(this)">C.)poligoanele auto.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>6.)De la ce concentrație de alcool în sânge trebuie să ai în vedere că se reduce deja capacitatea de conducere?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q6" onclick = "raspuns(this)">A.)de la 0,3 g/l;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q6" onclick = "raspuns(this)">B.)orice concentrație;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q6" onclick = "raspuns(this)">C.)de la 1,2 g/l.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>7.)Cum trebuie să procedezi imediat după un accident cu un animal sălbatic?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q7" onclick = "raspuns(this)">A.)înștiințezi societățile de protecție a animalelor;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q7" onclick = "raspuns(this)">B.)oprești, aprinzi luminile de avarie și asiguri locul accidentului;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q7" onclick = "raspuns(this)">C.)iei vânatul acasă și comunici societății de asigurare daunele suferite de autoturism.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>8.)Ce consecințe poate avea transportul bagajelor pe acoperișul autoturismului?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q8" onclick = "raspuns(this)">A.)crește instabilitatea vehiculului la vânt lateral;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q8" onclick = "raspuns(this)">B.)nu se pot executa viraje;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q8" onclick = "raspuns(this)">C.)se reduce distanța de frânare.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>9.)Ce rol au tetierele, din punct de vedere al conduitei preventive?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q9" onclick = "raspuns(this)">A.)nu au decât rol estetic;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q9" onclick = "raspuns(this)">B.)contribuie la fixarea telefoanelor mobile, permiţând efectuarea convorbirilor fără a mai duce aparatul la ureche;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q9" onclick = "raspuns(this)">C.)în cazul tamponării din spate a autovehiculului, previn posibila fracturare a coloanei cervicale.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>10.)Ce tip de coliziuni au cea mai mare forță de distrugere?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q10" onclick = "raspuns(this)">A.)coliziunile laterale;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q10" onclick = "raspuns(this)">B.)coliziunile frontale;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q10" onclick = "raspuns(this)">C.)coliziunile din spate.</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<div class = "panou">
		<input type = "button" id = "previous" value = "Întrebarea precedentă" onclick = "prec()">
		<input type = "button" id = "next" value = "Întrebarea următoare" onclick = "urm()">
	</div>
	<div class = "panou" id = "mesaj">După ce răspundeți la toate cele 10 întrebări va apărea butonul de verificare.</div>
	<div class = "panou" id = "verif">
		<input type = "submit" name = "verifica" value = "Verificare"><br>
	</div>
</form>
</body>
</html>