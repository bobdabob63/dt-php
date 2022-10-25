<?php
include_once "header.php"
?>

<title>Loop</title>
<form action="./print_table.php" method="post">
    Number 1: <input type="number" name="num1"><br>
    Repeat 1: <input type="number" name="amount1"><br>
    Number 2: <input type="number" name="num2"><br>
    Repeat 2: <input type="number" name="amount2"><br>
    <input type="submit">
</form>

<?php
include_once "footer.php"
?>