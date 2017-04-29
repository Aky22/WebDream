<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 28.
 * Time: 12:00
 */

namespace WebDream;

use WebDream\Product as Product;


class Depot
{
    /**
     * @var string name
     */
    private $name;

    /**
     * @var string address
     */
    private $address;

    /**
     * @var int maxCapacity
     */
    private $maxCapacity;

    /**
     * @var Product array
     */
    private $products;

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
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return Product array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product $products
     * @param int $quantity
     */
    public function addProduct(Product $products, int $quantity)
    {
        $this->products[] = array($products, $quantity);
    }

    /**
     * @param Product $product
     * @param int $quantity
     */
    public function deleteProduct(Product $product, int $quantity)
    {
        for ($i = 0; $i < count($this->products); $i++)
        {
            if ($this->products[$i][0] == $product)
            {
                if ($quantity == $this->products[$i][1])
                {
                    unset($this->products[$i]);
                }
                else
                {
                    $this->products[$i][1] -= $quantity;
                }
            }
        }
    }

    /**
     * @param int $quantity
     * @return bool
     * @throws \Exception
     */
    public function checkCapacity(int $quantity)
    {
        if($this->maxCapacity < $this->getProducts()[1] + $quantity)
        {
            return false;
        }
        return true;
    }

    /**
     * @return int
     */
    public function getMaxCapacity(): int
    {
        return $this->maxCapacity;
    }

    /**
     * @return int
     */
    public function getAvailableCapacity(): int
    {
        $tmp = 0;
        for($i = 0; $i < count($this->products); $i++)
        {
            $tmp += $this->products[$i][1];
        }

        $av = $this->maxCapacity - $tmp;

        return $av;
    }

    /**
     * Return the number of available products
     * @param \WebDream\Product $product
     * @return int
     */
    public function getAvailableProduct(Product $product): int
    {
        $tmp = 0;
        foreach ($this->products as $pr)
        {
            if($pr[0] == $product)
            {
                $tmp += $pr[1];
            }
        }

        return $tmp;
    }

    /**
     * @param int $maxCapacity
     */
    public function setMaxCapacity(int $maxCapacity)
    {
        $this->maxCapacity = $maxCapacity;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->getName();
    }
}