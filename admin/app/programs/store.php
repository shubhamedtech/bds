<?php

if (isset($_POST['name'])) {
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

  if ($_FILES["photo"]["name"]) {
    $filename = uploadImage($conn, "photo", "all-courses");
  } else {
    $filename = "/admin-assets/img/default-program.jpg";
  }

  if (isset($_POST['Stream_ID'])) {
    $stream_ID = mysqli_real_escape_string($conn, $_POST['Stream_ID']);
  } else {
    $stream_ID = '';
  }

  if (empty($name) || empty($stream_ID)) {
    echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
    exit();
  }

  $check = $conn->query("SELECT ID FROM courses WHERE (Name like '$name') AND Stream_ID=$stream_ID");

  if ($check !== false && $check->num_rows > 0) {
    echo json_encode(['status' => 400, 'message' => $name . ' already exists!']);
    exit();
  }

  $add = $conn->query("INSERT INTO `courses`(`Name`, `Slug`, `Stream_ID`, `Duration`, `Short_Name`,`Mode`, `Eligibility`, `Photo`, `Fee`, `Title`, `Description`, `Content`, `Highlight`, `Methodology`, `Labs`, `Duration_Years`, `Duration_Semesters`) VALUES ('$name', '$slug', '$stream_ID', '$duration', '$short_Name', '$mode', '$eligibilities', '$filename', '$fee', '$title', '$description', '$content', '$highlight', '$methodologies', '$Online_labs', '$programme_duration_years', '$programme_duration_semesters')");

  if ($add) {
    echo json_encode(['status' => 200, 'message' => $name . ' added successfully!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
?>
