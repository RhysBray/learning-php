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
<a href="index.php"><button>Back Home</button></a>

<?php 
$num1 = $_SESSION["num1"];
$num2 = $_SESSION["num2"];
echo("<h3>What is $num1 + $num2?</h3>");
?>

<form action="question.php" method="get">
<label for="answer">Answer: </label>
<input type="number" name="answer">
<input type="submit" return false>
</form>

<?php
$name = $_GET["answer"];
$correcrAnswer = $num1 + $num2;

if($name == $correcrAnswer) {
    echo("<h3>That's Correct!</h3>");
}
else if ($name == null) {
    echo("<h3>Awaiting Answer..</h3>");
}
else {
    echo("<h3>Nope, Sorry! Try again...</h3>");
}
?>

</body>
</html>