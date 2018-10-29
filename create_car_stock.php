<?php
require_once "bootstrap.php";

$model = $argv[1];
$brand_id = $argv[2];

if (!$model || !$brand_id) {
    echo "Pls add model and brand id.\n";
    exit(1);
}

$brand = $entityManager->find("Brands", $brand_id);

if (!$brand) {
    echo "Brand id is not found.\n";
    exit(1);
}

$carsStock = new CarsStock();

//$carsStock->setBrand($brand);
//$carsStock->setModel($model);

$entityManager->persist($carsStock);
$entityManager->flush();


Doctrine\Common\Util\Debug::dump($brand->getCarsStock());


echo "Your new Model Id: ".$carsStock->getId()."\n";