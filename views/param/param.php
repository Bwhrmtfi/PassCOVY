<?php
require_once "mysqli.php";
$sql = 'SELECT tem FROM sensor';
$stmt = $connection->prepare($sql);
$stmt->execute();
$hasil = $stmt->get_result();
$row = $hasil->fetch_array(MYSQLI_ASSOC);

if ($row != null) {
    $post = array("tem" => $row['tem']);
    echo json_encode($post);
} else {
    $this->success = false;
}
