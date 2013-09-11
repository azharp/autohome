<?php

/**
 * Object model mapping for relational table `guest`
 */
class Model_Device extends RedBean_SimpleModel
{
    // lifecycle hooks
    public function dispense()
    {
//        $this->modified = time();
    }

    public function update()
    {
        $this->modified = time();
    }

    public function open()
    {
        $this->sharedRuletimer;
        $this->sharedRulesensor;
    }
}