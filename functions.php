<?php
//THIS IS THE ONLY FUNCTION THAT NEEDS TO BE EDITED
//connect to a mysql database
function sql_conn(){
	//change these values
	$host = 'hostname';
	$user = 'username';
	$pass = 'password';
	$db = 'database_name';
	//stop changing values!
	
	$conn = mysql_connect($host,$user,$pass);
	mysql_select_db($db);
}


//create positioning statement
function positioning($opt,$company){
	return "For ".$opt[0]['text']." ".$company." is ".$opt[1]['text']." that ".$opt[2]['text']." because ".$opt[3]['text'].", so that you can ".$opt[4]['text'].".";
}

//handle voting results
function vote($win,$lose){
	$string = '';
	for($i=0;$i<count($win);$i++){
		$string .= $win[$i]['input'].$win[$i]['index'];
	}
	$string .= '|';
	for($i=0;$i<count($lose);$i++){
		$string .= $lose[$i]['input'].$lose[$i]['index'];
	}
	return $string;
}
?>