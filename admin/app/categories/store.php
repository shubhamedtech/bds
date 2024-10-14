<?php

if (isset($_POST['name'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  session_start();

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $slug = baseurl($name); 
  $type = mysqli_real_escape_string($conn, $_POST['category_type']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);

  // $description =mysqli_real_escape_string($conn, $_POST['description']);
  // $content =mysqli_real_escape_string($conn, $_POST['content']);
  // $meta_title =mysqli_real_escape_string($conn, $_POST['meta_title']);
  // $meta_key =mysqli_real_escape_string($conn, $_POST['meta_key']);
  // $meta_description =mysqli_real_escape_string($conn, $_POST['meta_description']);

  // if ($_FILES["photo"]["name"]) {
  //   $filename = uploadImage($conn, "photo", "categories");
  // } else {
  //   $filename = "/admin-assets/img/default-program.jpg";
  // }

  if (empty($name)) {
    echo json_encode(['status' => 403, 'message' => 'Name is mandatory!']);
    exit();
  }

  $check = $conn->query("SELECT ID FROM categories WHERE (Name like '$name')");

  if (($check !== false && $check->num_rows > 0)) {
    echo json_encode(['status' => 400, 'message' => $name . ' already exists!']);
    exit();
  }

  // $add = $conn->query("INSERT INTO `categories`(`Name`,`Slug`,`Photo`,`Description`,`Content`,`Meta_Title`,`Meta_Key`,`Meta_Description`) VALUES ('$name','$slug','$filename','$description','$content','$meta_title','$meta_key','$meta_description')");
  $add = $conn->query("INSERT INTO `categories`(`Name`,`Slug`,`Position`,`Type`) VALUES ('$name','$slug','$position','$type')");
  if ($add) {
    echo json_encode(['status' => 200, 'message' => $name . ' added successlly!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
