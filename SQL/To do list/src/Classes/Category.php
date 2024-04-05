<?php

namespace src\Classes;

class Category
{

    private $id_category;
    private $name;

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }


    /**
     * Get the value of id_category
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
