<?php

include("config.php");
include("functions.php");

$inputs = array($target,$reference,$diff,$believe,$benefit);
$opt_1 = array();
$opt_2 = array();

for($i=0,$let='a';$i<count($inputs);$i++,$let++){
	$rand = array_rand($inputs[$i],2);
	$opt_1[] = array("input"=>chr($i+65),"index"=>$rand[0],"text"=>$inputs[$i]{$rand[0]});
	$opt_2[] = array("input"=>chr($i+65),"index"=>$rand[1],"text"=>$inputs[$i]{$rand[1]});
}

?>
<html>
	<head>
		<title>Brand Test</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="wrap">
			<?php
			
			if($_GET['r'] == 1){
				echo "<h2>Keep going!</h2>";
			}
			else{
				echo "<h2>Please click on the box with the description you like best</h2>
			<h3>These are two example descriptions of a company called ".$company."</h3>";
			}
			?>
			
			<div id="box_1" onclick="location.href='vote?q=<?php echo vote($opt_1,$opt_2) ?>&t=<?php echo $_GET['t']; ?>';" style="cursor: pointer;">
				<div class="text"><?php echo positioning($opt_1,$company) ?></div>
			</div>
			<div id="box_2" onclick="location.href='vote?q=<?php echo vote($opt_2,$opt_1) ?>&t=<?php echo $_GET['t']; ?>';" style="cursor: pointer;">
				<div class="text"><?php echo positioning($opt_2,$company) ?></div>
			</div>
		</div>
	</body>
</html>
