<?php
if (isset($_POST['name']) && isset($_POST['id'])) {
    require '../../includes/db-config.php';
    require '../../includes/helper.php';
    session_start();

    // Sanitize and assign variables
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $slug = baseurl($name);
    $short_name = mysqli_real_escape_string($conn, $_POST['Short_Name']);
    $fees = mysqli_real_escape_string($conn, $_POST['fees']);
    $approved_from = mysqli_real_escape_string($conn, $_POST['approved_from']);
    $meta_title = mysqli_real_escape_string($conn, $_POST['meta_title']);
    $meta_key = mysqli_real_escape_string($conn, $_POST['meta_key']);
    $meta_description = mysqli_real_escape_string($conn, $_POST['meta_description']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $address_type = mysqli_real_escape_string($conn, $_POST['auth_center_type']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category_ID = isset($_POST['Category_ID']) ? mysqli_real_escape_string($conn, $_POST['Category_ID']) : '';

    // Handle conditional fields based on auth_center_type
    $pincode = $city = $district = $state = $country = $address = null;
    if ($address_type == "0") { // India
        $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $district = mysqli_real_escape_string($conn, $_POST['district']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
    } elseif ($address_type == "1") { // Abroad
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
    }

    // Handle file upload for photo
    $photo = isset($_FILES["photo"]["name"]) && $_FILES["photo"]["name"] != '' ? uploadImage($conn, "photo", "categories_card") : mysqli_real_escape_string($conn, $_POST['updated_file']);

    // Validate required fields
    if (empty($name) || empty($short_name) || empty($position)) {
        echo json_encode(['status' => 403, 'message' => 'Name, Short Name, and Position are mandatory fields!']);
        exit();
    }

    // Check if the category name already exists, excluding the current record
    $check = $conn->query("SELECT ID FROM categories_card WHERE Name = '$name' AND Categories_ID = '$category_ID' AND ID <> $id");
    if ($check !== false && $check->num_rows > 0) {
        echo json_encode(['status' => 400, 'message' => $name . ' already exists for the selected category!']);
        exit();
    }

    // Update the record in the database
    $update = $conn->query("UPDATE `categories_card` SET 
        `Name` = '$name', 
        `Slug` = '$slug', 
        `Categories_ID` = '$category_ID', 
        `Short_Name` = '$short_name', 
        `Position` = '$position', 
        `Photo` = '$photo', 
        `Meta_Title` = '$meta_title', 
        `Meta_Key` = '$meta_key',
        `Content` = '$content',  
        `Meta_Description` = '$meta_description', 
        `Fees` = '$fees', 
        `Approved_From` = '$approved_from', 
        `Pincode` = '$pincode', 
        `City` = '$city', 
        `District` = '$district', 
        `State` = '$state', 
        `Country` = '$country', 
        `Address` = '$address', 
        `Address_Type` = '$address_type' 
        WHERE `ID` = $id");

    if ($update) {
        echo json_encode(['status' => 200, 'message' => $name . ' updated successfully!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
    }
}
