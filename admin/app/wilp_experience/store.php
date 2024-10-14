<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../../includes/db-config.php';
    require '../../includes/helper.php';

    
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    
    if (empty($description) || empty($position)) {
        echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
        exit();
    }

    
    // $checkQuery = "SELECT ID FROM labs WHERE Name = '$name'";
    // $checkResult = $conn->query($checkQuery);

    // if ($checkResult && $checkResult->num_rows > 0) {
    //     echo json_encode(['status' => 400, 'message' => $name . ' already exists!']);
    //     exit();
    // }

    
    $insertQuery = "INSERT INTO wilp_experience (Description, Position) 
                    VALUES ('$description', '$position')";

    if ($conn->query($insertQuery) === TRUE) {
        echo json_encode(['status' => 200, 'message' => 'Wilp Experience added successfully!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Failed to add Wilp Experience: ' . $conn->error]);
    }
}
