<?php if (isset($row["priority"])) { ?>
  <input type="hidden" name="task_id" value="<?php echo $row["task_id"] ?>">
<?php } ?>
<div class="form-group">
  <label for="taskBox">Task</label><br>
  <input type="text" id="taskBox" name="task" value="<?php if (isset($row["priority"])) echo $row["task"] ?>" />
</div>
<div class="form-group">
  <label for="prioritySelect">Priority</label><br>
  <select id="prioritySelect" name="priority">
    <option <?php if (isset($row["priority"]) && $row["priority"] == "1") echo('selected'); ?> value="1">1 (Low)</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "2") echo('selected'); ?> value="2">2</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "3") echo('selected'); ?> value="3">3</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "4") echo('selected'); ?> value="4">4</option>
    <option <?php if (isset($row["priority"]) && $row["priority"] == "5") echo('selected'); ?> value="5">5 (High)</option>
  </select>
</div>