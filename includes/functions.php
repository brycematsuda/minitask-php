<?php

function confirm_query($result){
  // Check if there was a query error
  if (!$result) {
    echo "Attempted database query: " . $result . "\n";
    die("But it failed!");
  }
}

?>