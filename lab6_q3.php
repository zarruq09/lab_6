<!DOCTYPE html>
<html>
<head>
    <title>Lab6 Q3</title>
</head>
<body>

<?php
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with example values
$length = 2;
$width = 4;
$area = calculateArea($length, $width);

// Display the result
echo "The area of the rectangle with width $width and height $length is: $area.";
?>

</body>
</html>
