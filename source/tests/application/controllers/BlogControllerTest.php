<?php

class BlogControllerTest extends ControllerTestCase 
{
    /**
     * does an request to the detail action
     * checks if the code 200 is returned
     *
     * @return void
     */
    public function testDetailAction()
    {
        $this->getRequest()
            ->setParams(array('id' => '2'))
            ->setMethod('GET');
        $this->disPatch('/blog/detail/');

        $this->assertResponseCode(200);
    }     

    /**
     * Checks if the index page can be loaded
     *
     * @return void
     */
    public function testIndexAction()
    {}
}
