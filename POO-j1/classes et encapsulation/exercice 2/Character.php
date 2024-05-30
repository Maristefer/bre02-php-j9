<?php

class Character 
{
    
    public function __construct(private int $id, private string $firstName = "Jane",private string $lastName = "Doe")
    {
        
    }
     
    public function getId() : int 
    {
        return $this->id;
    }
    
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    
    public function getFirstName() : string 
    {
        return $this->fisrtName;
    }
    
    public function setFirstName(string $firstname) : void
    {
        $this->firstName = $firstName;
    }
    
     public function getLastName() : string 
    {
        return $this->lastName;
    }
    
    public function setLastName(string $lastname) : void
    {
        $this->lastName = $lastName;
    }
    
    //permet de recupérer le nom complet du personnage
    public function getFullName() : stirng 
    {
        return $this->firstName . " " . $this->lastName;
    }
}