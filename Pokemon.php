<?php

class Pokemon
{
    # Attributs
    private int $id;
    private int $number;
    private string $name;
    private string $image;
    private string $type1;
    private string $type2;

    # Méthodes
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key); // setId, setNumber, setName, etc.
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
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

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
