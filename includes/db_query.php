<?php 
// Perform database query
if (isset($_POST['task'])) $task = mysqli_real_escape_string($connection, $_POST['task']);
if (isset($_POST['priority'])) $priority = mysqli_real_escape_string($connection, $_POST['priority']);
if (isset($_POST['task_id'])) $taskId = mysqli_real_escape_string($connection, $_POST['task_id']);

if (isset($_POST['delete'])){
  $query = "DELETE FROM tasks WHERE task_id='$taskId'";
}
else if (isset($_POST['create'])) {
  $query ="INSERT INTO tasks (task, priority, created_at) VALUES ('$task', '$priority', NULL)";
}
else if (isset($_POST['edit'])) {
  $query = "UPDATE tasks SET task='$task', priority='$priority', updated_at=now() WHERE task_id='$taskId'";
}
else {
  $query = "SELECT * ";
  $query .= "FROM tasks ";
}

if (isset($_GET['sort'])){
  $query .= "ORDER BY ";
  switch ($_GET['sort']) {
    case 'createDesc':
    $query .= "created_at DESC ";
    break;

    case 'createAsc':
    $query .= "created_at ASC ";
    break;
  
    case 'priHiLo':
    $query .= "priority DESC ";
    break;

    case 'priLoHi':
    $query .= "priority ASC ";
    break;

    case 'name':
    $query .= "task ASC ";
    break;

    default:
    break;
  }
}

$result = mysqli_query($connection, $query);
confirm_query($result);

if (isset($_POST['create'])) {
  header("Location: index.php"); 
}

?>