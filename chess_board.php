<?php
include_once "header.php"
?>
<title>Chess Board</title>
<style>
    form {
        line-height: 1.5;
    }
</style>
<h1>Custom Chess Board</h1>

<form action="./chess_out.php" method="post">
    Square width: <input type="number" name="width" value="50"><br>
    Square height: <input type="number" name="height" value="50"><br>
    Board position x: <input type="number" name="xpos" value="0">
    y: <input type="number" name="ypos" value="0"><br>
    Light squares: <input type="color" name="light" value="#ffffff">
    Dark squares: <input type="color" name="dark" value="#000000"><br>
    <input type="submit">
</form>

<?php
include_once "footer.php"
?>