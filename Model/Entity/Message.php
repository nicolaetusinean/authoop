<?php

class Message {
    
    protected $text;
    
    protected $sender;
    
    protected $recipient;
    
    protected $data;
    
      
    public function setText($text)
    {
        $this->text = $text;
        return $this;  
    }
    
    public function getText($text) 
    {
        return $this->text;
    }
    
    public function setSender($sender) 
    {
        $this->sender = $sender;
        return $this;  
    }
    
    public function getSender($sender)
    {
        return $this->sender;
    }
    
    public function setRecipient($recipient)
    {
        $this->text = $recipient;
        return $this;  
    }
    
    public function getRecipient($recipient)
    {
        return $this->recipient;
    }
    
    public function setData($data) 
    {
        $this->text = $data;
        return $this;  
    }
    
    public function getData($data)
    {
        return $this->data;
    }
}
