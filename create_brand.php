<?php
require_once "bootstrap.php";

$newBrandName = $argv[1];

$Brands = new Brands();
$Brands->setBrand($newBrandName);

$entityManager->persist($Brands);
$entityManager->flush();

echo "Created Brand with ID " . $Brands->getId() . "\n";