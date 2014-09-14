<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/db_config.php'; ?>
<?php require_once 'includes/db_query.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>MiniTask for PHP</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12 column">
        <?php include 'includes/navbar.php'; ?>
        <div class="list-group">
          <h1>List of tasks</h1>
          <?php  
          // Use returned data if any
          while($row = mysqli_fetch_assoc($result)){ ?>
          <div id="pri_<?php echo $row["priority"] ?>" class="list-group-item">
            <p><?php echo $row["task"] ?></p>
            <p>(Priority: <?php echo $row["priority"] ?>)</p>
            <a href="#"><img title="Delete Task" id="delete" task="<?php echo $row["task_id"] ?>" src="img/delete.png"></a>
            <a href="#"><img title="Edit Task" id="edit" task="<?php echo $row["task_id"] ?>" src="img/edit.png"></a>
            <div role="edit" id="edit_<?php echo $row["task_id"] ?>" class="list-group-item">
              <h5 id="edit-header">Edit Task</h5>
              <form action="includes/process.php" name="taskForm" role="form" method="post">
                <?php include 'includes/form.php'; ?>
                <input type="submit" class="btn btn-default" id="edit-btn" name="edit" value="Edit" /><br>
              </form>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <script src="js/todo.js"></script>
  <script src="js/navbar.js"></script>
</body>
</html>
