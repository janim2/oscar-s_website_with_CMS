<?php
    session_start();
    require_once '../../helpers/functions.php';
    class ManageContact{
        public $message; 
        public $name;
        public $email;
        public $subject;

        function __construct(){
            $this->message      = $_POST['message'];
            $this->name         = $_POST['name'];
            $this->email        = $_POST['email'];
            $this->subject      = $_POST['subject'];
        }

        // function update_construct(){
        //     $this->book_id              = $_COOKIE['oscar_portfolio_book_id'];
        //     $this->title                = $_POST['title'];
        //     $this->description          = $_POST['description'];
        //     $this->link                 = $_POST['link'];
        //     $this->date_published       = $_POST['date_published'];
        // }

        function ConfirmPresence($con){
            $query = "SELECT * FROM contact WHERE message = :m AND name = :n AND email = :e AND subject = :s";            $statement = $con->prepare($query);
            $statement->execute(
                array(
                    ":m"   => $this->message,
                    ":n"   => $this->name,
                    ":e"   => $this->email, 
                    ":s"   => $this->subject,
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

            $query = "INSERT INTO contact(message, name, email, subject)
                VALUES(:m, :n, :e, :s)";
            $statement = $con->prepare($query);

            $has_added = $statement->execute(
                array(
                    ":m"   => $this->message,
                    ":n"   => $this->name,
                    ":e"   => $this->email, 
                    ":s"   => $this->subject,
                )
            );

            if($has_added){
                //send email to Oscar
                sendEmail($name, $email, $subject, $message);
                // $this->upload_images($con, fetchBookPostIdUsingTempImgUploadID($con, $temp_img_upload_id));
                echo 1;
            }
            else{
                echo "Something went wrong";
            }
        }

        function sendEmail($name, $email, $subject, $message){
            $from = $email;
    
            $headers = "From: $from";
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". $from . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
            //$subject = "<b>{$name}</b>";
        
            // $logo = 'http://willfind8.com/img/will.jpg';
            $link = '#';
        
            $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>CONTACT</title></head><body>";
            // $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
            $body .= "<p>A user has contacted you with {$subject}. Details are as follows;</p>";
            $body .= "<table style='width: 100%;'>";
            $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
            $body .= "</td></tr></thead><tbody><tr>";
            $body .= "<td style='border:none;'><strong>name:</strong> {$name}</td></tr>";
            $body .= "<tr><td style='border:none;'><strong>email:</strong> {$from}</td>";
            $body .= "</tr>";
            $body .= "<tr><td style='border:none'><strong>Message:</strong></td></tr>";
            $body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
            $body .= "</tbody></table>";
            $body .= "</body></html>";
        
            $send = mail("iamjesse75@gmail.com,", "CONTACT OSCAR", $body, $headers);
            
            if($send){
                // echo "mail sent";
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