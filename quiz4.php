
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
<form name="quiz" method="post" action="quiz5.php">
		<label>Quarta pergunta:</label>
		<br><br>
		<label> Qual é o dia e o mês que Joseph Joestar nasceu?</label>
		<br><br>
		<input type="submit" name="Errada" value="05/03">
		<input type="submit" name="certa" value="27/09">
		<input type="submit" name="Errada" value="14/11">
		<input type="submit" name="Errada" value="23/9">
	</form>
</body>
</html>