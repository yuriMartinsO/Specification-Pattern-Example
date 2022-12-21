<?php

namespace SpecificationExample\Notebook;

class Notebook
{
    /**
     * @var float
     */
    private $weight;

    /**
     * @var int
     */
    private $ramMemory;

    /**
     * @var float
     */
    private $diskSize;

    /**
     * @var int
     */
    private $releaseYear;

    /**
     * @var float
     */
    private $price;

    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of releaseYear
     *
     * @return  int
     */ 
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * Set the value of releaseYear
     *
     * @param  int  $releaseYear
     *
     * @return  self
     */ 
    public function setReleaseYear(int $releaseYear)
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    /**
     * Get the value of weight
     *
     * @return  float
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @param  float  $weight
     *
     * @return  self
     */ 
    public function setWeight(float $weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of ramMemory
     *
     * @return  int
     */ 
    public function getRamMemory()
    {
        return $this->ramMemory;
    }

    /**
     * Set the value of ramMemory
     *
     * @param  int  $ramMemory
     *
     * @return  self
     */ 
    public function setRamMemory(int $ramMemory)
    {
        $this->ramMemory = $ramMemory;

        return $this;
    }

    /**
     * Get the value of diskSize
     *
     * @return  float
     */ 
    public function getDiskSize()
    {
        return $this->diskSize;
    }

    /**
     * Set the value of diskSize
     *
     * @param  float  $diskSize
     *
     * @return  self
     */ 
    public function setDiskSize(float $diskSize)
    {
        $this->diskSize = $diskSize;

        return $this;
    }
}
