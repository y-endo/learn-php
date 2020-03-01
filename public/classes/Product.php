<?php

require_once 'BaseProduct.php';

class Product extends BaseProduct
{
    private $products = [];
    public const STATIC_CONST = '定数';

    public function __construct(array $products)
    {
        parent::__construct($products);
    }

    public function echoProduct()
    {
        parent::echoProduct();
        echo 'ぷろだくと';
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public static function getClassName()
    {
        return 'Product';
    }
}
