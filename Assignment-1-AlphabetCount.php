#! /usr/bin/env php
<?php
    echo "Enter a few words: ";
    $string = readline();
    $length = strlen($string);
    $cnt = 0;
    for($i=0; $i<$length; $i++){
        if (ctype_alpha($string[$i])) {
            $cnt++;
        }
    }
    echo $cnt;
?>