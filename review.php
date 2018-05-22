<?php
    session_start();
    $url =  "https://pure-plains-98928.herokuapp.com/review/" . $_SESSION['userId'];
    
    $data = file_get_contents($url);

    $json = json_decode($data, true);

    if ($json['success']){
        header("location: review-step-" . ($json['step']+1) . ".php");
    }
    else {
        header("location: review-step-1.php");
    }


?>