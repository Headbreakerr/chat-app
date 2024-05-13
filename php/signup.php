<?php
session_start();
include_once "config.php";
$name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);


if(!empty($name) && !empty($email) && !empty($address) && !empty($pass)){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "email already exists";
        }else{
            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $img_temp = $_FILES['image']['tmp_name'];

                $img_explode = explode(".", $img_name);
                $img_extension = end($img_explode);

                $valid_ext = ["jpg", "png", "jpeg"];

                if(in_array($img_extension,$valid_ext)===true){
                    $time = time();
                    $new_img_name = $img_temp. "_" . $time;
                    $destination = "images/" . $new_img_name;
                    
                    if(move_uploaded_file($img_temp, $destination)){
                        $status = "Active Now";
                        $random_id = rand(time(), 10000000);
                        $image_path = mysqli_escape_string($conn, $destination);
                        $sql_2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, address, password, image, status)
                              VALUES ({$random_id}, '{$name}', '{$email}', '{$address}', '{$pass}', '{$new_img_name}', '{$status}')");

                        if($sql_2){
                            $sql_3 = mysqli_query($conn, "SELECT unique_id, email FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql_3) > 0){
                                $row = mysqli_fetch_assoc($sql_3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }else{

                            }
                        }else{
                            echo "Something Went Wrong!";
                        }
                    }
                }else{
                    echo "Please select a valid extension image file. JPG, PNG, JPEG";
                }
            }else{
                echo "Please upload a Picture";
            }
        }
    }else{
        echo $email . "is not valid";
    }
}else{
    echo "All input fields are required";
}


