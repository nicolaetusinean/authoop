<?php

class Database {
       
    protected $adress;
    
    protected $username;
    
    protected $password;
    
    protected $name;
    
      
    public function setAdress($adress) 
    {
        $this->adress = $adress;
        return $this;  
    }
    
    public function getAdress($adress)
    {
        return $this->$adress;
    }
    
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;  
    }
    
    public function getUsername($username)
    {
        return $this->$username;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;  
    }
    
    public function getPassword($password)
    {
        return $this->$password;
    }
    
    public function setFirstName($firstname) 
    {
        $this->firstname=$firstname;
        return $this;  
    }
    
    public function getFirstName($firstname)
    {
        return $this->$firstname;
    }
}

