<?php session_start();
		$_SESSION['usuario'] = $_POST['nome']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
<form name="quiz" method="post" action="quiz2.php">
		<label>Primeira pergunta:</label>
		<br><br>
		<label> Qual é a segunda evolução do Killer Queen?</label>
		<br><br>
		<input type="submit" name="certa" value="Heart Attack">
		<input type="submit" name="Errada" value="Auto-explosion">
		<input type="submit" name="Errada" value="Bites the dust">
		<input type="submit" name="Errada" value="Nenhuma dessas alternativas">
	</form>
</body>
</html>