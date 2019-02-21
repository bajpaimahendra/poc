<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbName = 'corp';


$backupDir ='/home/bajpjai/Music'; // dir must have 777 permission

$backupFile = $backupDir .'/' . $dbName.'_'.date('Y-m-d').'.sql';

echo "<h3>Backing up database to `<code>{$backupFile}</code>`</h3>";

exec("mysqldump --user={$user} --password={$pass} --host={$host} {$dbName} --result-file={$backupFile} 2>&1", $output);

echo '<pre>';
//var_dump($output);
print_r($output);
