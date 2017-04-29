<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 29.
 * Time: 8:55
 */

namespace WebDream;


class Phone extends Product
{

    /**
     * @var string
     */
    private $color;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

}