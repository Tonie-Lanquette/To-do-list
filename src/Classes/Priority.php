<?php

namespace src\Classes;

class Priority
{

    private $id_priority;
    private $name_priority;

    function __construct(){}

    /**
     * Get the value of id_priority
     */
    public function getIdPriority()
    {
        return $this->id_priority;
    }

    /**
     * Set the value of id_priority
     */
    public function setIdPriority($id_priority): self
    {
        $this->id_priority = $id_priority;

        return $this;
    }

    /**
     * Get the value of name_priority
     */
    public function getNamePriority()
    {
        return $this->name_priority;
    }

    /**
     * Set the value of name_priority
     */
    public function setNamePriority($name_priority): self
    {
        $this->name_priority = $name_priority;

        return $this;
    }
}
