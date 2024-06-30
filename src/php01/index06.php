<?php 
function getSquareArea($base, $height) {
    return $base * $height;
}

function getTriangleArea($base, $height) {
    return $base * $height / 2;
}

function getTrapezoidArea($upperBase, $lowerBase, $height) {
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getTriangleArea(5, 5)."<br>";
echo getSquareArea(4, 4)."<br>";
echo getTrapezoidArea(3, 5, 9);
