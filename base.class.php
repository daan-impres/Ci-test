<?php

class testClass 
{
    protected $_param;

    public function __construct()
    {}

    /**
     * Gets the param parameter
     *
     * @param   string  $param
     * @return  string 
     */
    public function getParam($param)
    {
        return $this->_param;
    }

    /**
     * Sets the param within this class
     *
     * @param  string   $param
     * @return void 
     */
    public function setParam($param)
    {
        $this->_param = $param;
    }
}
