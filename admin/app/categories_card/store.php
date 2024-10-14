<?php
if (isset($_POST['name'])) {
    require '../../includes/db-config.php';
    require '../../includes/helper.php';
    session_start();

    // Sanitize and assign variables
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

    if ($_FILES["photo"]["name"]) {
        $filename = uploadImage($conn, "photo", "categories_card");
    } else {
        $filename = "/admin-assets/img/default-program.jpg";
    }

    if (empty($name) || empty($short_name) || empty($position)) {
        echo json_encode(['status' => 403, 'message' => 'Name, Short Name, and Position are mandatory fields!']);
        exit();
    }

    $check = $conn->query("SELECT ID FROM categories_card WHERE Name = '$name' AND Categories_ID = '$category_ID'");
    if ($check && $check->num_rows > 0) {
        echo json_encode(['status' => 400, 'message' => $name . ' already exists for the selected Category!']);
        exit();
    }

    // Insert data into the database
    $add = $conn->query("INSERT INTO categories_card (Name, Slug, Categories_ID, Short_Name, Position, Photo, Meta_Title, Meta_Key, Meta_Description, Fees, Approved_From, Pincode, City, District, State, Country, Address, Address_Type, Content) 
                          VALUES ('$name', '$slug', '$category_ID', '$short_name', '$position', '$filename', '$meta_title', '$meta_key', '$meta_description', '$fees', '$approved_from', '$pincode', '$city', '$district', '$state', '$country', '$address', '$address_type', '$content')");

    if ($add) {
        echo json_encode(['status' => 200, 'message' => $name . ' added successfully!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
    }
}
