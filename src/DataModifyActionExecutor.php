<?php

namespace Thruster\Action\DataModifierActions;

use Thruster\Component\Actions\ActionExecutorInterface;
use Thruster\Component\DataModifier\DataModifierGroups;

/**
 * Class DataModifyActionExecutor
 *
 * @package Thruster\Action\DataModifierActions
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class DataModifyActionExecutor implements ActionExecutorInterface
{
    /**
     * @var DataModifierGroups
     */
    protected $dataModifierGroups;

    public function __construct(DataModifierGroups $dataModifierGroups)
    {
        $this->dataModifierGroups = $dataModifierGroups;
    }

    /**
     * @inheritDoc
     */
    public function execute(array $arguments)
    {
        $groupName = reset($arguments);
        $input = end($arguments);

        return $this->dataModifierGroups->getGroup($groupName)->modify($input);
    }

    /**
     * @inheritDoc
     */
    public static function getSupportedAction() : string
    {
        return 'thruster_data_modifier_modify';
    }
}
