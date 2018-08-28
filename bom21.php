<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=7;$col++){
		echo("*");
	}
	
	echo($row);

	for($col=1;$col<=$row;$col++){
		echo("*");
	}

	for($col=$row;$col<=$row;$col++){
		echo(8-$row);
	}

	echo "<br/>";
}
?>