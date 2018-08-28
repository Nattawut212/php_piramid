<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=2;$col<=$row;$col++) {
	echo(".");
	}
	for($col=$row;$col<=10-$row;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>