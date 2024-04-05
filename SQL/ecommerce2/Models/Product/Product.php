<?php

namespace Models\Product;

class Product
{
  private $id;
  private $name;
  private $id_category;
  private $price;
  private $description;
  private $nameCategory;

  function __construct(array $datas)
  {
    foreach ($datas as $key => $value) {
      $this->$key = $value;
    };
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
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of id_category
   */
  public function getId_category()
  {
    return $this->id_category;
  }

  /**
   * Set the value of id_category
   *
   * @return  self
   */
  public function setId_category($id_category)
  {
    $this->id_category = $id_category;

    return $this;
  }

  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($price)
  {
    $this->price = $price;

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
   *
   * @return  self
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
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
