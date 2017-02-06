<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangles.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        $first = new Triangle(3,3,3);
        $second = new Triangle(3,3,5);
        $third = new Triangle(2,3,5);
        $triangles = array($first, $second, $third);

        $output = "";
        foreach ($triangles as $triangle) {
            $output = $output . "<p> By" . $triangle->getLeft() . $triangle->getRight() . $triangle->getBottom() . "</p>";
        }
        return $output;
    });



    return $app;
?>
