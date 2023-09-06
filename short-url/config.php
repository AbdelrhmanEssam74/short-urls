<?php

try {
    $host = "";
    $dbname = "";
    $user = "";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the row count
    $rowCountQuery = "SELECT COUNT(*) as total FROM urls";
    $rowCountResult = $conn->query($rowCountQuery);
    $rowCount = $rowCountResult->fetch(PDO::FETCH_ASSOC)['total'];

    // Delete the first 50 rows if count is more than 80
    if ($rowCount > 100) {
        $deleteQuery = "DELETE FROM urls LIMIT 50";
        $conn->exec($deleteQuery);
    } 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
