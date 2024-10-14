<?php
if (isset($_POST['name'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  session_start();

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  // $Categories_Card_ID = intval($conn, $_POST['categories_Card_ID']);
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




    $Categories_Card_ID = isset($_POST['categories_Card_ID']) ? mysqli_real_escape_string($conn, $_POST['categories_Card_ID']) : '';

   

  if ($_FILES["photo"]["name"]) {
    $filename = uploadImage($conn, "photo", "program");
  } else {
    $filename = "/admin-assets/img/default-program.jpg";
  }

  if ($_FILES["pdf"]["name"]) {
    $pdffilename = uploadPdf($conn, "pdf", "program");
  } else {
    $pdffilename = "/admin-assets/img/default-program.jpg";
  }

  if (empty($name) || empty($short_Name) || empty($position)) {
    echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
    exit();
  }

  $check = $conn->query("SELECT ID FROM categories_courses WHERE Name = '$name'");
  if ($check !== false && $check->num_rows > 0) {
    echo json_encode(['status' => 400, 'message' => $name . ' already exists!']);
    exit();
  }

  //  Check if the program name already exists
  //  $check = $conn->query("SELECT ID FROM categories_courses WHERE Name = '$name' AND Department_ID = '$department_ID'");
  //  if ($check && $check->num_rows > 0) {
  //    echo json_encode(['status' => 400, 'message' => $name . ' already exists for the selected department!']);
  //    exit();
  //  }



$add = $conn->query("INSERT INTO categories_courses (Name, Slug, Categories_Card_ID, Short_Name, Position, Photo, Pdf, Content, Meta_Title, Meta_Key, Meta_Description, Fees, Duration, Description	) 
                        VALUES ('$name', '$slug','$Categories_Card_ID', '$short_Name', '$position', '$filename', '$pdffilename', '$content', '$meta_title', '$meta_key', '$meta_description', '$fee', '$duration', '$description')");

  if ($add) {
    echo json_encode(['status' => 200, 'message' => $name . ' Added successfully!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
