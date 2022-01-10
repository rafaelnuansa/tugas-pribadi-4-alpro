<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Pyramid Of Stars Pattern Alpro</title>
</head>
<body style="font-size:20px">
<?php
echo "<pre>";
$space = 10;
for ($i = 0; $i <= 5; $i++) {
     
    for ($k = 0; $k < $space; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }
     
    $space--;
    echo "<br/>";
}
echo "</pre>";
?>
</body>
</html>