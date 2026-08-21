<?php

// class Circle
// {
//     private $radius = 1.0;
//     private $color = "red";

//     function __construct($color, $radius)
//     {
//         $this->color = $color;
//         $this->radius = $radius;
//     }
//     function setRadius($radius){

//         $this->radius = $radius;

//     }
//     function setColor($color){

//         $this->color = $color;

//     }

//     function getRadius()
//     {
//         return $this->radius;
//     }

//     function getArea()
//     {
//         return $this->radius * $this->radius * 3.14;
//     }
// }

// ---------------------------------------------------

// class Employee {
//     private int $id;
//     private string $firstName;
//     private string $lastName;
//     private int $salary;

//     public function __construct(int $id, string $firstName, string $lastName, int $salary) {
//         $this->id = $id;
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//         $this->salary = $salary;
//     }

//     public function getId(): int {
//         return $this->id;
//     }

//     public function getFirstName(): string {
//         return $this->firstName;
//     }

//     public function getLastName(): string {
//         return $this->lastName;
//     }

//     public function getName(): string {
//         return $this->firstName . ' ' . $this->lastName;
//     }

//     public function getSalary(): int {
//         return $this->salary;
//     }

//     public function setSalary(int $salary): void {
//         $this->salary = $salary;
//     }

//     public function getAnnualSalary(): int {
//         return $this->salary * 12;
//     }

//     public function raiseSalary(int $percent): int {
//         $this->salary += ($this->salary * ($percent / 100));
//         return $this->salary;
//     }

//     public function toString(): string {
//         return "Employee[id={$this->id},name={$this->getName()},salary={$this->salary}]";
//     }
//     }
// }

// ------------------------------------

// class Rectangle {
//     private float $length;
//     private float $width;

//     public function __construct(float $length = 1.0, float $width = 1.0) {
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function getLength(): float {
//         return $this->length;
//     }

//     public function setLength(float $length): void {
//         $this->length = $length;
//     }

//     public function getWidth(): float {
//         return $this->width;
//     }

//     public function setWidth(float $width): void {
//         $this->width = $width;
//     }

//     public function getArea(): float {
//         return $this->length * $this->width;
//     }

//     public function getPerimeter(): float {
//         return 2 * ($this->length + $this->width);
//     }

//     public function toString(): string {
//         return "Rectangle[length={$this->length},width={$this->width}]";
//     }
// }
// $rec = new Rectangle(6, 8);
// echo $rec->getArea();
// echo $rec->toString();


// ----------------------------------------

// class Invoice{
//     private $id;
//     private $desc;
//     private $qty;
//     private $unitprice;

//     function __construct($id, $desc, $qty, $unitprice){
//         $this->id = $id;
//         $this->desc = $desc;
//         $this->unitprice = $unitprice;
//         $this->qty = $qty;
//     }
//     public function getId(): string {
//         return $this->id;
//     }

//     public function getDesc(): string {
//         return $this->desc;
//     }

//     public function getQty(): int {
//         return $this->qty;
//     }

//     public function setQty($qty): void {
//         $this->qty = $qty;
//     }

//     public function getUnitPrice(): float {
//         return $this->unitprice;
//     }

//     public function setUnitPrice($unitprice): void {
//         $this->unitprice = $unitprice;
//     }

//     public function getTotal(): float {
//         return $this->unitprice * $this->qty;
//     }

//     public function toString(): string {
//         return "Invoice[id={$this->id},desc={$this->desc},qty={$this->qty},unitprice={$this->unitprice}]";
//     }

// }
// $in = new Invoice(1, abdullah, 2, 100);


// --------------------------------------------------
// class Account {
//     private string $id;
//     private string $name;
//     private int $balance;

//     public function __construct($id,$name,$balance = 0) {
//         $this->id = $id;
//         $this->name = $name;
//         $this->balance = $balance;
//     }

//     public function getId(): string {
//         return $this->id;
//     }

//     public function getName(): string {
//         return $this->name;
//     }

//     public function getBalance(): int {
//         return $this->balance;
//     }

//     public function credit($amount): int {
//         $this->balance += $amount;
//         return $this->balance;
//     }

//     public function debit(int $amount): int {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//         } else {
//             echo "Amount exceeded balance";
//         }
//         return $this->balance;
//     }

//     public function transferTo(Account $another, int $amount): int {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//             $another->credit($amount);
//         } else {
//             echo "Amount exceeded balance";
//         }
//         return $this->balance;
//     }

//     public function toString(): string {
//         return "Account[id={$this->id},name={$this->name},balance={$this->balance}]";
//     }
// }


// --------------------------------------------

// class Ball {
//     private float $x;
//     private float $y;
//     private int $radius;
//     private float $xDelta;
//     private float $yDelta;

//     public function __construct($x, float $y, $radius, $xDelta, $yDelta) {
//         $this->x = $x;
//         $this->y = $y;
//         $this->radius = $radius;
//         $this->xDelta = $xDelta;
//         $this->yDelta = $yDelta;
//     }

//     public function getX(): float {
//         return $this->x;
//     }

//     public function setX($x): void {
//         $this->x = $x;
//     }

//     public function getY(): float {
//         return $this->y;
//     }

//     public function setY($y): void {
//         $this->y = $y;
//     }

//     public function getRadius(): int {
//         return $this->radius;
//     }

//     public function setRadius($radius): void {
//         $this->radius = $radius;
//     }

//     public function getXDelta(): float {
//         return $this->xDelta;
//     }

//     public function setXDelta($xDelta): void {
//         $this->xDelta = $xDelta;
//     }

//     public function getYDelta(): float {
//         return $this->yDelta;
//     }

//     public function setYDelta($yDelta): void {
//         $this->yDelta = $yDelta;
//     }

//     public function move(): void {
//         $this->x += $this->xDelta;
//         $this->y += $this->yDelta;
//     }

//     public function reflectHorizontal(): void {
//         $this->xDelta = -$this->xDelta;
//     }

//     public function reflectVertical(): void {
//         $this->yDelta = -$this->yDelta;
//     }

//     public function toString(): string {
//         return "Ball[({$this->x},{$this->y}),speed=({$this->xDelta},{$this->yDelta})]";
//     }

// }

//--------------------------------------------------


class Author
{
    private $name;
    private $email;
    private $gender;

    public function __construct($name, $email, $gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function __toString()
    {
        return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
    }
}

// ------------------------------------------

class SingleAuthorBook
{
    private $name;
    private $author;
    private $price;
    private $qty = 0;

    public function __construct($name, $author, $price, $qty = 0)
    {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function __toString()
    {
        return "Book[name={$this->name},author={$this->author},price={$this->price},qty={$this->qty}]";
    }
}
// ------------------------------------------------
class MultiAuthorBook
{
    private $name;
    private $authors;
    private $price;
    private $qty = 0;

    public function __construct($name, $authors, $price, $qty = 0)
    {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthors()
    {
        return $this->authors;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function getAuthorNames()
    {
        $names = [];

        foreach ($this->authors as $author) {
            $names[] = $author->getName();
        }

        return implode(",", $names);
    }

    public function __toString()
    {
        $authors = [];

        foreach ($this->authors as $author) {
            $authors[] = $author;
        }

        return "Book[name={$this->name},authors={" .
            implode(",", $authors) .
            "},price={$this->price},qty={$this->qty}]";
    }
}
