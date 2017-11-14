<?php

class Movie
{
    private $name = null;
    private $desc = "Une description";
    private $duration = 125;
    
    public function __construct($name = "")
    {
        $this->name = $name;
    }
    
    public function getName() 
    {
        return $this->name;
    }   
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
}

$movie = new Movie;

echo $movie->getName();
$movie->setName("Patate");
echo$movie->getName();
