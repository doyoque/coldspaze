<?php

require_once 'vendor/autoload.php';

// 1. sum of the even numbers of array
$class = new \Doyoque\Coldspaze\Cases\EvenNumber([1,2,3,4,5,6,7,8,9,10]);
$result = $class->sumEvenNumber();
print_r($result);

// 2. simple email class
$email = new \Doyoque\Coldspaze\Cases\Email('example@email.com', 'recipient@email.com', 'Subject', 'Message');
$email->send();

// 3. PHP script retrieve users from DB
$db1 = new \Doyoque\Coldspaze\Cases\MysqliRetriveRecord('localhost:3306', 'root', 'secret123', 'example_db');
$db1->RetriveUser();

// 4. Vowels removal
$vowels = new \Doyoque\Coldspaze\Cases\VowelsRemoval('qwertyuiop');
$vowels->removeVowels();

// 5. Import from csv to DB
$db2 = new \Doyoque\Coldspaze\Cases\ImportFromCsv('localhost:3306', 'root', 'secret123', 'example_db');
$db2->import();
