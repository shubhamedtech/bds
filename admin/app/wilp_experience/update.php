<?php
require '../../includes/db-config.php';
require '../../includes/helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    // Validate incoming data
    if (empty($id) || empty($description) || empty($position)) {
        echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
        exit();
    }

    // Build the update query
    $query = "UPDATE wilp_experience SET 
                Description = '$description',
                Position = '$position'
              WHERE ID = '$id'";

    if ($conn->query($query) === TRUE) {
        echo json_encode(['status' => 200, 'message' => 'Wilp Experience updated successfully!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Error updating Wilp Experience: ' . $conn->error]);
    }
} else {
    echo json_encode(['status' => 405, 'message' => 'Method Not Allowed']);
}
?>
