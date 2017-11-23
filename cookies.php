<?php
	$valore;
	$messaggio;
    
	if( isset($_COOKIE["accessi"]))
	{
		$valore = $_COOKIE["accessi"];
		$valore += 1;
		setcookie("accessi", $valore, time()+60*60*24*7, "/", "", 0);
        $messaggio = "Numero accessi effettuati al sito: $valore";
	}
	else
	{
		setcookie("accessi", "1", time()+60*60*24*7, "/", "", 0);
		$messaggio = "E' la prima volta che accedi al sito";
	}
?>
<html>
	<head>
		<title>Accessi in una settimana</title>
	</head>
	<body>
		<?php echo $messaggio; ?>
	</body>
</html>
