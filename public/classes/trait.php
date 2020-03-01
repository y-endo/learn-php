<?php

trait ProductTrait
{
    public function getProduct()
    {
        echo $this->className;
        echo 'プロダクト';
    }
}

trait NewsTrait
{
    public function getNews()
    {
        echo 'ニュース';
    }
}

class Product
{
    use ProductTrait;
    use NewsTrait;

    public $className = 'Product';

    public function getInformation()
    {
        echo 'クラスです。';
    }

    public function getNews()
    {
        echo 'override getNews()';
    }
}

$product = new Product();
$product -> getInformation();
echo '<br>';
$product -> getProduct();
echo '<br>';
$product -> getNews();
