<?php
if (isset($_POST['name']) && isset($_POST['id'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';

  session_start();

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $slug = baseurl($name);
  $short_Name = mysqli_real_escape_string($conn, $_POST['Short_Name']);
  $mode = mysqli_real_escape_string($conn, $_POST['Type_ID']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $highlight = mysqli_real_escape_string($conn, $_POST['highlight']);
  $eligibilities = mysqli_real_escape_string($conn, $_POST['eligibility']);
  $methodologies = mysqli_real_escape_string($conn, $_POST['methodology']);
  $Online_labs = mysqli_real_escape_string($conn, $_POST['labs']);
  $duration = mysqli_real_escape_string($conn, $_POST['duration']);
  $fee = mysqli_real_escape_string($conn, $_POST['fee']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $programme_duration_years = mysqli_real_escape_string($conn, $_POST['programme_duration_years']);
  $programme_duration_semesters = mysqli_real_escape_string($conn, $_POST['programme_duration_semesters']);
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  $updated_file = mysqli_real_escape_string($conn, $_POST['updated_file']);
  if (isset($_FILES["photo"]["name"]) && $_FILES["photo"]["name"] != '') {
    $photo = uploadImage($conn, "photo", "all-courses");
  } else {
    $photo = $updated_file;
  }

  if (isset($_POST['Stream_ID'])) {
    $stream_ID = mysqli_real_escape_string($conn, $_POST['Stream_ID']);
  } else {
    $stream_ID = '';
  }

  if (empty($name) || empty($id)) {
    echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
    exit();
  }

  $check = $conn->query("SELECT ID FROM courses WHERE (Name LIKE '$name') AND Stream_ID = $stream_ID AND ID <> $id");
  if ($check !== false && $check->num_rows > 0) {
      echo json_encode(['status' => 400, 'message' => $name . ' already exists in this stream!']);
      exit();
  }

  $update_query = "UPDATE `courses` SET 
  `Name` = '$name', 
  `Slug` = '$slug', 
  `Stream_ID` = '$stream_ID', 
  `Duration` = '$duration', 
  `Short_Name` = '$short_Name',  
  `Eligibility`='$eligibilities', 
  `Photo`='$photo', 
  `Fee`='$fee', 
  `Title`='$title', 
  `Description`='$description', 
  `Content`='$content', 
  `Highlight`='$highlight', 
  `Methodology`='$methodologies', 
  `Labs`='$Online_labs', 
  `Duration_Years`='$programme_duration_years',
  `Mode`='$mode',
  `Duration_Semesters`='$programme_duration_semesters' 
  WHERE ID = $id";

  $add = $conn->query($update_query);

  if ($add) {
    echo json_encode(['status' => 200, 'message' => $name . ' updated successfully!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
