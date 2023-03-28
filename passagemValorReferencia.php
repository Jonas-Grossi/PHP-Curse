<?php
//operador & para passagem por referencia
function soma(&$numA, $numB)
{
    $numA += $numB;
}
