<?php
$pdo = new PDO('mysql:host=localhost;dbname=prukon_gopet', 'prukon_gopet', 'Eld2TeBh');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');


$sql_details = array(
'user' => 'prukon_gopet',
'pass' => 'Eld2TeBh',
'db'   => 'prukon_gopet',
'host' => 'localhost',
'charset' => 'utf8'
);

require( 'ssp.class.php' );
