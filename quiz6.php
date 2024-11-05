
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
<form name="quiz" method="post" action="quiz7.php">
		<label>Sexta pergunta:</label>
		<br><br>
		<label>  Quantas mulheres o YOSHIGAKE KIRA matou? 
        </label>
		<br><br>
		<input type="submit" name="Errada" value="23">
		<input type="submit" name="Errada" value="53">
		<input type="submit" name="certa" value="48">
		<input type="submit" name="Errada" value="30">
	</form>
</body>
</html>