<?php
require_once "task.php";
class Triangle
{
    public $vertices;
    public $sideA;
    public $sideB;
    public $sideC;

    function __construct($vertices, $sideA, $sideB, $sideC)
    {
        $this->vertices = $vertices;
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    protected function validate()
    {
        if ($this->sideA < 0 || $this->sideB < 0 || $this->sideC < 0) {
            return "status: failed, reason: parametrs should be greater then 0.";
        } elseif (empty($vertices)) {
            return "status: failed, reason: you should give names to the vertices.";
        } else {
            return $this->isValid = true;
        }
    }

    public function calculateTriangleArea()
    {
        $geronAreaRounded;
        $verticesAreaArr = array();

        $this->validate();
        if (true) {
            $perimetrHalf = ($this->sideA + $this->sideB + $this->sideC) / 2;
            $geronAreaRounded = round(sqrt($perimetrHalf * ($perimetrHalf - $this->sideA) * ($perimetrHalf - $this->sideB) * ($perimetrHalf - $this->sideC)));
            $verticesAreaArr[$this->vertices] = $geronAreaRounded;
        }
        print_r($verticesAreaArr);
    }
}

class SortedTriangles extends Task
{
    public $firstTriangle;
    public $secondTriangle;
    public $thirdTriangle;

    public $outputAsString;

    function __construct($firstTriangleArea, $secondTriangleArea, $thirdTriangleArea)
    {
        $this->firstTriangleArea = $firstTriangleArea;
        $this->secondTriangleArea = $secondTriangleArea;
        $this->thirdTriangleArea = $thirdTriangleArea;
    }

    protected function validate()
    {
        if ($this->firstTriangleArea < 0 || $this->secondTriangleArea < 0 || $this->thirdTriangleArea < 0) {
            return "status: failed, reason: area should be greater then 0.";
        } else {
            return $this->isValid = true;
        }
    }

   public function sortingTriangles()
    {

        $mergedTrianglesArray = array_merge($this->firstTriangleArea, $this->secondTriangleArea, $this->thirdTriangleArea);
        arsort($mergedTrianglesArray);
        $outputAsString = implode(" and ", array_keys($mergedTrianglesArray));
        return $outputAsString;
    }

    function run()
    {
       return $this->sortingTriangles();
    }

    public function resolveAsString()
    {
        $this->validate();
        if ($this->isValid) {
            $this->run();
            return $this->outputAsString;
        }
    }

}

/*
    $triangle1 = new Triangle("abc", 15, 8, 9);
    $triangle2 = new Triangle("ghc", 10, 8, 7);
    $triangle3 = new Triangle("hbg", 5, 4, 3);

    echo $triangle1->calculateTriangleArea();
    echo $triangle2->calculateTriangleArea();
    echo $triangle3->calculateTriangleArea();
*/
