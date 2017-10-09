<?php

require_once 'bootstrap.php';

$category = new Category;

$category->setName('Keyboards');

$entityManager->persist($category);

$entityManager->flush();