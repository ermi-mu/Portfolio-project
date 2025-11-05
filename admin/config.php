<?php
$host = 'gateway01.eu-central-1.prod.aws.tidbcloud.com';
$dbname = 'portfolio';
$username = '2oM82ZmTwtDuoA7.root'; // default XAMPP username
$password = 'PASSWORD'; // default XAMPP password is empty

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}