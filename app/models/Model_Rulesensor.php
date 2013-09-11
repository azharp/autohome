<?php

/**
 * Object model mapping for relational table `guest`
 */
class Model_Rulesensor extends RedBean_SimpleModel
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
        $this->name = $this->sensor->name;
        $this->port = $this->sensor->port;
    }
}