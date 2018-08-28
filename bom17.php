<?php include ("bb.php");?>
<?php
for($row=1;$row<=5;$row++) {
	for($col=$row;$col<=$row;$col++) {
		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);

		echo($col);
		echo(10-$row);
	}

	echo "<br/>";
}
?>