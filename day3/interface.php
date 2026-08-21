<?php
class Shape {
    private string $color;
    private bool $filled;

    public function __construct($color = "red", $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function __toString(): string {
        $filledStr = $this->filled ? "true" : "false";
        return "Shape[color={$this->color},filled={$filledStr}]";
    }
}

class Circle extends Shape{
    private $radius = 1.0;

    function __construct($radius = 1.0, $color = 'red', $filled = true){
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }
    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return M_PI * $this->radius * $this->radius;
    }

    public function getPerimeter(): float {
        return 2 * M_PI * $this->radius;
    }

    public function __toString(): string {
        return "Circle[" . parent::__toString() . ",radius={$this->radius}]";
    }
}


class Rectangle extends Shape {
    private float $width;
    private float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth($width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength($length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[" . parent::__toString() . ",width={$this->width},length={$this->length}]";
    }
}


class Square extends Rectangle {

    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide(float $side): void {
        parent::setWidth($side);
        parent::setLength($side);
    }

    public function setWidth($side): void {
        $this->setSide($side);
    }

    public function setLength($side): void {
        $this->setSide($side);
    }

    public function __toString(): string {
        return "Square[" . parent::__toString() . "]";
    }
}