$(document).ready(function(){

  /* Expand edit form*/
  $("img#edit").click(function() {
    $(this).parent().next().slideToggle();
    return false;
  });

  /* AJAX delete task */
  $( "img#delete" ).click(function() {
    // From the delete icon, grab the task id it's associated with
    var taskId = $(this).attr("task");
    if (taskId != "" && confirm("Are you sure you want to delete this task?")) {
      var request = $.ajax({ // Setup ajax request
        url: "index.php",
        type: "POST",
        data: { 'task_id' : taskId,
        'delete' : "true" },
        dataType: "html",
        success: function(){
          $.ajax({ // Replace the old data with the new one.
            url: "index.php",
            type: "GET",
            dataType: "html",
            success: function(newHtml){
              var newPage = document.open("text/html", "replace");
              newPage.write(newHtml);
              newPage.close();
            }
          });
        }
      });
      
      // else something went wrong, display error.
      request.fail(function(jqXHR, textStatus) {
        alert( "Request failed: " + textStatus );
      });
    }
  });
});

function validateCreateForm() {
  var task = document.forms["taskForm"]["task"].value;
  if (task == null || task == "") {
    alert("Task cannot be blank!");
    return false;
  }
}