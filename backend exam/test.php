<?php
require_once './classes/Product.php';
$obj = new Product;
print_r($obj->getOne(1));
?>