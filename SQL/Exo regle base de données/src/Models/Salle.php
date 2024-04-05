<?php

namespace src\Models;

use src\Services\Hydratation;

class Salle
{
private int $Id;
private int $Places;
private bool $Accessibilite;
private string $Nom;

    use Hydratation;

/**
 * Get the value of Id
 */
public function getId(): int
{
return $this->Id;
}

/**
 * Set the value of Id
 */
public function setId(int $Id): self
{
$this->Id = $Id;

return $this;
}

/**
 * Get the value of Places
 */
public function getPlaces(): int
{
return $this->Places;
}

/**
 * Set the value of Places
 */
public function setPlaces(int $Places): self
{
$this->Places = $Places;

return $this;
}

/**
 * Get the value of Accessibilite
 */
public function isAccessibilite(): bool
{
return $this->Accessibilite;
}

/**
 * Set the value of Accessibilite
 */
public function setAccessibilite(bool $Accessibilite): self
{
$this->Accessibilite = $Accessibilite;

return $this;
}

/**
 * Get the value of Nom
 */
public function getNom(): string
{
return $this->Nom;
}

/**
 * Set the value of Nom
 */
public function setNom(string $Nom): self
{
$this->Nom = $Nom;

return $this;
}
}