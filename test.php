<?php

use exo\AdvancedString;
use exo\Point;

require_once('autoload.php');

// Exo 1
$message = new AdvancedString("Blablou");

echo $message->bold();
echo $message->italic();
echo $message->underline();
echo $message->upperCase();

// Exo 2

$p1 = new Point(6, 8);
$p2 = new Point(1, 7);

echo "P1 : " . $p1;
echo "P2 : " . $p2;
