<?php

class BlogControllerTest extends ControllerTestCase 
{
    public function testDetailActionParam()
    {
        $this->getRequest()
            ->setParams(array('id' => '1'))
            ->setMethod('GET');

        $this->disPatch('/');
        $this->assertResponseCode(200);
    }     
}
