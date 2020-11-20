<?php
$n = 100;
$q = 4;
$p = array();

function escreve($p)
{
    print_r($p);
}
function comb($np, $t)
{
    global $n, $q, $p;

    for ($i = $t; $i <= $n; $i++) {
        $p[$np] = $i;
        if ($np == $q) {
            escreve($p);
        } else {
            comb($np + 1, $i + 1);
        }
    }
}


comb(1, 1);
