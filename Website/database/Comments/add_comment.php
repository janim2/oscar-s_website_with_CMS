<?php
    require_once '../config.php';
    require_once 'manage_comment.php';

    $add = new ManageComment();
    $add->__construct();
    echo $add->ConfirmPresence($con);