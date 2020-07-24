<?php
require_once "mysqli.php";
echo $data["NTU"];
$query = 'UPDATE sensor SET tem=' . $data["NTU"];
$stmt =  $connection->prepare($query);
if ($stmt) {
    $stmt->execute();
    return true;
} else {
    return false;
}
