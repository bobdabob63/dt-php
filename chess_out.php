<?php
include_once "header.php";

    $width = $_REQUEST["width"];
    $height = $_REQUEST["height"];
    $light = $_REQUEST["light"];
    $dark = $_REQUEST["dark"];
    $xpos = $_REQUEST["xpos"];
    $ypos = $_REQUEST["ypos"];
    $svg = "<div style='position:relative; left: %s; top: %s'><svg width='%s' height='%s'>";
    echo sprintf($svg, $xpos, $ypos, $width * 8, $height * 8);

    $format = "<rect
    x='%s' 
    y='%s' 
    width='$width' 
    height='$height' 
    style='fill:%s'/>";
    for ($x = 1; $x <= 8; $x++) {
        for ($y = 1; $y <= 8; $y++) {
            if (($x % 2 == 0 and $y % 2 != 0) or ($x % 2 != 0 and $y % 2 == 0)) {
                $color = $light;
            }
            else {
                $color = $dark;
            }
            echo sprintf($format, ($x - 1) * $width, (8 - $y) * $height, $color);
        }

    }
    echo "<svg/></div>";

include_once "footer.php";