<?php

namespace src\Classes;

class Priority
{

    private $id_priority;
    private $name;

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
