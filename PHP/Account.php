<?php

class Account
{
    public $id;
    private $name;
    private $document;
    private $email;
    private $password;
    
    public function __construct($name, $document, $email, $password)
    {
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }


}