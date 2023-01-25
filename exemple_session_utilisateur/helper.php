<?php

function is_existe(string $str) : bool
{
    return isset($str) && !empty($str);
}