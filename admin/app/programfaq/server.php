<?php
include('../../includes/db-config.php'); 
session_start();

## Fetch records
$result_record = "SELECT ID, Program_ID, Questions, Answers, Status, Created_At FROM programfaq ORDER BY ID DESC";
$results = mysqli_query($conn, $result_record);
$data = array();
$i = 1;
while ($row = mysqli_fetch_assoc($results)) {
    $no = $i++;
    $blog_id = $row['Program_ID'];
    $blogQuery = $conn->query("SELECT Name FROM programs WHERE ID = $blog_id");
    $blogArr = $blogQuery->fetch_assoc();

    $questiontext = strlen($row['Questions']) > 20 ? substr($row['Questions'], 0, 20) . "..." : $row['Questions'];
    $answertext = strlen($row['Answers']) > 20 ? substr($row['Answers'], 0, 20) . "..." : $row['Answers'];
    

    $data[] = array(
        "No" => $no,
        "ID" => $row['ID'],
        "Blog_Name" => $blogArr["Name"],
        "Question" => $questiontext,
        "Answer" => $answertext,
        "Status" => $row["Status"],
        "Created_At" => $row["Created_At"],
    );
}
echo json_encode(['data' => $data]);
?>

