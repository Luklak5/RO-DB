<?php

function NHandler($a)
{
    if($a == null)
    return 0;
    else
    return $a;
}

function rate($a)
{
    $b = $a / 100;
    $b = number_format($b, 2, ".","") . "%";
    return $b;
}

function skillname($a)
{
    $rem = stripos($a, "@");
    $b = substr($a, $rem +1);
    return $b;
}

function lootslot($a, $b)
{
    if($a == null)
        $s =  "---";
    else
        $s = $a . ": " . rate($b);
    return $s;
}


function getId($a)
{
    $rem = stripos($a, "=");
    $b = substr($a, $rem +1);
    return $b;
}