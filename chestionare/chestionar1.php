<?php
	require_once "../root-config.php";
	session_start();
	if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
	{
		header("location:" . ROOT_LINK . "homepage.php");
		exit;
	}
	else $_SESSION["chestionar"] = "1";
	$pagCurenta = "form1";
?>

<?php include ROOT_DIR . "header.php"; ?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/chestionare.css" ?>"></link>
<title>Chestionar 1</title>

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
	}
}
</script>
</head>

<body onLoad = "init()">
<?php include ROOT_DIR . "meniu.php"; ?>
<h1>Chestionarul 1: Depăşirea</h1>
<form name = "chestionar" method = "post" action = "<?php echo ROOT_LINK . "check.php" ?>">
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>1.)În care dintre următoarele situaţii iţi este interzis să efectuezi depăşirea?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q1" onclick = "raspuns(this)">A.)la mai putin de 150 m de trecerile la nivel de cale ferată;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q1" onclick = "raspuns(this)">B.)pe drumurile cu o singură bandă de circulație pe sens;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q1" onclick = "raspuns(this)">C.)în zona de acțiune a indicatorului "Depășirea interzisă".</td>
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
					<table width = 100%>
						<tr>
							<td>2.)Puteți depăși în această situație, dacă vă aflați la volanul autoturismului?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q2" onclick = "raspuns(this)">A.)nu, deoarece treceți de axul drumului;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q2" onclick = "raspuns(this)">B.)da, manevra este regulamentară;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q2" onclick = "raspuns(this)">C.)nu, deoarece marcajul orizontal interzice manevra.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar1/q2.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>3.)Cum procedează conducătorul autovehiculului când, alfându-se într-o comună, în imediata apropiere a unei treceri pentru pietoni semnalizată ca atare, intenționează să depășească un vehicul aflat în mișcare?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q3" onclick = "raspuns(this)">A.)execută depășirea cu viteză redusă;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q3" onclick = "raspuns(this)">B.)nu execută depășirea;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q3" onclick = "raspuns(this)">C.)execută depășirea cu viteză sporită.</td>
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
							<td>4.)Depăsirea este interzisă:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q4" onclick = "raspuns(this)">A.)în curbe, dacă vizibilitatea este redusă sub 50 m;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q4" onclick = "raspuns(this)">B.)în intersecțiile dirijate;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q4" onclick = "raspuns(this)">C.)în stații fără refugiu pentru pietoni, când tramvaiul este oprit.</td>
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
							<td>5.)Autoturismul semnalizează intenţia de a se pune în mişcare. Puteţi efectua depăşirea?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q5" onclick = "raspuns(this)">A.)nu, deoarece a semnalizat corect;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q5" onclick = "raspuns(this)">B.)nu, vehiculele care pleacă de pe loc au prioritate;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q5" onclick = "raspuns(this)">C.)da, procedaţi regulamentar.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar1/q5.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>6.)Înainte de efectuarea unei depăşiri, eşti obligat?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q6" onclick = "raspuns(this)">A.)să semnalizezi intenţia de a efectua depăşirea;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q6" onclick = "raspuns(this)">B.)să îl avertizezi sonor pe cel care urmează a fi depăşit;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q6" onclick = "raspuns(this)">C.)să reduci viteza de deplasare.</td>
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
							<td>7.)Ești obligat să semnalizezi orice schimbare a direcției de mers?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q7" onclick = "raspuns(this)">A.)da;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q7" onclick = "raspuns(this)">B.)numai dacă sunt vehicule care te urmează;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q7" onclick = "raspuns(this)">C.)numai în localităţi.</td>
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
							<td>8.)Manevra de ocolire a unui obstacol aflat pe sensul tău de circulaţie, prin schimbarea direcţiei de mers, constituie?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q8" onclick = "raspuns(this)">A.)depăşire;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q8" onclick = "raspuns(this)">B.)ocolire;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q8" onclick = "raspuns(this)">C.)situaţie de urgenţă.</td>
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
							<td>9.)Conduceţi autoturismul albastru. V-aţi angajat corect în depăşirea motocicletei?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q9" onclick = "raspuns(this)">A.)da, deoarece din sens opus nu circulă niciun vehicul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q9" onclick = "raspuns(this)">B.)da, deoarece motocicleta nu trece peste axul drumului;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q9" onclick = "raspuns(this)">C.)nu, deoarece motocicleta depăşeşte autocamionul.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar1/q9.jpg" ?>"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>10.)Este corectă depăşirea autocamionului din imagine?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q10" onclick = "raspuns(this)">A.)da, deoarece din sens opus nu se apropie alt vehicul;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q10" onclick = "raspuns(this)">B.)nu, pentru că depăşirea s-ar face într-o curbă cu vizibilitate redusă sub 50 m;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q10" onclick = "raspuns(this)">C.)nu, pentru că linia continuă interzice acest lucru.</td>
						</tr>
					</table>
				</td>
				<td><img src = "<?php echo ROOT_LINK . "images/chestionar1/q10.jpg" ?>"></td>
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