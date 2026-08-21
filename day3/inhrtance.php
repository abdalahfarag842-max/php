<?php
// trait CircleTrait {
//     private $radius = 1.0;
//     private $color = "red";

//     public function getRadius(): float {
//         return $this->radius;
//     }

//     public function setRadius($radius): void {
//         $this->radius = $radius;
//     }

//     public function getColor(): string {
//         return $this->color;
//     }

//     public function setColor($color): void {
//         $this->color = $color;
//     }

//     public function getArea(): float {
//         return M_PI * pow($this->radius, 2);
//     }

//     public function circleToString(): string {
//         return "Circle[radius={$this->radius},color={$this->color}]";
//     }
// }

// class Cylinder {
//     use CircleTrait;

//     private float $height = 1.0;

//     public function __construct($radius = 1.0, $height = 1.0, $color = "red") {
//         $this->setRadius($radius);
//         $this->setHeight($height);
//         $this->setColor($color);
//     }

//     public function getHeight(): float {
//         return $this->height;
//     }

//     public function setHeight($height): void {
//         $this->height = $height;
//     }

//     public function getVolume(): float {
//         return $this->getArea() * $this->height;
//     }

//     public function toString(): string {
//         return "Cylinder[" . $this->circleToString() . ",height={$this->height}]";
//     }
// }  

// --------------------------------------------

abstract class Person
{
    private $name;
    private $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    abstract public function __toString();
}

class Student extends Person
{
    private $program;
    private $year;
    private $fee;

    public function __construct($name, $address, $program, $year, $fee)
    {
        parent::__construct($name, $address);

        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram()
    {
        return $this->program;
    }

    public function setProgram($program)
    {
        $this->program = $program;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getFee()
    {
        return $this->fee;
    }

    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    public function __toString()
    {
        return "Student[Person[name={$this->getName()},address={$this->getAddress()}],program={$this->program},year={$this->year},fee={$this->fee}]";
    }
}

class Staff extends Person
{
    private $school;
    private $pay;

    public function __construct($name, $address, $school, $pay)
    {
        parent::__construct($name, $address);

        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setSchool($school)
    {
        $this->school = $school;
    }

    public function getPay()
    {
        return $this->pay;
    }

    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    public function __toString()
    {
        return "Staff[Person[name={$this->getName()},
                address={$this->getAddress()}],
                school={$this->school},pay={$this->pay}]";
    }
}