<?php
require '../config.php';
if (isset($_GET['urlID'])) {
    $lastID = $_GET['urlID'];
    $select = "SELECT `longURL` FROM urls where id = :id";
    $select = $conn->prepare($select);
    $select->execute([
        ":id" => $lastID
    ]);
    $data = $select->fetch(PDO::FETCH_OBJ);
    header("Location:" . $data->longURL . "");
}
