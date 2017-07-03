<?php
require_once '../Index.php';
class IndexTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {}

    public function testIndex()
    {
        $index = new Index();
        $result = $index->index();
        $this->assertSame(true,$result);
    }

    public function testTest()
    {
        $index = new Index();
        $result = $index->test();
        $this->assertSame(true,$result);
    }
}
