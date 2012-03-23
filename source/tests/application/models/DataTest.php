<?php

require_once APPLICATION_PATH .'/models/Data.php';

class Model_DataTest extends ControllerTestCase
{
    /**
     * @var Model_Data
     */
    protected $_data;

    public function setUp()
    {
        parent::setUp();
        $this->_data = new Model_Data();
    }

    public function testcanAddItem()
    {
        $this->_data->addItem('test');
    }

    public function testcanClearItems()
    {
        $this->_data->addItem('test');
        $this->_data->clearItems();
        $this->assertEquals(count($this->_data->getItems()), 0);
    }
}
