<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../../includes/db-config.php';
    require '../../includes/helper.php';
    session_start();

    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : null;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : null;
    $subject = isset($_POST['subject']) ? mysqli_real_escape_string($conn, $_POST['subject']) : null;
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : null;
    $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : null;
    $address = isset($_POST['con_address']) ? mysqli_real_escape_string($conn, $_POST['con_address']) : null;

    if (empty($name) || empty($email)) {
        echo json_encode(['status' => 403, 'message' => 'All fields marked with * are mandatory!']);
        exit();
    }

    $check = $conn->query("SELECT ID FROM leads WHERE Email = '$email'");
    if ($check !== false && $check->num_rows > 0) {
        echo json_encode(['status' => 400, 'message' => 'Lead with email ' . $email . ' already exists!']);
        exit();
    }

    $add = $conn->query("INSERT INTO `leads`(`Name`, `Email`, `Subject`, `Mobile`, `Message`,`Address`) VALUES ('$name', '$email', '$subject', '$phone', '$message','$address')");
    if ($add) {
        echo json_encode(['status' => 200, 'message' => 'Lead added successfully!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
    }
} else {
    echo json_encode(['status' => 405, 'message' => 'Method Not Allowed']);
}
