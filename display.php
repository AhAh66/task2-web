<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'robot_control');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استعلام للحصول على آخر أمر
$sql = "SELECT command, timestamp FROM commands ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Latest Command: " . $row['command'] . "<br>";
    echo "Timestamp: " . $row['timestamp'];
} else {
    echo "No commands found.";
}

$conn->close();
?>
