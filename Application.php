<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 28.
 * Time: 13:57
 */

namespace WebDream;

use WebDream\Depot as Depot;
use WebDream\Brand as Brand;
use WebDream\Product as Product;


class Application
{

    /**
     * @var array
     */
    private $depots = array();

    /**
     * @var Brand
     */
    private $brand;

    /**
     * @param string $name
     * @param string $address
     * @param int $maxCapacity
     */
    public function createDepot(string $name, string $address, int $maxCapacity)
    {
        $depot = new Depot();
        $depot->setName($name);
        $depot->setAddress($address);
        $depot->setMaxCapacity($maxCapacity);
        array_push($this->depots, $depot);
    }

    /**
     * List content of the depots
     */
    public function listDepots()
    {
        foreach ($this->depots as $depot)
        {
            echo (string)$depot.":<br />";
            foreach($depot->getProducts() as $product)
            {
                echo $product[0]->getBrand()->getName()." ".$product[0]->getName()." ".$product[1]."<br />";
            }
        }
    }

    /**
     * @param \WebDream\Product $product
     * @param int $count
     * @throws \Exception
     */
    public function addProduct(Product $product, int $count)
    {
        for ($i = 0; $i < count($this->depots); $i++)
        {
            $av = $this->depots[$i]->getAvailableCapacity();
            if($av < $count)
            {
                if(count($this->depots)-1 == $i)
                {
                    throw new \Exception("All depots is full!");
                }
                $this->depots[$i]->addProduct($product, $av);
                $count -= $av;
                continue;
            }
            $this->depots[$i]->addProduct($product, $count);
            break;
        }
    }

    /**
     * @param \WebDream\Depot $depot
     * @param \WebDream\Product $product
     * @param string $count
     */
    public function deleteProduct(Product $product, string $count)
    {
            $i = 0;
            foreach ($this->depots as $depot)
            {
                $av = $depot->getAvailableProduct($product);
                if($av >= $count)
                {
                    $depot->deleteProduct($product,$count);
                    break;
                }
                else
                {
                    if(count($this->depots) - 1 == $i)
                    {
                        throw new \Exception("Not enough item to retrieve");
                    }
                    $depot->deleteProduct($product, $av);
                    $count -= $av;
                }
                $i++;
            }
    }

    /**
     * @param string $name
     * @param int $category
     */
    private function createBrand(string $name, int $category)
    {
        $this->brand = new Brand();
        $this->brand->setName($name);
        $this->brand->setCategory($category);
    }



}