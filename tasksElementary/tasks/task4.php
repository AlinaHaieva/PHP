<?php
    function happyTicket($value){
        while (strlen($value)<6){
            $value ='0'.$value ;
        }
        for($i = $value; $i <= 999999; $i++){
            $num = (string)$i;
            $count;
            $isNumbersEqual = $num[0]+$num[1]+$num[2] === $num[3]+$num[4]+$num[5];
            if($isNumbersEqual){
                $count++;
            }
        }
        return 'Всего счастливых: ' . $count;
    }
