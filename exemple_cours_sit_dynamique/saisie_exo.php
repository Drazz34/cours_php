<?php

foreach ($_POST as $key => $value) {
    if(is_array($value))  // ou if(gettype($value) == "array")
    {
        foreach ($value as $key1 => $value1) {
            echo "$key1 = $value1 <br>";
        }
    } else 
    {
        echo "$key = $value <br>";
    }
}