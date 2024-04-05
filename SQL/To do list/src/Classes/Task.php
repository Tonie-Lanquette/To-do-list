<?php

namespace src\Classes;

class Task
{

    private $id_task;
    private $name;
    private $id_category;
    private $description;
    private $date;
    private $id_user;
    private $id_priority;


    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
    }


    /**
     * Get the value of id_task
     */
    public function getIdTask()
    {
        return $this->id_task;
    }

    /**
     * Set the value of id_task
     */
    public function setIdTask($id_task): self
    {
        $this->id_task = $id_task;

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

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
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
}
