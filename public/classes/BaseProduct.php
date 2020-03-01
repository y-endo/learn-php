<?php

class BaseProduct
{
    private $products = [];

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function echoProduct()
    {
        echo '親クラス';
    }
}
