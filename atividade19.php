<?php

$ultimo=1;
$pnultimo=0;
$fibonacci=0;

print"$pnultimo -";
print"$ultimo -";

while ($fibonacci <= 500) {

$fibonacci= $ultimo + $pnultimo;
print "$fibonacci -";
$pnultimo = $ultimo; 
$ultimo = $fibonacci;
}
