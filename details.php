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

<form action="details.php" method="post">
<label for="name">Full Name: </label>
<input type="text" name="name">
<label for="age">Age: </label>
<input type="text" name="age">
<input type="submit">
</form>

<?php 
$name = $_POST["name"];
$age = $_POST["age"];
$nameCount = str_word_count($name);
$nameUpperCase = strtoupper($name);

if ($name == null || $age == null) {
    echo("<h3>Awaiting Input..</h3>");
}
else {
    echo("<h2>Your name is $nameUpperCase!!</h2>");
    echo("<p>Your total number of names of $nameCount</p>");
    echo("<p>you are $age years old and learning to code.</p>");
}
?>

</body>
</html>