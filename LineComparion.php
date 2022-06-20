<?php
echo "..... Welcome to Line Comparison Computation Program .......\n ";

$x1 =readline('Enter the value of x1: ');
$x2 =readline('Enter the value of x2: ');
$y1 =readline('Enter the value of y1: ');
$y2 =readline('Enter the value of y2: ');

function lineComp($x1,$x2,$y1,$y2){
$LengthOfLine = sqrt(pow(($x2-$x1),2)+ pow(($y2-$y1),2));
echo "The length of the line is ". $LengthOfLine;
}
lineComp($x1,$x2,$y1,$y2);
?>