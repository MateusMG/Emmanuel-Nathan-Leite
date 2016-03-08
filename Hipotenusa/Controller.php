<?php
include "Math.php";
$math = new Math();
echo $math->calculateCircleArea($_POST["radius"]);
$math1 = new Math();
echo $math1->getHipotenusa($_POST["catetoAdj"]);
$math2 = new Math();
echo $math2->getHipotenusa($_POST["catetoOp"]);