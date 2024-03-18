<?php

namespace Classes\User;

class User
{

    private $id_user;
    private $firstName_user;
    private $lastName_user;
    private $email_user;
    private $password_user;
    private $gdpr_user;




    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        }
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
     * Get the value of firstName_user
     */
    public function getFirstNameUser()
    {
        return $this->firstName_user;
    }

    /**
     * Set the value of firstName_user
     */
    public function setFirstNameUser($firstName_user): self
    {
        $this->firstName_user = $firstName_user;

        return $this;
    }

    /**
     * Get the value of lastName_user
     */
    public function getLastNameUser()
    {
        return $this->lastName_user;
    }

    /**
     * Set the value of lastName_user
     */
    public function setLastNameUser($lastName_user): self
    {
        $this->lastName_user = $lastName_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */
    public function getEmailUser()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     */
    public function setEmailUser($email_user): self
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of password_user
     */
    public function getPasswordUser()
    {
        return $this->password_user;
    }

    /**
     * Set the value of password_user
     */
    public function setPasswordUser($password_user): self
    {
        $this->password_user = $password_user;

        return $this;
    }

    /**
     * Get the value of gdpr_user
     */
    public function getGdprUser()
    {
        return $this->gdpr_user;
    }

    /**
     * Set the value of gdpr_user
     */
    public function setGdprUser($gdpr_user): self
    {
        $this->gdpr_user = $gdpr_user;

        return $this;
    }
}
