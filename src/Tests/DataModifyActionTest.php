<?php

namespace Thruster\Action\DataModifierActions\Tests;

use Thruster\Action\DataModifierActions\DataModifyAction;

/**
 * Class DataModifyActionTest
 *
 * @package Thruster\Action\DataModifierActions\Tests
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataModifyActionTest extends \PHPUnit_Framework_TestCase
{
    public function testAction()
    {
        $input = new \stdClass();

        $action = new DataModifyAction('demo', $input);

        $executor = $this->getMock('\Thruster\Component\Actions\Executor');

        $this->assertSame('thruster_data_modifier_modify', $action->getName());
        $this->assertEquals(['demo', $input], $action->parseArguments($executor));
    }

    public function testActionMoreArguments()
    {
        $action = new DataModifyAction('demo', 'demo', 'demo', 'demo');
        $executor = $this->getMock('\Thruster\Component\Actions\Executor');

        $this->assertSame('thruster_data_modifier_modify', $action->getName());
        $this->assertEquals(['demo', 'demo'], $action->parseArguments($executor));
    }
}
