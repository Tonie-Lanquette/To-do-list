<?php

namespace src\Repositories;

use src\Classes\DbConnexion;
use src\Classes\User;

class UserRepository
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {

        $this->pdo = $dbConnexion->getPDO();
    }

    public function register(User $user)
    {

        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $password = $user->getPassword();
        $email = $user->getEmail();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO  tdl_user VALUES(NULL,?,?,?,?)");

            $stmt->execute([$firstName, $lastName, $password, $email]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            return $e;
        }
    }

    public function checkUserExist(User $user)
    {
        $email = $user->getEmail();

        try {
            $stmt = $this->pdo->query("SELECT * FROM tdl_user WHERE email = '$email' ");
        } catch (\PDOException $e) {
            return $e;
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }
        return $stmt->rowCount() == 1;
    }




    public function loginAccount(string $email, string $password)
    {
        $hash = hash("whirlpool", $password);

        try {

            $stmt = $this->pdo->query("SELECT * FROM tdl_user WHERE email='$email' AND password = '$hash'");
        } catch (\PDOException $e) {
            var_dump($e);
        }
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row);
        }
        if (isset($user)) {
            return $stmt->rowCount() == 1;
        }
    }

    public function getUserInfos()
    {

        try {
            $stmt = $this->pdo->query("SELECT * FROM tdl_user");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $user = new User($row);
            }
        } catch (\PDOException $e) {
            return $user;
        }
        return $user;
    }

    public function getUserByEmail($email)
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM tdl_user WHERE email = '$email'");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $user = new User($row);
            }
        } catch (\PDOException $e) {
            return $user;
        }
        return $user;
    }
}
