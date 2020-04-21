<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Guess Number Game</h3>
<form action="" method="get">
    <label>From: <input type="number" name="firstNumber"></label>
    <label>To: <input type="number" name="lastNumber"></label>
    <input type="submit" value="Setting">
</form>
<?php
$firstNumber = $_GET['firstNumber'];
$lastNumber = $_GET['lastNumber'];
$lengthArrNumber = ($lastNumber - $firstNumber) + 1;
$arrayNumber[0] = $firstNumber;
for ($i = 1; $i < $lengthArrNumber; $i++) {
    $arrayNumber[$i] = $arrayNumber[$i - 1] + 1;
}
$firstIndex = 0;
$lastIndex = $lengthArrNumber - 1;
//Add dataJson
$dataJson = json_encode($arrayNumber);
file_put_contents('data.json', $dataJson);
?>
<form action="guess-number.php" method="post">
    <input type="hidden" name="firstIndex" value="<?php echo $firstIndex ?>">
    <input type="hidden" name="lastIndex" value="<?php echo $lastIndex ?>">
    <input type="submit" value="Play">
</form>
</body>
</html>
