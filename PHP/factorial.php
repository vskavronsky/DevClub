<?php
    function factorial($n) {
        if ( $n <= 1 ) {
            if ( $n < 0 ) {
                return -1;
            }
            return 1;
        }
        return factorial($n-1) * $n;
    }
    
    $val = fgets(STDIN);
    echo factorial($val) . PHP_EOL;
?>
