
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
<form name="quiz" method="post" action="quiz8.php">
		<label>Sexta pergunta:</label>
		<br><br>
		<label>  Quantos anos Jotaro tem na parte 4 
        </label>
		<br><br>
		<input type="submit" name="Errada" value="Nenhuma das alternativas">
		<input type="submit" name="certa" value="28">
		<input type="submit" name="Errada" value="35">
		<input type="submit" name="Errada" value="21">
	</form>
</body>
</html>