
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <?php  session_start(); 
    
    $cont = 0;

    //se for a resposta correta cont++

    if(isset($_POST['certa'])){
        $cont++;
    }
        $_SESSION['contador']=$cont;
    ?>
</head>
<body>
<form name="quiz" method="post" action="quiz3.php">
		<label>Segunda pergunta:</label>
		<br><br>
		<label> Quantas evoluções o stand do Koichi tem? (Echoes)</label>
		<br><br>
		<input type="submit" name="Errada" value="1 Evolução">
		<input type="submit" name="Errada" value="2 Evoluções">
		<input type="submit" name="certa" value="3 Evoluções">
		<input type="submit" name="Errada" value="4 Evoluções">
	</form>
</body>
</html>