
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
<form name="quiz" method="post" action="quiz4.php">
		<label>Terceira pergunta:</label>
		<br><br>
		<label> Qual é o poder principal do Made in Heaven?</label>
		<br><br>
		<input type="submit" name="certa" value="Acelerar o tempo">
		<input type="submit" name="Errada" value="Parar o tempo">
		<input type="submit" name="Errada" value="Voltar no tempo">
		<input type="submit" name="Errada" value="Explodir o tempo">
	</form>
</body>
</html>