<?php

require "config.php";
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email']; // Retrieve the "email" field from POST data

        // Sanitize and validate the email if needed

        // Insert the email into the database
        $query = "INSERT INTO test (testName) VALUES ('$email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo json_encode(["message" => "Success"]);
        } else {
            echo json_encode(["message" => "Database error"]);
        }
    } else {
        echo json_encode(["message" => "Email is missing"]);
    }
}

?>
