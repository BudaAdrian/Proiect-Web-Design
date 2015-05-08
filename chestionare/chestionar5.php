<?php
	session_start();
	require_once "../root-config.php";
	if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
	{
		header("location:" . ROOT_LINK . "homepage.php");
		exit;
	}
	else $_SESSION["chestionar"] = "5";
	$pagCurenta = "form5";
?>

<?php include ROOT_DIR . "header.php"; ?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/chestionare.css" ?>"></link>
<title>Chestionar 5</title>

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
<h1>Chestionarul 5: Prioritate de trecere</h1>
<form name = "chestionar" method = "post" action = "<?php echo ROOT_LINK . "check.php" ?>">
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>1.)În ce ordine vor trece prin intersecție cele trei autoturisme?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q1" onclick = "raspuns(this)">A.)roșu, albastru, verde;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q1" onclick = "raspuns(this)">B.)verde, roșu, albastru;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q1" onclick = "raspuns(this)">C.)albastru, roșu, verde.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q1.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table width = 100%>
						<tr>
							<td>2.)În intersecții au prioritate de trecere vehiculele care întâlnesc unul dintre indicatoarele:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q2" onclick = "raspuns(this)">A.)"Înainte";</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q2" onclick = "raspuns(this)">B.)"Intersecție cu un drum fără prioritate";</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q2" onclick = "raspuns(this)">C.)"Circulație în ambele sensuri".</td>
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
							<td>3.)Ce regulă de prioritate se aplică într-o intersecție nedirijată din afara localității?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q3" onclick = "raspuns(this)">A.)prioritatea drumului principal;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q3" onclick = "raspuns(this)">B.)prioritatea vehiculului cu regim superior de viteză;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q3" onclick = "raspuns(this)">C.)prioritatea de dreapta.</td>
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
							<td>4.)Există situații în care ești obligat să acorzi prioritate de trecere unei biciclete sau unui vehicul cu tracțiuni animală?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q4" onclick = "raspuns(this)">A.)da;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q4" onclick = "raspuns(this)">B.)nu, legislația rutieră nu prevede asemenea situații;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q4" onclick = "raspuns(this)">C.)nu, conducătorii de autovehicule au întotdeauna prioritate.</td>
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
							<td>5.)Care dintre cele trei vehicule va trece ultimul prin intersecția din imagine?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q5" onclick = "raspuns(this)">A.)autoturismul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q5" onclick = "raspuns(this)">B.)autocamionul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q5" onclick = "raspuns(this)">C.)motocicleta.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q5.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>6.)Autobuzul din  față semnalizează ieșirea din stația prevazută cu alveolă. Cum trebuie să procedați?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q6" onclick = "raspuns(this)">A.)îl ocoliți cât mai mult, pentru a proteja pietonii;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q6" onclick = "raspuns(this)">B.)reduceți viteza și la nevoie opriți, pentru a permite plecarea din stație a autobuzului;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q6" onclick = "raspuns(this)">C.)vă continuați deplasarea, deoarece nu aveți restricții.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q6.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>7.)Trebuie să acordați prioritate autoturismului negru dacă acesta virează la stânga?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q7" onclick = "raspuns(this)">A.)în funcție de viteza celor două vehicule;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q7" onclick = "raspuns(this)">B.)da;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q7" onclick = "raspuns(this)">C.)nu.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q7.jpg" ?>"></td>
			</tr>
		</table>
	</div>
<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>8.)Care dintre indicatoare conferă prioritatea de trecere?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q8" onclick = "raspuns(this)">A.)indicatorul 1;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q8" onclick = "raspuns(this)">B.)indicatorul 2;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q8" onclick = "raspuns(this)">C.)indicatorul 3;</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q8.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>9.)În ce ordine vor trece prin intersecție autoturismele la culoare galbenă a semaforului?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q9" onclick = "raspuns(this)">A.)roșu, verde, albastru;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q9" onclick = "raspuns(this)">B.)roșu, albastru, verde;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q9" onclick = "raspuns(this)">C.)verde, albastru, roșu.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q9.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>10.)În ce ordine vor trece prin intersecție cele patru autovehicule?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q10" onclick = "raspuns(this)">A.)autoturismul, autocamionul, motocicleta, autobuzul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q10" onclick = "raspuns(this)">B.)autobuzul, autocamionul, motocicleta, autoturismul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q10" onclick = "raspuns(this)">C.)autoturismul, autobuzul, motocicleta, autocamionul.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar5/q10.jpg" ?>"></td>
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