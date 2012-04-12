<?php 

class BlogTest extends DatabaseTestCase
{ 


    /** 
     * Gets the dataset and inserts it into the database
     *
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet 
     */ 
    protected function getDataset() 
    {
        // Since the database will be truncated before the tests are executed  
        // we will have to insert some testdata 
        return $this->createFlatXmlDataSet( 
            dirname(dirname(dirname(__FILE__))) .'/files/blogSeed.xml' 
        ); 
    } 

    /**
     * Checks if an row can be inserted trough the model
     *
     * @return void
     */
    public function testBlogInsert()
    {
        $blogModel = new Application_Model_DbTable_Blog();
        $data = array(
            'title' => 'woei',
            'text' => 'dit is text',
            'date_created' => '2007-04-01 00:00:00' 
        );
 
        $blogModel->insert($data);
 
        $ds = new Zend_Test_PHPUnit_Db_DataSet_DbTableDataSet();
        $ds->addTable($blogModel);

        $assertion = $this->createFlatXmlDataSet(
            dirname(dirname(dirname(__FILE__)))
            ."/files/blogInsertIntoAssertion.xml"
        );

        $this->assertDataSetsEqual(
            $assertion, $ds
        );
    }

    /** 
     * Checks if the table is updateble trough the model
     *
     * @return void
     */
    public function testBlogCanUpdate()
    {
        $blogModel = new Application_Model_DbTable_Blog();
        $where = $blogModel->getAdapter()->quoteInto('id = ?', '1');

        $ds = new Zend_Test_PHPUnit_Db_DataSet_QueryDataSet(
            $this->getConnection()
        );

        $data = array(
            'title' => 'woeiedit',
        );

        $blogModel->update($data, $where);

        $ds = new Zend_Test_PHPUnit_Db_DataSet_DbTableDataSet();
        $ds->addTable($blogModel);

        $assertion = $this->createFlatXmlDataSet(
            dirname(dirname(dirname(__FILE__)))
            ."/files/blogUpdateAssertion.xml"
        );

        $this->assertDataSetsEqual(
            $assertion, $ds
        );
    }

    /**
     * Checks if an row can be deleted
     *
     * @return void
     */
    public function testCanDelete()
    {
        $blogModel = new Application_Model_DbTable_Blog();
        $where = $blogModel->getAdapter()->quoteInto('id = ?', '1');

        $ds = new Zend_Test_PHPUnit_Db_DataSet_QueryDataSet(
            $this->getConnection()
        );

        $blogModel->delete($where);

        $ds = new Zend_Test_PHPUnit_Db_DataSet_DbTableDataSet();
        $ds->addTable($blogModel);

        $assertion = $this->createFlatXmlDataSet(
            dirname(dirname(dirname(__FILE__)))
            ."/files/blogDeleteAssertion.xml"
        );

        $this->assertDataSetsEqual(
            $assertion, $ds
        );
    }
}
