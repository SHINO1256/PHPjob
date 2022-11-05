<?php
function getRectangularVolume($length, $width, $height) {
    $volume = $length * $width *$height;
    echo "縦=5cm、横=10cm、高さ=8cmの直方体の体積は、".$volume. "cm³です。";
}
getRectangularVolume(5,10,8);
?>