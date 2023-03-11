<?php
session_start();

// Define your 4 hex access color codes
$access_color_1 = "#631C03";
$access_color_2 = "#631C04";
$access_color_3 = "#631C06";
$access_color_4 = "#631C07";

//Retrieve user's entered color codes from the form via POST method
$hex_color_1 = $_POST["pass1"];
$hex_color_2 = $_POST["pass2"];
$hex_color_3 = $_POST["pass3"];
$hex_color_4 = $_POST["pass4"];

//Validate that input colors are valid hex values
if (preg_match('/^#[a-f0-9]{6}$/i', $hex_color_1) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_2) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_3) &&
    preg_match('/^#[a-f0-9]{6}$/i', $hex_color_4)) {
    // All input colors are valid

    //Compare input colors to the access color codes and set session variable if correct
    if ($hex_color_1 == $access_color_1 && 
        $hex_color_2 == $access_color_2 && 
        $hex_color_3 == $access_color_3 &&
        $hex_color_4 == $access_color_4) {
        // All input colors match the access color codes - Set session variable
        $_SESSION['authenticated'] = true;

        // Redirect to the secure page
        header("Location: /index.php");
    }
    else {
        // Invalid input color codes
        echo "Invalid login attempt. Please enter the correct keypass.";
    }
}
else {
    // Invalid input color codes
    echo "Invalid login attempt. Please enter valid keypass.";
}
?>
