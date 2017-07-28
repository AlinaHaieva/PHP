<?php

require_once "Worker.php";
require_once "IITWorker.php";

class HardSpecialist extends Worker implements IITWorker
{
    public function doITWork() {
        return "doing work";
    }
}
