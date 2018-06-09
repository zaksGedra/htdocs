<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php

//1.variants

// echo(" - - 1.variants - - ");
// $i=0;
// while($i<10){
// 	if($i%2 == 1){
// 		echo($i. " ");
// 	}

// 	$i++;
// }
// while($i<20){
// 	if($i%2 == 0){
// 		echo($i. " ");
// 	}

// 	$i++;
// }
// echo(" - - 2.variants - - ");
// for($i=1; $i<10; $i+=2){
// 	echo($i." ");
// }
// for($i=10; $i<20; $i+=2){
// 	echo($i." ");
// }

// echo(" - - 3.variants - - ");
// $i=1;
// while($i<10){
// 	echo($i. " ");
// 	$i +=2 ;
// }
// $i=10;
// while($i<20){
// 	echo($i. " ");
// 	$i +=2 ;
// }


// echo(" - - 4.variants - - ");
// $i=1;
// while($i<20){
// 	if($i < 10){
// 		echo($i. " ");
// 	}
// 	else {
// 		echo( ($i-1) . " ");
// 	}
// 	$i += 2;
// }

// echo(" - - 5.variants - - ");

// for($i=1; $i<20; $i += 2){
// 	if($i < 10){
// 		echo($i. " ");
// 	}
// 	else {
// 		echo( ($i-1) . " ");
// 	}
// }


// echo(" - - 6.variants - - ");

// for($i=1; $i<=10; $i ++){
// 	if($i <= 5){
// 		echo( ($i*2 -1) ." ");
// 	}
// 	else {
// 		echo( ($i * 2 - 2) . " ");
// 	}
// }

// echo(" - - 7.variants - - ");

// for($i=10; $i>=1; $i --){
// 	if($i <= 5){
// 		echo( ($i*2 -1) ." ");
// 	}
// 	else {
// 		echo( ($i * 2 - 2) . " ");
// 	}
// }

Function manaFunkcija(){
	// echo(" done! ");
}

 Function manaFunkcijaArParamentru($var){
  	 // echo($var . " ");
  	  }

Function manaFunkcijaArNeobligatuParamentru($var = "zivis"){
	 // echo($var . " ");
}

function multipleParameters($a, $b = 0, $c = "c", $d  = 'finito'){
	// echo($a . $b . $c . $d);
	
}
function kapinaat($base, $pow = 2){


	$result = 1;

	for ($i=0; $i < abs($pow); $i++) { 
		$result *= $base;

	}
	if( $pow < 0){

	
	$result = 1/$result;
}

// lai noapaļotu skaitļus pec komata...
$result = round($result, 3);

	// 

	// echo(" ". $result . " ");
	
	return $result ;

}


// 2^3 = 2*2*2=4*2=8;
// 2^(-3)=1/(2^3);


echo(" - - 8.variants- -");
$i=10;
while($i>0){
	// echo($i . " ");
	$i--;
	manaFunkcija();
	manaFunkcijaArParamentru($i);
	manaFunkcijaArNeobligatuParamentru($i);
	$j = kapinaat($i, -2);
	// echo(kapinaat($i));
	// echo(" result=" . $j . "; ");
	// echo(++$j);

}

echo($var);
//  unset($i);
// echo(" - " .$i);

manaFunkcija();
$super = "cool";
manaFunkcijaArNeobligatuParamentru($super);
manaFunkcijaArNeobligatuParamentru();
multipleParameters(1, 2, 3, 4);
echo(" ");
multipleParameters(1, 2, 3);
echo(" ");
multipleParameters(1);

$a = 2.567;
echo (  round($a). " " );
// paņem skaitli pirms komata, apaļojot. (floor)
echo( floor($a). " "  );


function check($var){
	if($var>5){
		return true;
	}
	return false;
}
echo ( (int) check($a) . " ");

if(check($a) ){
	echo(("yay"). " ");
}
else{
	echo("aww");
}


	echo( check($a) +check($a) );

$salad = 'aboli bumbieri arbuzs banani tomati';
 $array = explode(" ", $salad);
 // var_dump($array);
 $salad2 =implode(", ", $array);
 var_dump($salad2);

 $string= 'ZAKS';
 $splitstring = str_split($string);
 $splitstring = implode("-", $splitstring);
 // $splitstring = strtolower($splitstring);
 var_dump($splitstring);







?>
