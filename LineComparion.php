<?php
class LineComparision{
    function welcomeMsg(){
        echo "..... Welcome to Line Comparison Computation Program .......\n ";
    }
    public $x1, $x2, $y1, $y2 ;

function readValue (){
   $this-> x1 =readline('Enter the value of x1: ');
   $this-> x2 =readline('Enter the value of x2: ');
   $this-> y1 =readline('Enter the value of y1: ');
   $this-> y2 =readline('Enter the value of y2: ');
}
function lineComp(){
    $lengthOfline = sqrt(pow(($this->x2-$this->x1),2)+ pow(($this->y2-$this->y1),2));
    return $lengthOfline;
}

public function comparingLength($lengthOfline1, $lengthOfline2){
    if($lengthOfline1 == $lengthOfline2){
        echo "Both lines are equal \n";
    }else if ($lengthOfline1 > $lengthOfline2){
        echo "Line1 is greater than Line2 \n ";  
    }else {
        echo "Line2 is greater than Line2";
    }
}

}

$line =new LineComparision();
$line->welcomeMsg();

$lengthOfline1 =$line->readValue();
echo "input values for line 1\n";
$lengthOfline1 = $line->lineComp();   
echo "Length of the line $lengthOfline1 \n";

$lengthOfline2 =$line->readValue();
echo "input values for line Line2\n";
$lengthOfline2 = $line->lineComp();   
echo "Length of the line $lengthOfline2 \n";
$line->comparingLength($lengthOfline1, $lengthOfline2);
