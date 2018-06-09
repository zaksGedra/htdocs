<?php

// echo "Hello World";

// Print(1);
// Print("1");
// Print('1');

// print(1+1 . ' ');
// print('1'+'1');

// $foo = 1;
// echo($foo);

// $bar = '1';
// echo("\n");
// echo($bar);

// echo($foo + $bar);
// echo("\n");

// echo($foo . $bar);
// echo("\n");

// $myArray = ["one", "two", "three"];

// var_dump($myArray);
// print_r($myArray);
// print_r("\n el [1] is". $myarray[1]);


// $myArray2 = ['1' => 'one', '2' => 'two', '3' => 'three' ];
// print_r($myArray2);
// print_r("\n el [1] is ". $myArray2[1]);
// if (1=='1') yes 
// 	if (1==='1') no
// }
	// ==
	// !=
	// ===
	// !==
// print_r($myArray3);
// print_r(myArray3['vards']." ". $myArray3['uzvards'] . "telefona numurs ir " . $myArray3['phone']);
// error_reporting(-1);
// ini_set('display_errors', 'on');

// try{

// 	$myArray3 = [
// 		'vards' => 'joe',
// 		'uzvards' => 'doe',
// 		'phone' => '123456789',
// 		'hobiji' => [
// 			'sleposana',
// 			'snowboards',
// 			'ritenbrauksana'
// 		],
// 		'epasti' => [
// 			'exapmle@gmail.com',
// 			'exapmle2@gmail.com'
// 		]
// 	];



// 	foreach ($myArray3 as $key => $value) {
// 		if( !is_array($value) ){
// 			print($key . " vertiba ir " . 
// 				 $value . ";  \n");
// 		}
// 		else{ 
// 			// echo('te sākas hobiju printēšana: ');

// 		 foreach($value as $key => $value2){
// 		 	print($value2."; \n");
// 		 }
// 		}
// 	}





// print("hello");
// print_r("Hello")




$flag = 5;

	if ($flag >= 5)
{
	echo('yay');
}
elseif ($flag <= 4 )
{
	echo('yay2');
}




// {catch(Exeption $e){
	// print($e);
// }

echo('  ');
switch ($flag){
	case 1:
	echo ('1. ātrums');
	break;
	case 5:
	echo ('5. ātrums');
	break;
	case 6:
	echo ('super ātrums');
	break;
default:
echo('nav ātrums VAI arī dīvains ātrums');
break;
}




?>