<meta http-equiv="refresh" content="5; URL=localhost:8888">
<?php
function manaFunkcija($string){
$array =str_split($string);
// print_r($array);
foreach($array as $key => $value)
{
	if($i %2==0)
{
		$array[$key] = strtoupper(
			$array[$key]);
}
	else
{
		$array[$key]=strtolower($array)[$key];
		}
	}
	 $finalArray= implode(" ", $array);
	 echo($finalArray);
}
$var= 'VEIKALS';
manaFunkcija ($var);
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// // $result = manaFunkcija($var);
// // echo($result);

// function manaFunkcija($string, $foo = null, $bar = null){
// 	// 1. echo($string) //veikals
// 	// 2. dabuut masiivu
// 	// 3. masiivaa nomainiit uz lieliem burtiem
// 	// VAR IZTIKT 4. savienot masiivu par tekstu

// 	//echo($string);
// 	$array = str_split($string);
	
// 	foreach ($array as $key => $value) {
// 		if($key % 2 == 0){
// 			$array[$key] = strtoupper($array[$key]);
// 		}
// 		else{
// 			$array[$key] = strtolower($array[$key]);
// 		}
// 		//echo($array[$key]. " ");
// 	}

// 	//print_r($array);
// 	$finalArray = implode(" ", $array);
// 	echo($finalArray);
// 	return($finalArray);

// 	//V e I k A l S
// }



// $var= 'VEIKALS';
// // manaFunkcija($var);
// // manaFunkcija('VEIKALS');

// $result = manaFunkcija($var);

// echo($result);



?>