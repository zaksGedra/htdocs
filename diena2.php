<?php

error_reporting(-1);
ini_set('display_errors', 'on');

// $koki = ['abele', 'bumbiere', 'liepa', 'ozols'];
// $majas =['3' => 'kalnini', '6' => 'berzini'];

// $kokuSkaits = count($koki);

// echo("mums ir: " . $kokuSkaits . " koki" ."\n");

// $kokuSkaits -= 2;
// $kokuSkaits += 1;

// $i = 5;
// echo($i);
// $i *= 2;





// echo(" ");
// echo($i);
// echo(" ");

// unset($i);

// echo("pedeja el. nr.: " . ($kokuSkaits) . " ");
// echo($kokuSkaits);
// echo($koki[$kokuSkaits]);

// if(isset($i)){
// 		echo(" ".$i);
// }

// $int = 0;
// echo($int);
// echo(" ");
// echo(--$int);
// echo(" ");
// echo(++$int);


// echo($kokuSkaits++);
// echo($kokuSkaits);




$i = 0;

while ($i <= 10) {
	echo($i);
	$i++;
}

echo(" ");
$i = 0;
do{
	echo($i);
	$i++;


} while($i <= 10);


echo(" ");

for($i=0; $i<10; $i ++){
	if($i%2 == 0 ){
		echo($i);
	}
			
}


echo(" ");
$integers = array(
	4, 
	5, 
	6, 
	array(
		6.1,
		6.2,
		6.3,
		6.4
	)
);

foreach ($integers as  $value) 
{
 	if(is_array($value)){

 		foreach ($value as $subvalue) {
 			echo(
 				" & subvalue: ". 
 				$subvalue .
 				": "
 			);
 			
 		}
 	}
 else{
 echo(
	" & value: ".
	$value . 
	"; ");
}
}

// echo("-------------------- ");
// for($i=0; $i < count($integers); $i ++)
// {
// if(!is_array($integers[$i]))
// echo($integers[$i]);
// }


echo("___________________ \n");
$i = 0;
while($i < count($integers)){
if (!is_array($integers[$i])) {
	echo($integers[$i]);
	}
	
	$i++;
}














