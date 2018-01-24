<?php

function whoDidWhat(){
	$crimes = ["larceny","embezzlement","praising comcast","tampering with replicators","vehicular manslaughter"];
	$criminals = ["Brent","Miguel","Nat"];
$crime = $crimes[random_int(0,count($crimes)-1)];
	$criminal = $criminals[random_int(0,count($criminals)-1)];
	$charges = (object)["crime"=>$crime,"criminal"=>$criminal];
	return ($charges);
}

$charges = whoDidWhat();
$crime = $charges->crime;
$criminal = $charges->criminal;
echo($criminal . " is charged with " . $crime . ".");