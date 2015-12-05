<?php

namespace Thruster\Action\DataModifierActions;

use Thruster\Component\Actions\Action\BaseAction;

/**
 * Class DataModifyAction
 *
 * @package Thruster\Action\DataModifierActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataModifyAction extends BaseAction
{
    /**
     * @param string $groupName
     * @param mixed  $input
     */
    public function __construct(string $groupName, $input)
    {
        parent::__construct($groupName, $input);
    }

    /**
     * @inheritDoc
     */
    public function getName() : string
    {
        return 'thruster_data_modifier_modify';
    }
}
