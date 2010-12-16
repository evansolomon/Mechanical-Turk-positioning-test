<?php

include("functions.php");
sql_conn("insidr");

$var = explode("|",$_GET['q']);
$win = mysql_real_escape_string($var[0]);
$lose = mysql_real_escape_string($var[1]);
if($_GET['t'] == 1){
	$t = 1;
}
else{
	$t = 0;
}

mysql_query("insert into turk_brand values('$win','$lose','$t')");
if($t == 1){
	header("Location: submit?q=".$_GET['q']);
}
else{
	header("Location: ../brand?r=1");
}
?>