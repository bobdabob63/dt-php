<?php
include_once "header.php"
?>
<div style="padding-left: 16px">
    <h2>IF THEN ELSE + Switch</h2>
    <h3>Result</h3>
    <br>
</div>

<div style="padding-left: 50px">
    <?php 
        $marks = $_REQUEST["grade"];
        echo "Score: " . $marks . "%<br>";
        switch ($marks) {
            case 100:
                echo "You got outstanding &#128526";
                break;
            case $marks >= 90:
                echo "You got excellent!";
                break;
            case $marks >= 70:
                echo "You got very good!";
                break;
            case $marks >= 50:
                echo "You got good!";
                break;
            case $marks >= 30:
                echo "You got acceptable!";
                break;
            default:
                echo "You got unacceptable &#128561";
        }
        /*if($marks == 100) {
            echo "You got outstanding &#128526";
        } elseif($marks >= 90) {
            echo "You got excellent!";
        } elseif($marks >= 70) {
            echo "You got very good!";
        } elseif($marks >= 50) {
            echo "You got good!";
        } elseif($marks >= 30) {
            echo "You got acceptable!";
        } else {
            echo "You got unacceptable &#128561";
        }*/
    ?>
</div>

<?php
include_once "footer.php"
?>