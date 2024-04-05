<?php

namespace Repositories\UserManager;

use Models\DbConnexion\DbConnexion;
use Models\User\User;

class UserManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        // On récupére la fonctin getPdo de DbConnexion
        $this->pdo = $dbConnexion->getPDO();
    }

    public function login(string $email,string $password )
    {
        $hash = hash("whirlpool" ,$password);


        try {
            $stmt = $this->pdo->query("SELECT * FROM user WHERE email_user = '$email' AND password_user = '$hash' ");

            
        } catch (\PDOException $e) {
            var_dump($e);

        }
           while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                // Pour chaque ligne de résultat de la requête on ajoute 
                // cette ligne dans $products
                // au format Product ( notre classe qui agit comme un moule a gauffre)
                // Dans products se trouvera un tableau d'objet au format Product
                // Et donc avec les méthodes de classes ( getters et setters)
                $user = new User($row);
            }

            if(isset($user)){
            return $stmt->rowCount() == 1;
            }

    }



  






}