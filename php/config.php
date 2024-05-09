<?php

$conn = mysqli_connect("localhost", "root", "", "chat");

if (!$conn) {
    echo "Database error" . mysqli_connect_error();
} 


