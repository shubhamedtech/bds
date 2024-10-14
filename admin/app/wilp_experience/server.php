<?php
## Database configuration
include '../../includes/db-config.php';
session_start();
## Fetch records
$result_record = "SELECT ID, Name,Description,Position, Status, Created_At FROM wilp_experience ORDER BY ID DESC";
$results = mysqli_query($conn, $result_record);
$data = array();
$i = 1;

while ($row = mysqli_fetch_assoc($results)) {
  $no = $i++;
  if(strlen($row['Description']) > 50){
    $destext = substr($row['Description'], 0, 50) . "...";
  }else{
    $destext = $row['Description'];
  }

   // Split the image URLs into an array
  //  $imageUrls = explode(', ', $row['image_link']);
  
      $data[] = array( 
        "No" => $no,
        "ID"=>$row['ID'],
        "Names"=> $row["Name"],
        "Description"=> $destext,
        "Position"=>$row["Position"],
        "Status" => $row["Status"],
        "Created_At" => $row["Created_At"],
      );
  }


echo json_encode(['data' => $data]);

