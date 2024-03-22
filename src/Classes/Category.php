<?php

namespace src\Classes;

class Category{

    private $id_category;
    private $name_category;

    function __construct()
    {
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
    public function setIdCategory($id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }

    /**
     * Get the value of name_category
     */
    public function getNameCategory()
    {
        return $this->name_category;
    }

    /**
     * Set the value of name_category
     */
    public function setNameCategory($name_category): self
    {
        $this->name_category = $name_category;

        return $this;
    }
}