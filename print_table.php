<?php
include_once "header.php";
?>

<table>
    <tr>
        <th>x</th>

<?php
    //Amount 1:  Top row
    //Amount 2:  Left column
    $mult1 = $_REQUEST["num1"];
    $mult2 = $_REQUEST["num2"];
    $amount1 = $_REQUEST["amount1"];
    $amount2 = $_REQUEST["amount2"];
    //Top Row
    for ($x = 1; $x <= $amount1; $x++) {
        echo "<th>" . $x * $mult1 . "</th>";
    }
    echo "</tr>";

    //Rows
    for ($x = 1; $x <= $amount2; $x++) {
        echo "<tr>";
        echo "<th>" . $x * $mult2 . "</th>";
        for ($y = 1; $y <= $amount1; $y++) {
            echo "<td>" . $x * $y * $mult1 * $mult2 . "</td>";
        }
        echo "</tr>";
    }
?>
    </table>
<?php
include_once "footer.php";
?>