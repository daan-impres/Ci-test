<?php

class BlogControllerTest extends ControllerTestCase 
{
    /**
     * does an request to the detail action
     * checks if the code 200 is returned
     *
     * @return void
     */
    public function testDetailActionParam()
    {
        $this->getRequest()
            ->setParams(array('id' => '1'))
            ->setMethod('GET');

        $this->disPatch('/');
        $this->assertResponseCode(200);
    }     

    public function testCanCreateBlogItem()
    {}

    public function tearDown()
    {}
}
