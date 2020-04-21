<?php
$firstIndex = $_POST['firstIndex'];
$lastIndex = $_POST['lastIndex'];
//Get dataJson
$dataJson = file_get_contents('data.json');
$arrayNumber = json_decode($dataJson);
$midIndex = floor($firstIndex + ($lastIndex - $firstIndex) / 2);
if ($firstIndex <= $lastIndex) {
    echo $arrayNumber[$midIndex];
} else {
    echo 'Ban co nho nham ???';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function resetGame() {
            window.location = 'index.php';
        }
    </script>
</head>
<body>
<form action="" method="post">
    <input type="hidden" name="firstIndex" value="<?php echo $midIndex + 1 ?>">
    <input type="hidden" name="lastIndex" value="<?php echo $lastIndex ?>">
    <span>Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra!</span>
    <input type="submit" value="Tiếp tục đoán số">
</form>
<form action="" method="post">
    <input type="hidden" name="firstIndex" value="<?php echo $firstIndex ?>">
    <input type="hidden" name="lastIndex" value="<?php echo $midIndex - 1 ?>">
    <span>Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra!</span>
    <input type="submit" value="Tiếp tục đoán số">
</form>
<span>Chính xác, đó là con số tôi đã nghĩ!</span>
<input type="button" value="Trò chơi kết thúc" onclick="resetGame()">
</body>
</html>

