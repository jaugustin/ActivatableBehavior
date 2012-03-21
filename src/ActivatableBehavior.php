<?php

/**
 * This file is designed for a Propel use.
 *
 * @license    CC BY 3.0  <creativecommons.org/licenses/by/3.0/>
 */

/**
 * @author     Clément Gautier <clement.gautier.76@gmail.com>
 * @package    propel.generator.behavior
 */
class ActivatableBehavior extends Behavior
{
    protected $parameters = array(
        'column_name'   => 'is_active',
        'default_value' => true,
    );

    /**
     * @see Behavior
     */
    public function modifyTable()
    {
        $table      = $this->getTable();
        $columnName = $this->getParameter('column_name');

        if (!$this->getTable()->containsColumn($columnName)) {
            $column = $this->getTable()->addColumn(
                array(
                    'name'         => $columnName,
                    'type'         => 'BOOLEAN',
                    'defaultValue' => $this->getParameter('default_value'),
                )
            );
        }
    }
}
