<?php
## Database configuration
include '../../includes/db-config.php';
session_start();
## Fetch records
$result_record = "SELECT ID, Name, Status, Created_At,Stream_ID,Duration,Fee, Photo, Description FROM courses ORDER BY ID DESC";
$results = mysqli_query($conn, $result_record);
$data = array();
$i = 1;

while ($row = mysqli_fetch_assoc($results)) {
  $no = $i++;
  $sector_id= $row['Stream_ID'];
  $sectorQuery = $conn->query("SELECT Name FROM streams WHERE ID  = $sector_id");
  $sectorArr = mysqli_fetch_assoc($sectorQuery);
  // $pro_duration = implode(" & ", json_decode($row['Duration'], true));
  if(strlen($row['Description']) > 20){
    $destext = substr($row['Description'], 0, 20) . "...";
  }else{
    $destext = $row['Description'];
  }
  
      $data[] = array( 
        "No" => $no,
        "ID"=>$row['ID'],
        "Name" => $row["Name"],
        // "Fee" => $row["Fee"].'('.$pro_duration .')',
        "Description"=> $destext,
        "Photo"=>$row['Photo'],
        "Sector"=>$sectorArr['Name'],
        "Status" => $row["Status"],
        "Created_At" => $row["Created_At"],
      );
  }


echo json_encode(['data' => $data]);

