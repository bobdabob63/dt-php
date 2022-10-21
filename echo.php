<?php
include_once 'header.php';
?>
<title>Echo</title>
<div style="padding-left:16px">
	<h1>Echo</h1>
	<p>PHP variables, echo...</p>
	<?php
	//Single line comment
	/* Multi-line comment 
	*/
	echo '<div style="padding-left:16px">';
    echo "<b>Hello World!</b>";
    print "<br>this is using print command<br>";
    
    $name = "Tim";
    $age = 16;
    echo "<br><br>";
    echo "$name's age is $age<br>";
    echo $name . "'s age is " . $age;
    echo "<br>After two years $name's age will be " . $age + 2;
    ?>
</div>

<?php
include_once 'footer.php';
?>