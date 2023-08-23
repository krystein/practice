<?php
require_once "rectangle.class.php";


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rectangle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $width = 7;
    $height = 8;
    $cal = new Rectangle($width, $height);
    echo '<p>the area of the rectangle is:' . $cal->getArea() . '<p>';
    echo '<p>the perimeter of the rectangle is:' . $cal->getPerimeter() . '<p>';
    echo $cal->isSquare();
    ?>
</body>

</html>