<?php require_once 'functions.php'; ?>
<?php require_once 'db_config.php'; ?>
<?php

// escape variables for security
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
  $query = "UPDATE tasks SET task='$task', priority='$priority' WHERE task_id='$taskId'";
}
else {
  die("Invalid action.");
}

$result = mysqli_query($connection, $query);
confirm_query($result);

mysqli_close($connection);
header("Location: ../index.php"); 
?> 