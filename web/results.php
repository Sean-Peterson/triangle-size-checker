<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangles.php";

    // $left = $_GET["left"];

    $user_triangle = new Triangle($_GET["left"], $_GET["right"], $_GET["bottom"]);
    $side = $user_triangle.getLeft();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>results</title>
    </head>
    <body>
        <h1><?php echo $side; ?></h1>
    </body>
</html>
