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

function itemarray($mob)
{
    $items = [];
    if($mob['drop1_item'] != null)
    {
        $items[] = $mob['drop1_item'];
    }
    if($mob['drop2_item'] != null)
    {
        $items[] = $mob['drop2_item'];
    }
    if($mob['drop3_item'] != null)
    {
        $items[] = $mob['drop3_item'];
    }
    if($mob['drop4_item'] != null)
    {
        $items[] = $mob['drop4_item'];
    }
    if($mob['drop5_item'] != null)
    {
        $items[] = $mob['drop5_item'];
    }
    if($mob['drop6_item'] != null)
    {
        $items[] = $mob['drop6_item'];
    }
    if($mob['drop7_item'] != null)
    {
        $items[] = $mob['drop7_item'];
    }
    if($mob['drop8_item'] != null)
    {
        $items[] = $mob['drop8_item'];
    }
    if($mob['drop9_item'] != null)
    {
        $items[] = $mob['drop9_item'];
    }
    if($mob['drop10_item'] != null)
    {
        $items[] = $mob['drop10_item'];
    }
    return $items;
}

function droparray($mob)
{
    $drops = [];
    if($mob['drop1_item'] != null)
    {
        $drops[$mob['drop1_item']] = $mob['drop1_rate'];
    }
    if($mob['drop2_item'] != null)
    {
        $drops[$mob['drop2_item']] = $mob['drop2_rate'];
    }
    if($mob['drop3_item'] != null)
    {
        $drops[$mob['drop3_item']] = $mob['drop3_rate'];
    }
    if($mob['drop4_item'] != null)
    {
        $drops[$mob['drop4_item']] = $mob['drop4_rate'];
    }
    if($mob['drop5_item'] != null)
    {
        $drops[$mob['drop5_item']] = $mob['drop5_rate'];
    }
    if($mob['drop6_item'] != null)
    {
        $drops[$mob['drop6_item']] = $mob['drop6_rate'];
    }
    if($mob['drop7_item'] != null)
    {
        $drops[$mob['drop7_item']] = $mob['drop7_rate'];
    }
    if($mob['drop8_item'] != null)
    {
        $drops[$mob['drop8_item']] = $mob['drop8_rate'];
    }
    if($mob['drop9_item'] != null)
    {
        $drops[$mob['drop9_item']] = $mob['drop9_rate'];
    }
    if($mob['drop10_item'] != null)
    {
        $drops[$mob['drop10_item']] = $mob['drop10_rate'];
    }
    return $drops;
}