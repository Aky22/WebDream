<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 28.
 * Time: 12:05
 */

namespace WebDream;

use WebDream\Brand as Brand;


class Product
{
    /**
     * @string name
     */
    private $name;

    /**
     * @int item_number
     */
    private $item_number;

    /**
     * @int price
     */
    private $price;

    /**
     * @Brand brand
     */
    private $brand;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getItemNumber(): int
    {
        return $this->item_number;
    }

    /**
     * @param integer $item_number
     */
    public function setItemNumber(int $item_number)
    {
        $this->item_number = $item_number;
    }

    /**
     * @return integer
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param integer $price
     */
    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    /**
     * @return Brand
     */
    public function getBrand(): Brand
    {
        return $this->brand;
    }

    /**
     * @param Brand $brand
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->getName();
    }
}