<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {

	echo($row);

	for($col=1;$col<=$row;$col++) {
		echo(".");	
	}
	
	for($col=1;$col<=$row;$col++) {
		echo("*");	
	}

	echo "<br/>";
}
?>