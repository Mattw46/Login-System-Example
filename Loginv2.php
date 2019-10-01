<?php
    /*$first = "unset";
    $last = "unset";
    if (isset($_POST['fname']) && isset($_POST['lname'])) {
        $first = $_POST['fname'];
        $last = $_POST['lname'];
    }
    echo "Hello ".$first." ".$last;*/

    function authenticate($uname,$pword) {
        if ($uname == "user1" && $pword == "abc123") {
          //return true;
          return $result = array("authenticated"=>true, "token"=>"abcd123456");
        }
        return false;
    }
    
    $username = "unset";
    $password = "unset";
    if (isset($_POST['fname']) && isset($_POST['lname'])) {
        $username = $_POST['fname'];
        $password = $_POST['lname'];
    }
    $result = authenticate($username,$password);
    //echo "result: ".$result["authenticated"]." token: ".$result["token"]."\n";
    $myJSON = json_encode($result);
    echo $myJSON;

    if ($result["authenticated"] == true) {
        echo "Success";
    }
    else {
        echo "Failed";
    }
    echo "\n\n";
?>
