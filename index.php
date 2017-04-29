<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 28.
 * Time: 13:16
 */

namespace WebDream;

require __DIR__ . '/vendor/autoload.php';

use WebDream\Product as Product;
use WebDream\Brand as Brand;
use WebDream\Depot as Depot;


$phone_brand = new Brand();
$phone_brand->setName("Huawei");
$phone_brand->setCategory(5);

$phone = new Phone();
$phone->setName("P8 Light");
$phone->setPrice(30960);
$phone->setItemNumber(02452244);
$phone->setColor("Black");
$phone->setBrand($phone_brand);

$app = new Application();
$app->createDepot("Depo1", "8600 Siofok Fo utca 13",150);
$app->createDepot("Depo2", "1119 Budapest Etele ut 25",300);

//Test case 1. Uncomment the lines below to run this test
/*try
{
    $app->addProduct($phone, 200);
    $app->listDepots();
    $app->deleteProduct($phone, 100);
    $app->listDepots();
}
catch(\Exception $e)
{
    echo $e->getMessage();
}*/

//Test case 2.
/*try
{
    $app->addProduct($phone, 500);
}
catch (\Exception $e)
{
    echo $e->getMessage();
}*/

//Test case 3.
try
{
    $app->addProduct($phone, 200);
    $app->deleteProduct($phone, 300);
}
catch (\Exception $e)
{
    echo $e->getMessage();
}