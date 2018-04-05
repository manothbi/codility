<?php
function solution($A) {
    // write your code in PHP7.0
    
    sort($A);
    
    for ($i = 0; $i < count($A); $i += 2) {
        if ($A[$i + 1] !== $A[$i]) {
            return $A[$i];
        }
    }
}
?>
