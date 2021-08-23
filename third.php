<?php
echo "<pre>\n";
require_once "pdo.php";

$stmt = $pdo->query("SELECT * FROM users"); //go find the method query within the pdo object
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
echo "</pre>\n";


