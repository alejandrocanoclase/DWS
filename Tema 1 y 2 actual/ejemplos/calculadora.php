<?php
    function factorial($x){
        if($x == 0){
            return 1;
        }elseif($x > 0){
            $result = 0;
            while ($x > 0){
                $result = $result * $x;
                $x = $x -1;
            }
            return $result;
        }
    }