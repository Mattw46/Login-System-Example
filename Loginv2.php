<?php
    $first = "unset";
    $last = "unset";
    $authenticated = "false";
    if (isset($_POST['fname']) && isset($_POST['lname'])) {
        $first = $_POST['fname'];
        $last = $_POST['lname'];
    }
    if ($first == "user1" && $last == "abc123") {
      $authenticated = "true";
    }
    echo "Hello ".$first." ".$last."<br> authenicated: ".$authenticated;
?>
