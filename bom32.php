<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=1;$col<=8-$row;$col++) {
		echo($col);	
	}

	for($col=1;$col<=2+$row;$col++) {
		echo("*");	
	}
	
	echo($row+2);

	echo "<br/>";
}
?>