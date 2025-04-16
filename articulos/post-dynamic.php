<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$requestedUrl = isset($_GET['url']) ? $_GET['url'] : '';

$sql = "SELECT content FROM articles WHERE url = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $requestedUrl);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$stmt->close();
$conn->close();

if ($row) {
    echo $row['content'];
} else {
    http_response_code(404);
    echo 'Page not found';
}
?>
