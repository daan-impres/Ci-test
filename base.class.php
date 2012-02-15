<?php

class testClass 
{
    protected $_param;

    public function __construct()
    {}

    public function getParam($param)
    {
        return $this->_param;
    }

    public function setParam($param)
    {
        $this->_param = $param;
    }
}
