<?php 
	$paniek1 = $_POST["paniek1"];
	$paniek2 = $_POST["paniek2"];
	$paniek3 = $_POST["paniek3"];
	$paniek4 = $_POST["paniek4"];
	$paniek5 = $_POST["paniek5"];
	$paniek6 = $_POST["paniek6"];
	$paniek7 = $_POST["paniek7"];
	$paniek8 = $_POST["paniek8"];
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" href="css/mad.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Unkempt:700" rel="stylesheet">
</head>
<header class="ignorance"><a href="index.php">There is panic... </a>
		<a href="Ignorance.php">Ignorance</a></header>
<h1>Mad Libs</h1>
<main>
<body>
<h2>Ignorance</h2>
<p>There are a lot of people that can't <?php echo $_POST ["paniek1"] ?>. Take <?php echo $_POST ["paniek2"] ?> for example. Even with the help of a <?php echo $_POST ["paniek4"] ?> or <?php echo $_POST ["paniek3"] ?>, <?php echo $_POST ["paniek2"] ?> can't <?php echo $_POST ["paniek1"] ?>. This has nothing to do with a lack of <?php echo $_POST ["paniek5"] ?>, but because of too much <?php echo $_POST ["paniek6"] ?>. Too much <?php echo $_POST ["paniek7"] ?> leads to <?php echo $_POST ["paniek8"] ?> and that's not good if you want to <?php echo $_POST ["paniek1"] ?>. Too bad for <?php echo $_POST ["paniek2"] ?>.</p>
</body>
</main>
<footer id="voet">This website is made by: <?php echo $_POST ["paniek2"] ?></footer>
</html>