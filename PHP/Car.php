<?php

class Car
{
    private $id;
    private $_license;
    private $_driver;
    private $_passegenger;

    public function __construct($license, $driver, $passegenger)
    {
        $this->_license = $license;
        $this->_driver = $driver;
        $this->_passegenger = $passegenger;
    }
}