<?php
header("Content-Type: application/json");
require 'function.php'; 

if (!$conn) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection not established."]);
    exit();
}

$sql = "SELECT ServiceID, ServiceName, PlanType, MonthlyPrice FROM StreamingServices";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $services = [];
    while ($row = $result->fetch_assoc()) {
        $services[] = $row;
    }
    echo json_encode($services);
} else {
    http_response_code(404);
    echo json_encode(["error" => "No streaming services found."]);
}

$conn->close();
?>
