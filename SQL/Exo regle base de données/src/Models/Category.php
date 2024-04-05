<?php

namespace src\Models;

use src\Services\Hydratation;

class Category
{
	private $Id, $Description, $Nom;

	use Hydratation;

	/**
	 * Get the value of Id
	 *
	 * @return  mixed
	 */
	public function getId(): mixed
	{
		return $this->Id;
	}

	/**
	 * Set the value of Id
	 *
	 * @param   mixed  $Id  
	 *
	 * @return void
	 */
	public function setId($Id): void
	{
		$this->Id = $Id;
	}

	/**
	 * Get the value of Description
	 *
	 * @return  mixed
	 */
	public function getDescription(): mixed
	{
		return $this->Description;
	}

	/**
	 * Set the value of Description
	 *
	 * @param   mixed  $Description  
	 *
	 * @return void
	 */
	public function setDescription($Description): void
	{
		$this->Description = $Description;
	}

	/**
	 * Get the value of Nom
	 *
	 * @return  mixed
	 */
	public function getNom(): mixed
	{
		return $this->Nom;
	}

	/**
	 * Set the value of Nom
	 *
	 * @param   mixed  $Nom  
	 *
	 * @return void
	 */
	public function setNom($Nom): void
	{
		$this->Nom = $Nom;
	}

	public function __set($name, $value)
	{
		$this->hydrate([$name => $value]);
	}
}
