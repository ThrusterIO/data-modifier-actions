<?php

namespace Thruster\Action\DataModifierActions\Tests;

use Thruster\Action\DataModifierActions\DataModifyActionExecutor;

/**
 * Class DataModifyActionExecutorTest
 *
 * @package Thruster\Action\DataModifierActions\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataModifyActionExecutorTest extends \PHPUnit_Framework_TestCase
{
    public function testSupportedAction()
    {
        $this->assertSame('thruster_data_modifier_modify', DataModifyActionExecutor::getSupportedAction());
    }
    
    public function testExecute()
    {
        $input = new \stdClass();
        $arguments = ['demo', $input];

        $group = $this->getMock('\Thruster\Component\DataModifier\DataModifierGroup');
        $group->expects($this->once())
            ->method('modify')
            ->with($input)
            ->willReturn($input);

        $groups = $this->getMock('\Thruster\Component\DataModifier\DataModifierGroups');
        $groups->expects($this->once())
            ->method('getGroup')
            ->with('demo')
            ->willReturn($group);

        $executor = new DataModifyActionExecutor($groups);
        $this->assertEquals($input, $executor->execute($arguments));
    }
}
