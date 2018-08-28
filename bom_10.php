<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=1;$col<=5-$row;$col++) {
	echo(".");
	}
	for($col=1;$col<=$row;$col++){
		echo($col);
	}
	for($col=$row;$col<=$row;$col++){
		echo(6-$row);
	}
	for($col=$row;$col>=1;$col--){
		echo($col);
	}
	echo "<br/>";
}
?>