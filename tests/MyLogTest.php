<?php
use Semenov\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider provideLog
     */
    public function testLog($str)
    {
        $this->assertEquals('',  MyLog::log($str));
    }
    public function providerLog ()
    {
        return array (
            array ("gncvncvn"),
            array ("cvncvn"),
            array (6334634),
            array (false),
        );
    }
    public function testLogTypeError()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  MyLog::log(null));
        $this->assertEquals('',  MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',  MyLog::write("asd"));
        $this->assertEquals('',  MyLog::write());
    }
}
