<?php
require  __dir__.'/../vendor/autoload.php';
use \Index\Index;
use \PHPUnit\Framework\TestCase;

class IndexTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {}

    /**
     * @dataProvider additionProviderIndex
     */
    public function testIndex($a,$b)
    {
        $index = new Index();
        $result = $index->index($a,$b);
        $this->assertSame(true,$result);
    }

    public function testTest()
    {
        $index = new Index();
        $result = $index->test();
        $this->assertSame(true,$result);
    }

    //数据供给器
    public function additionProviderIndex()
    {
        return [
            [1,1],
            [2,8],
            [3,5],
            [8,8]
        ];
    }
}
