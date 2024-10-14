<?php
// Database configuration
include '../../includes/db-config.php';
session_start();

// Fetch records
$result_record = "SELECT ID, Name, Categories_Card_ID, Photo, Status, Created_At FROM categories_courses ORDER BY ID DESC";
$results = mysqli_query($conn, $result_record);

if (!$results) {
    die("Error fetching programs: " . mysqli_error($conn));
}

$data = array();
$i = 1;

while ($row = mysqli_fetch_assoc($results)) {
    $no = $i++;
    $categories_Card_ID = $row['Categories_Card_ID'];

    if (is_numeric($categories_Card_ID)) {
        $categories_cardQuery = $conn->query("SELECT Name FROM categories_card WHERE ID = $categories_Card_ID");

        if ($categories_cardQuery) {
            $categories_cardArr = mysqli_fetch_assoc($categories_cardQuery);
            $categories_cardName = $categories_cardArr["Name"] ?? "Unknown";
        } else {
            $categories_cardName = "Unknown";
        }
    } else {
        $categories_cardName = "Invalid Department";
    }

    $data[] = array(
        "No" => $no,
        "ID" => $row['ID'],
        "Name" => $row["Name"],
        "Image" => $row["Photo"],
        "Category_cardName" => $categories_cardName,
        "Status" => $row["Status"],
        "Created_At" => $row["Created_At"],
    );
}

echo json_encode(['data' => $data]);
