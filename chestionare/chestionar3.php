<?php
	session_start();
	require_once "../root-config.php";
	if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
	{
		header("location:" . ROOT_LINK . "homepage.php");
		exit;
	}
	else $_SESSION["chestionar"] = "3";
	$pagCurenta = "form3";
?>

<?php include ROOT_DIR . "header.php"; ?>
<link rel = "stylesheet" type = "text/css" href = "<?php echo ROOT_LINK . "styles/chestionare.css" ?>"></link>
<title>Chestionar 3</title>

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
<h1>Chestionarul 3: Obligațiile conducătorilor de autovehicule</h1>
<form name = "chestionar" method = "post" action = "<?php echo ROOT_LINK . "check.php" ?>">
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>1.)Ești obligat să oprești autovehiculul:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q1" onclick = "raspuns(this)">A.)la semnalul nevăzătorilor care traversează strada;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q1" onclick = "raspuns(this)">B.)la apropierea de o intersecție;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q1" onclick = "raspuns(this)">C.)la semnalul conducătorului coloanei de pietoni.</td>
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
							<td>2.)În ce situații se poate schimba poziția autovehiculului angajat într-un accident de circulație?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q2" onclick = "raspuns(this)">A.)după sesizarea poliției;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q2" onclick = "raspuns(this)">B.)dacă accidentul s-a soldat cu avarii, sau pentru degajarea răniților, în vederea acordării primului ajutor;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q2" onclick = "raspuns(this)">C.)după ce s-a acordat ajutor medical persoanelor rănite.</td>
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
							<td>3.)Ce obligații îți revin dacă ai accidentat un pieton care a traversat strada printr-un loc nepermis?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q3" onclick = "raspuns(this)">A.)întrucât nu ești vinovat de accident, poți părăsi locul faptei;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q3" onclick = "raspuns(this)">B.)să anunți poliția și, în lipsa altor mijloace de transport , să îl transporți tu însuți la cea mai apropiată unitate sanitară, apoi să te întorci la locul accidentului;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q3" onclick = "raspuns(this)">C.)să te prezinți de urgență la cea mai apropiată unitate de poliție.</td>
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
							<td>4.)Ce este interzis să se monteze la autovehicul?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q4" onclick = "raspuns(this)">A.)dispozitive de detectare a aparatelor radar;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q4" onclick = "raspuns(this)">B.)lumini de altă culoare și intensitate decât cele omologate;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q4" onclick = "raspuns(this)">C.)lumini de poziție.</td>
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
							<td>5.)Poți părăsi locul unui accident fără încuviințarea poliției, dacă din acesta a rezultat vătămarea integrității corporale a unei persoane?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q5" onclick = "raspuns(this)">A.)nu;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q5" onclick = "raspuns(this)">B.)da, dacă accidentul nu s-a produs din vina ta;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q5" onclick = "raspuns(this)">C.)da, în cazul în care autoturismul pe care îl conduceai nu a fost avariat.</td>
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
							<td>6.)Ce îți este intezis în calitate de conducător auto?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q6" onclick = "raspuns(this)">A.)să deschizi ușile, dacă vehiculul este oprit sau staționat pe partea carosabilă;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q6" onclick = "raspuns(this)">B.)să arunci din vehicul obiecte, substanțe sau alte bunuri;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q6" onclick = "raspuns(this)">C.)să folosești instalația de sonorizare cu care este echipat autoturismul.</td>
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
							<td>7.)Ești obligat să oprești la semnalele date de:</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q7" onclick = "raspuns(this)">A.)inspectorii primăriei;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q7" onclick = "raspuns(this)">B.)conducătorii vehiculelor de ambulanță;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q7" onclick = "raspuns(this)">C.)îndrumătorii de circulație ai Ministerului Apărării.</td>
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
							<td>8.)Ce obligații ai dacă ești posesor al permisului de conducere de mai puțin de un an?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q8" onclick = "raspuns(this)">A.)să emiți semnale acustice ori de câte ori efectuezi o depăsire;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q8" onclick = "raspuns(this)">B.)să circuli cu semnul distinctiv aplicat regulamentar;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q8" onclick = "raspuns(this)">C.)să circuli cu faza de drum în funcțiune, inclusiv pe timp de zi.</td>
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
							<td>9.)Cum trebuie să procedezi dacă, în timp ce te deplasezi cu autovehiculul, apar probleme tehnice care fac imposibilă continuarea călătoriei?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q9" onclick = "raspuns(this)">A.)să scoți autovehiculul în afara părții carosabile;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q9" onclick = "raspuns(this)">B.)dacă poți înlătura defecțiunile, să te deplasezi la cea mai apropiată unitate de depanare;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q9" onclick = "raspuns(this)">C.)să asiguri autovehiculul contra efracției și să pleci după ajutor.</td>
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
							<td>10.)Ce le este interzis conducătorilor de vehicule în timpul mersului?</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q10" onclick = "raspuns(this)">A.)să arunce orice fel de obiecte pe drumul public;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q10" onclick = "raspuns(this)">B.)să fumeze;</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q10" onclick = "raspuns(this)">C.)să se agajeze în discuții cu ceilalți ocupanți ai autovehiculului.</td>
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