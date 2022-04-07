<?php
function somme (...$args)
{
    $som=0;
    foreach ($args as $values)
    {
        $som+=$values;
    }
    return $som;


}

