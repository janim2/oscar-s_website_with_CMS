<?php
    function fetchFromAnytableUsingIDAsOnlyParameter($con, $table_name, $id, $what_to_return){
        $query = "SELECT * FROM $table_name WHERE id = :id";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $id,
            )
        );
        $result = $statement->fetch();
        return $result[$what_to_return];
    }

    // function fetchFirstImage($con, $project_id){
    //     $query = "SELECT image_url FROM images WHERE project_id = :id LIMIT 1";
    //     $statement = $con->prepare($query);

    //     $statement->execute(
    //         array(
    //             ":id" => $project_id,
    //         )
    //     );
    //     $result = $statement->fetch();
    //     return $result['image_url'];
    // }

    function fetchFirstBlogImage($con, $project_id){
        $query = "SELECT image_url FROM blog_images WHERE blog_id = :id LIMIT 1";
        $statement = $con->prepare($query);

        $statement->execute(
            array(
                ":id" => $project_id,
            )
        );
        $result = $statement->fetch();
        return $result['image_url'];
    }

    function dateFormat($date){
        return date('l, M j, Y', strtotime($date));
    }

    function timeFormat($time){
        return date('H:i A', strtotime($time));
    }
    
    function countFromAnyTable($con, $table_name){
        $query = "SELECT * FROM $table_name";
        $statement = $con->prepare($query);

        $statement->execute();
        return $statement->rowCount();
    }
    
    function hashPassword($password){

    }

    function fetchBlogPostIdUsingTempImgUploadID($con, $tmp_img_upload_id){
        $query      = "SELECT id FROM blogs WHERE tmp_image_upload_id = :temp_img_upload_id";
        $statement  = $con->prepare($query);

        $statement->execute(
            array(
                ":temp_img_upload_id" => $tmp_img_upload_id,
            )
        );
        $result = $statement->fetch();
        return $result['id'];
    }

    // function fetchProductIdUsingTempImgUploadID($con, $tmp_img_upload_id){
    //     $query      = "SELECT id FROM shop WHERE tmp_image_upload_id = :temp_img_upload_id";
    //     $statement  = $con->prepare($query);

    //     $statement->execute(
    //         array(
    //             ":temp_img_upload_id" => $tmp_img_upload_id,
    //         )
    //     );
    //     $result = $statement->fetch();
    //     return $result['id'];
    // }

    function moneyFormat($amount){
        return 'GHS ' . number_format($amount, 2);
    }