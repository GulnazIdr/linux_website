<?php
abstract class Figure {
    protected $area;
    protected $color;
    protected $sidesCount;
    
    abstract public function infoAbout(); /*2*/
} /*1*/

interface AreaCalculable { /*4*/
    public function getArea();
}

class Rectangle extends Figure implements AreaCalculable { /*3*/
    private $a; /*5*/
    private $b;
    private $SIDES_COUNT = 4; /*7*/
    
    public function __construct($a, $b) { /*8*/
        $this->a = $a;
        $this->b = $b;
        $this->sidesCount = $this->SIDES_COUNT;
    }
    
    public function getArea() {
        $this->area = $this->a * $this->b;
        return $this->area;
    }
    
    public function infoAbout() {
        return "прямоугольник: {$this->SIDES_COUNT} стороны.";
    } /*10*/
}

class Square extends Figure implements AreaCalculable {
    private $a; /*5*/
    private $SIDES_COUNT = 4;
    
    public function __construct($a) {
        $this->a = $a;
        $this->sidesCount = $this->SIDES_COUNT;
    }
    
    public function getArea() {
        $this->area = $this->a * $this->a;
        return $this->area;
    }
    
    public function infoAbout() {
        return "квадрат: {$this->SIDES_COUNT} стороны.";
    }
}

class Triangle extends Figure implements AreaCalculable {
    private $a; /*6*/
    private $b;
    private $c;
    private $SIDES_COUNT = 3;
    
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->sidesCount = $this->SIDES_COUNT;
    }
    
    public function getArea() {
        $s = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
        return $this->area;
    }
    
    public function infoAbout() {
        return "треугольник: {$this->SIDES_COUNT} стороны.";
    }
}

$rect1 = new Rectangle(5, 10); /*11*/
$rect2 = new Rectangle(7, 8);

echo $rect1->infoAbout() . "<br>";
echo "площадь прямоугольника 5x10: " . $rect1->getArea() . "<br><br>"; /*12*/

echo $rect2->infoAbout() . "<br>";
echo "площадь прямоугольника 7x8: " . $rect2->getArea() . "<br><br>";

$square1 = new Square(4);
$square2 = new Square(6);

echo $square1->infoAbout() . "<br>";
echo "площадь квадрата 4x4: " . $square1->getArea() . "<br><br>";

echo $square2->infoAbout() . "<br>";
echo "площадь квадрата 6x6: " . $square2->getArea() . "<br><br>";

$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(5, 5, 6);

echo $triangle1->infoAbout() . "<br>";
echo "площадь треугольника 3,4,5: " . $triangle1->getArea() . "<br><br>";

echo $triangle2->infoAbout() . "<br>";
echo "площадь треугольника 5,5,6: " . $triangle2->getArea() . "<br><br>";
?>
