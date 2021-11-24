<?php
$pdo = new PDO('mysql:host=localhost;dbname=prukon_rootime', 'prukon_rootime', 'Md&HY3Xt');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');


$sql_details = array(
'user' => 'prukon_rootime',
'pass' => 'Md&HY3Xt',
'db'   => 'prukon_gopet',
'host' => 'localhost',
'charset' => 'utf8'
);

//require( 'ssp.class.php' );
