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

echo '<br>';

function hoge(string $a, int $b, ...$c)
{
    echo '<pre>';
    var_dump($a);
    echo '<br>';
    var_dump($b);
    echo '<br>';
    var_dump($c);
    echo '</pre>';
}
hoge('b', 5, 'c', 1, ['c' => 'c']);

function fuga1()
{
    echo 'fuga1';
}
function hoge2(callable $func)
{
    $func();
    echo 'hoge2';
}
hoge2('fuga1');

require_once './classes/Product.php';
$product = new Product(['テスト']);
echo '<br>';

var_dump($product->getProducts());
echo '<br>';

$product->addProduct('テスト2');
var_dump($product->getProducts());
echo '<br>';

echo Product::getClassName();
echo '<br>';

echo Product::STATIC_CONST;
echo '<br>';

$product->echoProduct();

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;

$app = new TestController();
$app -> run();

use Carbon\Carbon;

echo Carbon::now();
?>
</body>
</html>
