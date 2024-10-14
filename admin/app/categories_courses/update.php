<?php
if (isset($_POST['name']) && isset($_POST['id'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  session_start();

  $id = intval($_POST['id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $slug = baseurl($name);
  $short_Name = mysqli_real_escape_string($conn, $_POST['Short_Name']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);

  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $meta_title = mysqli_real_escape_string($conn, $_POST['meta_title']);
  $meta_key = mysqli_real_escape_string($conn, $_POST['meta_key']);
  $meta_description = mysqli_real_escape_string($conn, $_POST['meta_description']);
  $fee = mysqli_real_escape_string($conn, $_POST['fee']);
  $duration = mysqli_real_escape_string($conn, $_POST['duration']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $updated_file = mysqli_real_escape_string($conn, $_POST['updated_file']);
  $pdf_updated_file = mysqli_real_escape_string($conn, $_POST['pdf_updated_file']);



  $Categories_Card_ID = isset($_POST['categories_Card_ID']) ? mysqli_real_escape_string($conn, $_POST['categories_Card_ID']) : '';

  if (isset($_FILES["photo"]["name"]) && $_FILES["photo"]["name"] != '') {
    $photo = uploadImage($conn, "photo", "program");
  } else {
    $photo = $updated_file;
  }

  if (isset($_FILES["pdf"]["name"]) && $_FILES["pdf"]["name"] != '') {
    $pdffilename = uploadPdf($conn, "pdf", "program");
  } else {
    $pdffilename = $pdf_updated_file;
  }

  if (empty($name) || empty($short_Name) || empty($position)) {
    echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
    exit();
  }

  // $check = $conn->query("SELECT ID FROM programs WHERE (Name = '$name') AND ID <> $id");
  // if ($check !== false && $check->num_rows > 0) {
  //   echo json_encode(['status' => 400, 'message' => $name . ' already exists!']);
  //   exit();
  // }
  $check = $conn->query("SELECT ID FROM categories_courses WHERE Name = '$name' AND ID <> $id");
  if ($check !== false && $check->num_rows > 0) {
    echo json_encode(['status' => 400, 'message' => $name . ' already exists for the selected department!']);
    exit();
  }

   

  $update = $conn->query("UPDATE `categories_courses` SET `Name` = '$name', `Slug` = '$slug', `Categories_Card_ID` = '$Categories_Card_ID', `Short_Name` = '$short_Name', `Position` = '$position', `Content` = '$content', `Photo` = '$photo', `Pdf` = '$pdffilename', `Meta_Title` = '$meta_title', `Meta_Key` = '$meta_key', `Meta_Description` = '$meta_description', `Fees` = '$fee', `Duration` = '$duration', `Description` = '$description' WHERE ID = $id");

  if ($update) {
    echo json_encode(['status' => 200, 'message' => $name . ' updated successfully!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
