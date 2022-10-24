<?php
include_once "header.php"
?>

<title>Loop</title>
<table>
    <tr>
        <th>x</th>
<?php
$x = 10;
for ($i = 1; $i <= 10; $i++) {
    echo "<th>" . $x * $i . "</th>";
}
echo "</tr>";
$y = 1;
    echo "<tr><th>$i</th><td>" . $i * $y . "</td></tr>";
?>
</table>

<?php
include_once "footer.php"
?>