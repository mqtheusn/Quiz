<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resposta certa</title>

	<?php session_start(); ?>

</head>
<body>
	<form name="quiz" method="post" action="#">
		<b>Parabénds,<?php echo $_SESSION['usuario']; ?> Você acertou <b> <?php echo $_SESSION['contador']; ?><b> perguntas.
	</form>
</body>
</html>