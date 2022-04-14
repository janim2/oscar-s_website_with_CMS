<?php
    session_start();
    require_once '../../helpers/functions.php';
    class ManageApointment{
        public $name; 
        public $email;
        public $phone;
        public $date;
        public $message;

        function __construct(){
            $this->name      = $_POST['name'];
            $this->email     = $_POST['email'];
            $this->phone     = $_POST['phone_number'];
            $this->date      = $_POST['date'];
            $this->message   = $_POST['message'];
        }

        // function update_construct(){
        //     $this->book_id              = $_COOKIE['oscar_portfolio_book_id'];
        //     $this->title                = $_POST['title'];
        //     $this->description          = $_POST['description'];
        //     $this->link                 = $_POST['link'];
        //     $this->date_published       = $_POST['date_published'];
        // }

        function ConfirmPresence($con){
            $query = "SELECT * FROM appointments WHERE fullname = :f AND email = :e AND phonenumber = :p AND date = :d AND message = :m";            
            $statement = $con->prepare($query);
            $statement->execute(
                array(
                    ":f"   => $this->name,
                    ":e"   => $this->email,
                    ":p"   => $this->phone, 
                    ":d"   => $this->date,
                    ":m"   => $this->message,
                )
            );

            $count = $statement->rowCount();
            if($count > 0){
                echo "Something went wrong";
            }
            else{
                //add new user
                $this->SaveInfo($con);
            }
        }

        function SaveInfo($con){
            // $temp_img_upload_id = random_int(10, 999999);

            $query = "INSERT INTO appointments(fullname, email, phonenumber, message, date)
                VALUES(:f, :e, :p, :m, :d)";
            $statement = $con->prepare($query);

            $has_added = $statement->execute(
                array(
                    ":f"   => $this->name,
                    ":e"   => $this->email,
                    ":p"   => $this->phone, 
                    ":m"   => $this->message,
                    ":d"   => $this->date,
                )
            );

            if($has_added){
                //set up google calender event
                // $this->upload_images($con, fetchBookPostIdUsingTempImgUploadID($con, $temp_img_upload_id));
                echo 1;
            }
            else{
                echo "Something went wrong";
            }
        }


        // function UpdateInfo($con){
        //     $query = "UPDATE books SET title = :ti, description = :d, amazon_link = :link, 
        //             date_published = :dp WHERE id = :id";
        //     $statement = $con->prepare($query);

        //     $has_added = $statement->execute(
        //         array(
        //             ":ti"   => $this->title,
        //             ":d"    => $this->description, 
        //             ":link" => $this->link,
        //             ":dp"   => $this->date_published, 
        //             ":id"   => $this->book_id,
        //         )
        //     );

        //     if($has_added){
        //         echo 1;
        //     }
        //     else{
        //         echo "Something went wrong";
        //     }
        // }


        // function upload_images($con, $post_id){
        //     extract($_POST);
        //     $error=array();

        //     $txtGalleryName = "books";
        //     $images_array = array();

        //     $img_path = "../../../../Website/img/";

        //     $extension=array("jpeg","jpg","png","gif");
        //     foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        //         $file_name=$_FILES["files"]["name"][$key];
        //         $file_tmp=$_FILES["files"]["tmp_name"][$key];
        //         $ext=pathinfo($file_name,PATHINFO_EXTENSION);

        //         if(in_array($ext,$extension)) {
        //             if(!file_exists($img_path.$txtGalleryName."/".$file_name)) {
        //                 move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$img_path.$txtGalleryName."/".$file_name);
        //                 // echo $file_name;
        //                 // array_push($images_array, $file_name);
        //                 $this->SaveToImagesDatabase($con, $post_id, $file_name);
        //             }
        //             else {
        //                 $filename=basename($file_name,$ext);
        //                 $newFileName=$filename.time().".".$ext;
        //                 move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],$img_path.$txtGalleryName."/".$newFileName);
        //                 // echo $file_name;
        //                 // array_push($images_array, $file_name);
        //                 $this->SaveToImagesDatabase($con, $post_id, $file_name);
        //             }
        //         }
        //         else {
        //             array_push($error,"$file_name, ");
        //         }
        //     }
        // }

        // function SaveToImagesDatabase($con, $id, $file_name){
        //     $query = "INSERT INTO book_images(book_id, image_url) VALUES(:book_id, :image_url)";
        //         $statement = $con->prepare($query);
        //         $result = $statement->execute(
        //             array(
        //                 ":book_id"      => $id,
        //                 ":image_url"    => $file_name,
        //             )
        //         );

        //         if($result){
        //             // echo "success";
        //         }
        //         else{
        //             echo "Something went wrong";
        //         }
        // }

    }
?>