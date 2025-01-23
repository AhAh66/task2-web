<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli('localhost', 'root', '', 'robot_control');

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من وجود طلب POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command']; // الأمر المرسل من الزر
    $sql = "INSERT INTO commands (command) VALUES ('$command')";

    if ($conn->query($sql) === TRUE) {
        echo "Command saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control robort</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<style>
 body {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .container {
            margin-left: 20px;
            position: relative;
            width: 300px;
            height: 300px;
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #stop {
            position: absolute;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%);
           
        
            padding: 10px 20px;
        }
        #left {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        #right {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        #forword {
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%);
        }
        #backword {
            position: absolute;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);
        }
</style>
<body>
    <div class="container">

    <form action="" method="post">
            <button name="command" value="L" id="left">Left</button>
            <button name="command" value="F" id="forword">Forward</button>
            <button name="command" value="S" id="stop">Stop</button>
            <button name="command" value="B" id="backword">Backward</button>
            <button name="command" value="R" id="right">Right</button>
        </form>
    </div>
  
</body>
</html>
