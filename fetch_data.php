<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *"); // Adjust as needed for your security requirements

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM crud"; // Adjust the query according to your table structure
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->execute();
    $result = $stmt->get_result();

    $students = array();

    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }

    echo json_encode($students);

    $stmt->close();
} else {
    echo json_encode(array("error" => "Failed to prepare statement"));
}

$conn->close();
?>