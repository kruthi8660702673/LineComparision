<?php
echo "..... Welcome to Line Comparison Computation Program .......\n ";

$x1 =readline('Enter the value of x1: ');
$x2 =readline('Enter the value of x2: ');
$y1 =readline('Enter the value of y1: ');
$y2 =readline('Enter the value of y2: ');

$x3 =readline('Enter the value of x3: ');
$x4 =readline('Enter the value of x4: ');
$y3 =readline('Enter the value of y3: ');
$y4 =readline('Enter the value of y4: ');
function lineComp($x1,$x2,$y1,$y2,$x3,$x4,$y3,$y4){
$LengthOfLine1 = sqrt(pow(($x2-$x1),2)+ pow(($y2-$y1),2));
echo "The length of the line is ". $LengthOfLine1 . "\n";
$LengthOfLine2 = sqrt(pow(($x4-$x3),2)+ pow(($y4-$y3),2));
echo "The length of the line is ". $LengthOfLine2 . "\n";
if($LengthOfLine1 == $LengthOfLine2){
    echo "Both lines are equal \n";
}else if ($LengthOfLine1 > $LengthOfLine2){
    echo "Line1 is greater than Line2 \n ";  
}else {
    echo "Line2 is greater than Line2";
}
}
lineComp($x1,$x2,$y1,$y2,$x3,$x4,$y3,$y4);
?>