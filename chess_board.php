<?php
include_once "header.php"
?>
<title>Chess Board</title>
<style>
    form {
        line-height: 1.5;
    }
    /*input {
        position: fixed;
        left: 110px;
    }*/
</style>
<h1>Custom Chess Board</h1>

<form action="./chess_out.php" method="post">
    Square width: <input type="number" name="width" value="50"><br>
    Square height: <input type="number" name="height" value="50"><br>
    Light squares: <input type="color" name="light" value="#ffffff">
    Dark squares: <input type="color" name="dark"><br>
    <input type="submit">
</form>

<?php
include_once "footer.php"
?>