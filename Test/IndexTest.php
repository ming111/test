<?php
require  __dir__.'/../vendor/autoload.php';
use \Index\Index;
use \PHPUnit\Framework\TestCase;

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
