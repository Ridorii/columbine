<?php
// This lesson is on classes.


/*class Bug {
    private $timesTouched;

    function __construct($times = 0) {
        $this->timesTouched = $times;
    }

    function Touch($times) {
        $this->timesTouched += $times;
    }

    function Check() {
        echo "bug touched ". $this->timesTouched ." times <Br />" ;
        echo "you monster <Br />";
    }

    function __destruct() {
        echo "bug shot up <Br />";
    }
}

$coolbug = new Bug();
$mombug = new Bug(80);

$coolbug->timesTouched = 10000000000;

$coolbug->Touch(5);
$mombug->Touch(3);

$coolbug->Check();
$mombug->Check();
*/
class Rectangle {
    private $length;
    private $width;

    function __construct($length = 0, $width = 0) {
        $this->length = $length ;
        $this->width = $width;
    }
    function Area() {
        $area = $this->length * $this->width; 
        return $area;
    }
    function Perim(){
        $perim = ($this->length + $this->width) * 2;
        return $perim;
    }
    function Diag(){
        $diag = sqrt(pow($this->length,2) + pow($this->width,2));
        return $diag;
    }
    function Check(){
        echo "Area is equal to <Br />". $this->Area() ."<Br />";
        echo "Perimeter is equal to <Br />". $this->Perim() ."<Br />";
        echo "Diagonal is equal to <Br />". $this->Diag() ."<Br />";
    }
}

$cunt = new Rectangle(20,30);
$boypussy = new Rectangle (40,50);

$cunt->Check();
$boypussy->Check();

?>