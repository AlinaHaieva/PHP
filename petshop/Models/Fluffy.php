<?php
    trait Fluffy
    {
       public function isFluffy() {
           if ($this->type = "hamster") {
               return true;
           } elseif ($this->type = "cat" && $this->fluffiness > 6) {
               return true;
           } else {
               return false;
           }
       }
    }