<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/triangles.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return  "<div class='container'>
                <form action='/triangles'>
                    <div class='form-group'>
                        <label for='left'>Enter 1st side measurement:</label>
                        <input id='left' name='left' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='right'>Enter 2nd side measurement:</label>
                        <input id='right' name='right' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='bottom'>Enter 3rd side measurement:</label>
                        <input id='bottom' name='bottom' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Submit</button>
                </form>
            </div>";
    });
    $app->get("/triangles", function() {
        // $side_left = $_GET["left"];
        // $side_right = $_GET["right"];
        // $side_bottom = $_GET["bottom"];
        $user_triangle = new Triangle($_GET["left"], $_GET["right"], $_GET["bottom"]);

        if ($user_triangle->left == $user_triangle->right && $user_triangle->left == $user_triangle->bottom) {
            return "this is an equilateral triangle";
        } else if ($user_triangle->left == $user_triangle->right || $user_triangle->right == $user_triangle->bottom)
        {
            return "this is an isosceles triangle";
        }else {
            return "this is a scalene triangle";
        }
    });
    return $app;
?>
