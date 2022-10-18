<?php

class Account
{
    public $id;
    private $_name;
    private $_document;
    private $_email;
    private $_password;
    
    public function __construct($name, $document, $email, $password)
    {
        $this->_name = $name;
        $this->_document = $document;
        $this->_email = $email;
        $this->_password = $password;
    }

    
}