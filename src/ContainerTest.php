<?php
/**
 * Created by PhpStorm.
 * User: mylxsw
 * Date: 14/12/12
 * Time: 00:42
 */

namespace RebirthTest;


use Rebirth\Container;

class ContainerTest extends \PHPUnit_Framework_TestCase {

    private $_container;

    public function setUp()
    {
        $this->_container = new Container();
    }

    /**
     * 测试基本对象
     *
     * @return void
     */
    public function testBasicObject()
    {
        $this->assertInstanceOf('\Rebirth\Configure', $this->_container->getConfigure());
        $this->assertInstanceOf('\Rebirth\Factory', $this->_container->getFactory());
    }

}
 