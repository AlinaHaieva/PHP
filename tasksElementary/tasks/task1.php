<?php
require_once "task.php";
class Chess extends Task
{
    public $width;
    public $height;
    public $symbol;

    protected $isValid;
    protected $outputAsString;

    public function __construct($width,$height,$symbol)
    {
        $this->width = $width;
        $this->height = $height;
        $this->symbol = $symbol;
    }

    protected function validate()
    {
        if (!is_int($this->width) && !is_int($this->height)) {
            return "status: failed, reason: parametrs should be integer.";
        } elseif ($this->width <= 0 || $this->height <= 0) {
            return "status: failed, reason: parametrs should be greater then 0.";
        } elseif (!$this->symbol) {
            return "status: failed, reason: symbol should be specified.";
        } else {
            return $this->isValid = true;
        }
    }

    private function createChessBoard()
    {
        $outputAsString = "";

        for ($i = 0; $i < $this->height; $i++){
            $outputChessAsString = "";
            for ($j = 0; $j < $this->width*2; $j++){
                if ($i % 2 === 0){
                    $outputChessAsString .= $this->symbol . " ";
                } else {
                    $outputChessAsString .= " " . $this->symbol;
                }
                $outputAsString = $outputChessAsString . "\n";
            }
            echo $outputAsString;
        }
    }

    protected function run()
    {
       return $this->createChessBoard();
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
$obj = new Chess(5,6,"*");
echo $obj->resolveAsString();
*/
