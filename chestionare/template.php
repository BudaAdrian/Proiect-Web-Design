<?php
	session_start();
	if (!isset($_SESSION["login"]) || empty($_SESSION["login"]))
	{
		header("location:../homepage.php");
		exit;
	}
	$_SESSION["chestionar"] = "#";
	$pagCurenta = "form#";
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" href="/Proiect/images/favicon.ico" type="image/x-icon"/>
<link rel = "stylesheet" type = "text/css" href = "/Proiect/styles/fundal.css"></link>
<link rel = "stylesheet" type = "text/css" href = "/Proiect/styles/chestionare.css"></link>
<title>Chestionar #</title>

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
<?php include("../header.php"); ?>
<h1>Chestionarul #: Subiect</h1>
<form name = "chestionar" method = "post" action = "/Proiect/check.php">
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table>
						<tr>
							<td>1.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q1" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q1" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q1" onclick = "raspuns(this)">C.)</td>
						</tr>
					</table>
				</td>
				<td><img src = "/Proiect/images/chestionar#/nume.jpg"></td>
			</tr>
		</table>
	</div>
	<div class = "intrebare">
		<table>
			<tr>
				<td class = "text">
					<table width = 100%>
						<tr>
							<td>2.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q2" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q2" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q2" onclick = "raspuns(this)">C.)</td>
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
							<td>3.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q3" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q3" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q3" onclick = "raspuns(this)">C.)</td>
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
							<td>4.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q4" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q4" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q4" onclick = "raspuns(this)">C.)</td>
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
							<td>5.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q5" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q5" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q5" onclick = "raspuns(this)">C.)</td>
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
							<td>6.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q6" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q6" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q6" onclick = "raspuns(this)">C.)</td>
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
							<td>7.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q7" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q7" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q7" onclick = "raspuns(this)">C.)</td>
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
							<td>8.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q8" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q8" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q8" onclick = "raspuns(this)">C.)</td>
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
							<td>9.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q9" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q9" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q9" onclick = "raspuns(this)">C.)</td>
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
							<td>10.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "a" name = "q10" onclick = "raspuns(this)">A.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "b" name = "q10" onclick = "raspuns(this)">B.)</td>
						</tr>
						<tr>
							<td><input type = "radio" value = "c" name = "q10" onclick = "raspuns(this)">C.)</td>
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