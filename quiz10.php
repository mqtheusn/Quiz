
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>

    <?php  session_start();  

    $cont=$_SESSION['contador'];
    if(isset($_POST['certa'])){
        $cont++;
    }
    $_SESSION['contador']=$cont;
    ?>



</head>
<body>
<form name="quiz" method="post" action="respcerta.php">
		<label>Décima pergunta:</label>
		<br><br>
		<label>  Em Jojo, em certas partes temos ajuda de um aliado criança. Qual destas crianças tem um Stand? 
        </label>
		<br><br>
		<input type="submit" name="errada" value="Anne">
		<input type="submit" name="Errada" value="Hayato">
		<input type="submit" name="certa" value="Empório Alnino">
		<input type="submit" name="Errada" value="Nenhuma criança pode ter Stand, eles só se densenvolvem na adolescência">
	</form>
</body>
</html>