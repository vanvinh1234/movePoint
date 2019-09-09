<?php
include_once ("Point.php");
include_once ("MovablePoint.php");
$point = new Point(5,6);
$point ->toString();

$movAblePoint = new MovablePoint(5,6,9.5,10.5);
$movAblePoint->getSpeed();
echo '<br>';
echo $movAblePoint->toString().'<br>';
echo $movAblePoint->move();
