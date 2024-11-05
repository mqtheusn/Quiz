
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
<form name="quiz" method="post" action="quiz9.php">
		<label>Quarta pergunta:</label>
		<br><br>
		<label>  Quais stands KAKYOIN ajudou os Stardust crusaders a derrotar? 
        </label>
		<br><br>
		<input type="submit" name="Errada" value="Made in heaven, Stone ocean e The world">
		<input type="submit" name="Errada" value="Imperatriz, Justiça e a Fortuna">
		<input type="submit" name="Errada" value="The world, Anúbis, e Yellow Temperance">
		<input type="submit" name="certa" value="The world, Os amantes e a Morte">
	</form>
</body>
</html>