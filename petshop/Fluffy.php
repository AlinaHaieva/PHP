<?php
    trait Fluffy {
       public function isFluffy() {
           if ($this->fluffiness > 6) {
               return true;
           } else {
               return false;
           }
       }
    }