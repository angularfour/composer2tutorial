<?php

require_once 'bootstrap.php';

$del = $entityManager->find('Category', 4);

$entityManager->remove($del);
$entityManager->flush();