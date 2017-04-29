<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 29.
 * Time: 9:00
 */

namespace WebDream;


class Meat extends Product
{

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var string
     */
    private $type;

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

}