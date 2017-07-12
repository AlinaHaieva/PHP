<?php
require_once "task.php";
class Envelope extends Task
{
    private $firstEnvelope;
    private $secondEnvelope;

    public $side1;
    public $side2;

    function __construct($side1,$side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    protected function validate()
    {
        if ($this->side1 <= 0 || $this->side2 <= 0) {
            return "status: failed, reason: parametrs should be greater then 0.";
        } else {
            return $this->isValid = true;
        }
    }

    function checkEnvelopeNesting($firstEnvelope, $secondEnvelope)
    {
        $outputAsString = "";

        $isNestingSecondInFirstEnvelope = (($firstEnvelope->side1) > ($secondEnvelope->side1)) and (($firstEnvelope->side2) > ($secondEnvelope->side2)) or (($firstEnvelope->side1) > ($secondEnvelope->side2)) and (($firstEnvelope->side2) > ($secondEnvelope->side1));

        $isNestingFirstInSecondEnvelope = (($firstEnvelope->side1) < ($secondEnvelope->side1)) and (($firstEnvelope->side2) < ($secondEnvelope->side2)) or (($firstEnvelope->side1) < ($secondEnvelope->side2)) and (($firstEnvelope->side2) < ($secondEnvelope->side1));

        if ($isNestingSecondInFirstEnvelope) {
            $nestedSmallerEnvelope = "2";
        } elseif ($isNestingFirstInSecondEnvelope) {
            $nestedSmallerEnvelope = "1";
        } else {
            $nestedSmallerEnvelope = "0";
        }
        $outputAsString = $nestedSmallerEnvelope;
        return $outputAsString;
    }

    public function run()
    {
       return true;
    }

    public function resolveAsString()
    {
        $this->validate();
        if ($this->isValid) {
            $this->run();
        }
        return $this->outputAsString;
    }
}

/*
    $env1 = new Envelope(10,10.5);
    $env2 = new Envelope(6,8);
    echo $env2->checkEnvelopeNesting($env1, $env2);
*/
