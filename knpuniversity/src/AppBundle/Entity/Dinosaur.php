<?php

namespace AppBundle\Entity;

class Dinosaur
{
    private $length = 0;
    private $genus;
    private $isCarnivorous;

    /**
     * Dinosaur constructor.
     * @param string $genus
     * @param bool $isCarnivorous
     */
    public function __construct(string $genus = 'Unknown', bool $isCarnivorous = false)
    {
        $this->genus = $genus;
        $this->isCarnivorous = $isCarnivorous;
    }

    public function getLength(): int 
    {
        return $this->length;
    }

    public function setLength(int $length)
    {
        $this->length = $length;
    }

    public function getSpecification(): string
    {
        return sprintf(
            'The %s %scarnivorous dinosaur is %d meters long',
            $this->genus,
            $this->isCarnivorous ? '' : 'non-',
            $this->length
        );
    }
}