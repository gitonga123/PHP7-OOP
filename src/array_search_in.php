<?php
//$names = ['Harry', 'Ron', 'Hermione'];
////in_array returns true or false
//$containsHermione = in_array('Hermione', $names);
//var_dump($containsHermione); // true
//$containsSnape = in_array('Snape', $names);
//var_dump($containsSnape); // false
////search returns the key value
//$wheresRon = array_search('Ron', $names);
//var_dump($wheresRon); // 1
//$wheresVoldemort = array_search('Volde',$names);

$properties = [
    'firstname' => 'Daniel',
    'lastname' => 'Mutwiri',
    'age' => 43
];

$properties102 = [
    'firstname' => 'James',
    'lastname' => 'Sukuma',
    'age' => 34
];

$properties1 = $properties2 = $properties3 = $properties;

//Low to High Value
sort($properties1);
var_dump($properties1);

//High To low Value
arsort($properties2);
var_dump($properties2);

//Key
ksort($properties3);
var_dump($properties3);

//Print Keys
$keys = array_keys($properties);
var_dump($keys);

//print Values
$values = array_values($properties);
var_dump($values);

//Merger
$good = ['Harry', 'Ron', 'Hermione'];
$bad = ['Dudley', 'Vernon', 'Petunia'];
$all = array_merge($good, $bad);
$all2 = array_merge($properties, $properties102);
var_dump($all);
var_dump($all2);


