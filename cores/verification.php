<?php

    include_once 'UserC.php';
    if(isset($_GET['cin']))
    {
        $cin = $_GET['cin'];
        $token = $_GET['token'];

        $service = new UserC();
        $result = $service->activateAccount($cin,$token);

        if($result)
        {
            echo 'activated success!!';
        }
        else{
            echo 'an error has occured!!';
        }
    }
?>