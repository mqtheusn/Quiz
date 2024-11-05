
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
<form name="quiz" method="post" action="quiz6.php">
		<label>Quinta pergunta:</label>
		<br><br>
		<label>  Qual é o stand mais fraco de toda a história de jojo bizarre adventure? 
        </label>
		<br><br>
		<input type="submit" name="certa" value="Echoes">
		<input type="submit" name="Errada" value="Morte">
		<input type="submit" name="Errada" value="Stone Ocean">
		<input type="submit" name="certa" value="Survivor">
	</form>
</body>
</html>