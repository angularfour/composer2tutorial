<?php
require_once 'bootstrap.php';

$category = $entityManager->find('Category', 4);

$product = new Product;

$product->setName('lenovo kb');

$product->setCategory($category);

$entityManager->persist($product);
$entityManager->flush();