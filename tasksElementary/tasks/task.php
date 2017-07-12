<?php

abstract class Task
{
    protected $isValid;
    protected $outputAsString;

    abstract protected function run();
    abstract protected function validate();

    public function resolveAsString()
    {
        $this->validate();
        if ($this->isValid) {
            $this->run();
            return $this->outputAsString;
        }
    }
}
