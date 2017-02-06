<?php

    class Triangle
    {
        private $left;
        private $right;
        private $bottom;

        function __construct($left_side, $right_side, $bottom_side)
        {
            $this->left = $left_side;
            $this->right = $right_side;
            $this->bottom = $bottom_side;
        }

        function getLeft()
        {
            return $this->left;
        }

        function getRight()
        {
            return $this->right;
        }

        function getBottom()
        {
            return $this->bottom;
        }


    }
    //
    // $first = new Triangle(3,3,3);
    // $second = new Triangle(3,3,5);
    // $third = new Triangle(2,3,5);
    //
    // $triangles = array($first,$second,$third);


?>
