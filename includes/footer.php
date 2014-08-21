  <div id="footer">
    <div class="container">
    <h6><p style="text-align:center;" class="muted credit">&copy; 2014 <a href="http://brycematsuda.github.io">Bryce Matsuda</a></p></h6>
    </div>
  </div>
<?php

  // Release data back to memory
  mysqli_free_result($result);

  // Close database connection
  mysqli_close($connection);
?>