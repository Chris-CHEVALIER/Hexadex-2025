<?php

class Pokemon
{
    # Attributs
    private int $number;
    private string $name;
    private string $image;
    private string $type1;
    private string $type2;

    # Méthodes

    public function __construct(int $number, string $name, string $image, string $type1, string $type2 = "")
    {
        $this->setNumber($number);
        $this->setName($name);
        $this->setImage($image);
        $this->setType1($type1);
        $this->setType2($type2);
    }

    public function attack(Pokemon $target): void
    {
        echo "Le Pokémon attaque " . $target->name . ".";
    }

    public function rename(string $newName): void
    {
        $this->name = $newName;
    }

    /**
     * Get the value of number
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of type1
     */
    public function getType1(): string
    {
        return $this->type1;
    }

    /**
     * Set the value of type1
     */
    public function setType1(string $type1): self
    {
        $this->type1 = $type1;

        return $this;
    }

    /**
     * Get the value of type2
     */
    public function getType2(): string
    {
        return $this->type2;
    }

    /**
     * Set the value of type2
     */
    public function setType2(string $type2): self
    {
        $this->type2 = $type2;

        return $this;
    }
}