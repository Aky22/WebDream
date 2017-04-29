<?php
/**
 * Created by PhpStorm.
 * User: erosa
 * Date: 2017. 04. 28.
 * Time: 12:04
 */

namespace WebDream;


class Brand
{

    /**
     * @string name
     */
    private $name;

    /**
     * @int category
     */
    private $category;


    /**
     * @return string
     */
    public function getName(): int
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
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param integer $category
     */
    public function setCategory(int $category)
    {
        try
        {
            $this->categoryCheck($category);
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
        }
        $this->category = $category;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->getName();
    }

    /**
     * @param integer $category
     * @return bool
     * @throws \Exception
     */
    private function categoryCheck(int $category){
        if($category >= 1 && $category <= 5)
        {
            return true;
        }
        else
        {
            throw new \Exception("Category doesn't exist!");
        }
    }
}