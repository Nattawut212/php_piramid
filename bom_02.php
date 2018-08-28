<?php include ("bb.php");?>
<?php
for($row=1;$row<=4;$row++) {
	for($col=$row;$col<=$row+2;$col++) {
		echo($col);
	}
	
	for($col=0;$col<=1+$row;$col++){
		echo("*");	
	}
	
	echo "<br/>";
}
?>