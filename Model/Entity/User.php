<?php

class User {
    
    protected $id;
    
    protected $firstname;
    
    protected $lastname;
    
    protected $city;
    
    protected $age;
    
    protected $username;
    
    protected $password;
    
    
    public function setId($id) {
        $this->$id=$id;
        return $this;  
    }
    
    public function getId($id) {
        return $this->$id;
    }
    
    public function setFirstName($firstname) {
        $this->$firstname=$firstname;
        return $this;  
    }
    
    public function getFirstName($firstname) {
        return $this->$firstname;
    }
    
    public function setLastName($lastname) {
        $this->$lastname=$lastname;
        return $this;  
    }
    
    public function getLastName($lastname) {
        return $this->$lastname;
    }
    
    public function setCity($city) {
        $this->$city=$city;
        return $this;  
    }
    
    public function getCity($city) {
        return $this->$city;
    }
    
    public function setAge($age) {
        $this->$age=$age;
        return $this;  
    }
    
    public function getAge($age) {
        return $this->$age;
    }
    
    public function setUsername($username) {
        $this->$username=$username;
        return $this;  
    }
    
    public function getUsername($username) {
        return $this->$username;
    }
    
    public function setPassword($password) {
        $this->$password=$password;
        return $this;  
    }
    
    public function getPassword($password) {
        return $this->$password;
    }
}

