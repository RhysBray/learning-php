<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>A simple Site</h1>
<h2>This is a simple site for me to practice some php coding</h2>

<a href="details.php"><button>Details</button></a>
<a href="question.php"><button>Math Question</button></a>

<?php

$num1 = rand(1,40);
$num2 = rand(1,40);
$_SESSION["num1"] = $num1;
$_SESSION["num2"] = $num2;
?>

</body>
</html>