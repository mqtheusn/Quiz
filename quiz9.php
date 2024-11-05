
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
<form name="quiz" method="post" action="quiz10.php">
		<label>Nona pergunta:</label>
		<br><br>
		<label>  Em que ano se passa a parte 1 de Jojo (Phantom Blood)? 
        </label>
		<br><br>
		<input type="submit" name="certa" value="Por volta das décadas de 1850 e 1880">
		<input type="submit" name="Errada" value="1900">
		<input type="submit" name="Errada" value="Não se sabe ao certo">
		<input type="submit" name="Errada" value="2000's">
	</form>
</body>
</html>