<!-- xml chapter , Question 2-->


<?php
class point {
    private $x;
    private $y;
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
}
class Circle extends point
{
    private $radius;

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function __toString()
    {
        return "Circle : radius".$this->getRadius().",\tx:".$this->getX().",\t y:".$this->getY()."\n";
    }
}
    $circle=new Circle();
    $circle->setRadius(5);
    $circle->setX(0);
    $circle->setY(5);
    echo $circle
?>