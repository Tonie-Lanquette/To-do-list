<?php

namespace Classes\Task;

class Task
{

    private $id_task;
    private $name_task;
    private $description_task;
    private $date_task;

    function __construct()
    {
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
}
