<?php
require 'classe-1.php';
require 'classe-2.php';

use classe1\MinhaClasse;
use classe2\MinhaClasse as MinhaClasse2;

$uso = new MinhaClasse();
echo $uso->teste();

$uso2 = new MinhaClasse2();
echo $uso2->teste();