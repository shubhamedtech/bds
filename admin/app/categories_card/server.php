<?php
// Database configuration
include '../../includes/db-config.php';
session_start();

// Fetch records
$result_record = "SELECT ID, Name, Categories_ID, Photo, Status, Created_At FROM categories_card ORDER BY ID DESC";
$results = mysqli_query($conn, $result_record);

if (!$results) {
    die("Error fetching programs: " . mysqli_error($conn));
}

$data = array();
$i = 1;

while ($row = mysqli_fetch_assoc($results)) {
    $no = $i++;
    $categories_id = $row['Categories_ID'];

    if (is_numeric($categories_id)) {
        $categoriesQuery = $conn->query("SELECT Name FROM categories WHERE ID = $categories_id");

        if ($categoriesQuery) {
            $categoriesArr = mysqli_fetch_assoc($categoriesQuery);
            $categoriesName = $categoriesArr["Name"] ?? "Unknown";
        } else {
            $categoriesName = "Unknown";
        }
    } else {
        $categoriesName = "Invalid Department";
    }

    $data[] = array(
        "No" => $no,
        "ID" => $row['ID'],
        "Name" => $row["Name"],
        "Image" => $row["Photo"],
        "Department" => $categoriesName,
        "Status" => $row["Status"],
        "Created_At" => $row["Created_At"],
    );
}

echo json_encode(['data' => $data]);
