<?php
if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['id'])) {
  require '../../includes/db-config.php';
  session_start();

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  

  $check = $conn->query("SELECT ID FROM specializations_faq WHERE ID = $id");
  if ($check->num_rows > 0) {
    $delete = $conn->query("DELETE FROM specializations_faq WHERE ID = $id");
    if ($delete) {
      echo json_encode(['status' => 200, 'message' => 'Specialization FAQ deleted successfully!']);
    } else {
      echo json_encode(['status' => 302, 'message' => 'Something went wrong!']);
    }
  } else {
    echo json_encode(['status' => 302, 'message' => 'Specialization FAQ not exists!']);
  }
}
