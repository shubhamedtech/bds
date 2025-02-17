

<?php
if (isset($_POST['id'])) {
  require '../../includes/db-config.php';
  session_start();

  $id = intval($_POST['id']);
  $program_id = mysqli_real_escape_string($conn, $_POST['program_id']);
  $questions = mysqli_real_escape_string($conn, $_POST['question']);
  $answers = mysqli_real_escape_string($conn, $_POST['answer']);

  if (empty($id) || empty($program_id) || empty($questions) || empty($answers)) {
    echo json_encode(['status' => 403, 'message' => 'All fields are mandatory!']);
    exit();
  }

  $add = $conn->query("UPDATE `programfaq` SET `Program_ID` = '$program_id',`Questions`='$questions',`Answers`='$answers' WHERE ID = $id");
  if ($add) {
    echo json_encode(['status' => 200, 'message' => 'FAQ updated successfully!']);
  } else {
    echo json_encode(['status' => 400, 'message' => 'Something went wrong!']);
  }
}
?>
