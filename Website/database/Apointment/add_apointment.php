<?php
    require_once '../config.php';
    require_once 'manage_appointment.php';

    $add = new ManageApointment();
    $add->__construct();
    echo $add->ConfirmPresence($con);