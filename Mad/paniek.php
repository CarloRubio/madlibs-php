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
<header id="hoofd"><a href="index.php">There is panic... </a>
		<a href="Ignorance.php">Ignorance</a></header>
<h1>Mad Libs</h1>
<main>
<body>
<h2>There is panic...</h2>
<p>There is panic in the Kingdom of 
	<?php echo $_POST ["paniek3"] ?>.
 King <?php echo $_POST ["paniek6"] ?> is at wits' end, and when King <?php echo $_POST ["paniek6"] ?> is at wits' end, he calls for his at-wits'-end secretary <?php echo $_POST ["paniek2"] ?>. </p>
 <p>"<?php echo $_POST ["paniek2"] ?>! It's a disaster!"</p>
 <p>"Sire, majesty, what's happening?" </p>
 <p>"My <?php echo $_POST ["paniek1"] ?> has dissapeared! Just like that, without a warning! And I just bought him <?php echo $_POST ["paniek5"] ?>!" </p>
 <p>"Majesty, your <?php echo $_POST ["paniek1"] ?> will surely return on its own." </p>
 <p>"That's cool and all, but how will I be learning <?php echo $_POST ["paniek8"] ?> in the mean time? </p>
 <p>"But sir, can't you use your <?php echo $_POST ["paniek7"] ?> for that?" </p>
 <p>"<?php echo $_POST ["paniek2"] ?>, You're right! I wonder what I would do without you" </p>
<p><?php echo $_POST ["paniek4"] ?>, Sire.</p>
</body>
</main>
<footer><p>This website is made by: <?php echo $_POST ["paniek2"] ?></p></footer>
</html>