<?php
         $a = array(45, 20, 50, 80, 120);
        $b = 0;
        foreach ($a as $key => $val) {
            if ($val > $b) {
                $b = $val;
        }
    }
    echo "Among above Maximum number is $b";
        ?>
