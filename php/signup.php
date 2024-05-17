<?php
session_start();
include_once "config.php";

$name = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($name) && !empty($email) && !empty($address) && !empty($pass)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email already exists";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_temp = $_FILES['image']['tmp_name'];

                $img_explode = explode(".", $img_name);
                $img_extension = strtolower(end($img_explode));

                $valid_ext = ["jpg", "png", "jpeg"];

                if (in_array($img_extension, $valid_ext)) {
                    $time = time();
                    $new_img_name = $time . "_" . $img_name;
                    $destination = "images/" . $new_img_name;

                    if (move_uploaded_file($img_temp, $destination)) {
                        $status = "Active Now";
                        $random_id = rand(time(), 10000000);
                        $image_path = mysqli_real_escape_string($conn, $destination);
                        
                        $sql_2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, address, password, image, status)
                              VALUES ('{$random_id}', '{$name}', '{$email}', '{$address}', '{$pass}', '{$image_path}', '{$status}')");

                        if ($sql_2) {
                            $sql_3 = mysqli_query($conn, "SELECT unique_id, email FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql_3) > 0) {
                                $row = mysqli_fetch_assoc($sql_3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            } else {
                                echo "User registration failed";
                            }
                        } else {
                            echo "Something went wrong with user registration";
                        }
                    } else {
                        echo "Failed to move uploaded file";
                    }
                } else {
                    echo "Please select a valid image file (JPG, PNG, JPEG)";
                }
            } else {
                echo "Please upload an image";
            }
        }
    } else {
        echo "Invalid email address";
    }
} else {
    echo "All input fields are required";
}

