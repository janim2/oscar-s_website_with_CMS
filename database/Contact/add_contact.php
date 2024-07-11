<?php
    require_once '../config.php';
    require_once 'manage_contact.php';

    $add = new ManageContact();
    $add->__construct();
    echo $add->ConfirmPresence($con);