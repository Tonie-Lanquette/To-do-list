<?php


// Un namespace s'utilise à travers 3 étapes // 
// Etape 1 : 
// Déclarer un namespace ou nom d'espace. 
// Cela permettra de retrouver et d'utiliser facilement la classe concernée.
// Notre autoload ira chercher le nom que l'on indiquera dans le use  NomDeDossier/NomdeClasse et lui ajoutera un .php
// Autrement dit, si je déclare ici un nom d'espace Category. 
// Dans l'index ou tout autre fichier, il sera accessible en faisant un USE NomDuDossier/NomDeLaClasse 

namespace Models\Category;

class Category
{
  private $id;
  private $nameCategory;



  function __construct(array $datas)
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    };
  }



  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }



  /**
   * Get the value of nameCategory
   */
  public function getNameCategory()
  {
    return $this->nameCategory;
  }

  /**
   * Set the value of nameCategory
   *
   * @return  self
   */
  public function setNameCategory($nameCategory)
  {
    $this->nameCategory = $nameCategory;

    return $this;
  }
}
