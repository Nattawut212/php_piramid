<?php include ("bb.php");?>
<?php
for($row=1;$row<=4;$row++) {
	for($col=1;$col<=4-$row;$col++) {
		/*������� ;����ش;�������͹� (������� / Ŵŧ)*/
	echo(".");
	}
	echo($row);

	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
for($row=3;$row>=1;$row--) {
	for($col=1;$col<=4-$row;$col++) {
	echo(".");
	}
	echo($row);
	for($col=2;$col<=$row;$col++){
	echo("**");
	}
	echo($row);
	echo "<br/>";
}
?>