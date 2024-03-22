<?php

namespace src\Classes;

class Task
{

    private $id_task;
    private $name_task;
    private $description_task;
    private $date_task;
    private $id_user;
    private $id_category;
    private $name_category;
    private $id_priority;
    private $name_priority;


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
     * Get the value of name_task
     */
    public function getNameTask()
    {
        return $this->name_task;
    }

    /**
     * Set the value of name_task
     */
    public function setNameTask($name_task): self
    {
        $this->name_task = $name_task;

        return $this;
    }

    /**
     * Get the value of description_task
     */
    public function getDescriptionTask()
    {
        return $this->description_task;
    }

    /**
     * Set the value of description_task
     */
    public function setDescriptionTask($description_task): self
    {
        $this->description_task = $description_task;

        return $this;
    }

    /**
     * Get the value of date_task
     */
    public function getDateTask()
    {
        return $this->date_task;
    }

    /**
     * Set the value of date_task
     */
    public function setDateTask($date_task): self
    {
        $this->date_task = $date_task;

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
