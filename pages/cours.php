<?php 

//Déclaration de la fonction sayHi 
function sayHi(string $firstName, string $lastName): string 
{ 
	$currentTime = date('H:i'); 
	return "Bonjour " . $firstName . " " . $lastName . " ! Il est " . $currentTime ; 
} 

//Appel de la fonction sayHi (le corps de la fonction sayHi est éxecuté) 

$message = sayHi('John', 'Doe'); 
echo $message;