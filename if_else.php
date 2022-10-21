<?php
include_once "header.php"
?>

<title>If/Else</title>

<div style="padding-left: 16px">
	<h2>IF THEN ELSE + Switch</h2>
	<form id = "grade_form" action="/0/dt-php/getGrade.php" method="post" target="_self">
    	Grade: <input type="text" name="grade"><br>
    	<input type="submit" value="Submit">
	</form>
</div>

<div style="padding-left: 50px">
	<span id="grade"></span>
</div>

<?php
include_once "footer.php"
?>