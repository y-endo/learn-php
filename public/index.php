<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php

// 配列
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
echo '<pre>';
var_dump($array);
echo '</pre>';

// 連想配列
$array2 = [
    'name' => '遠藤',
    'age' => 26
];
var_dump($array2);
echo "名前は{$array2['name']}";

echo '<br>';

foreach ($array2 as $value) {
    echo $value;
    echo '<br>';
}

// keyとvalue両方とる
foreach ($array2 as $key => $value) {
    echo $key . $value;
    echo '<br>';
}

function sum($a, $b)
{
    return $a + $b;
}
echo sum(1, 5);

array_push($array, [4,5,6]);
echo '<pre>';
var_dump($array);
echo '</pre>';

function checkPostalCode($string)
{
    $replaced = str_replace('-', '', $string);

    if (strlen($replaced)) {
        return true;
    } else {
        return false;
    }
}

var_dump(checkPostalCode('111-1111'));

require './common.php';
var_dump($commonHoge);
sayHoge();

echo __DIR__;
echo __FILE__;
?>
</body>
</html>
