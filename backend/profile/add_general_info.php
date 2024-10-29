<?php
session_start();

// Function to save the file URL to the database
function saveFileUrlToDatabase($fileUrl, $id) {
    include "../db.php";

    // Prepare and bind
    
    $stmt = $pdo->prepare("UPDATE users SET file_url = :url WHERE id = :id");
    $stmt->execute([':url' => $fileUrl, ":id" => $id]);
}

// Check if required POST data is present
if (isset($_POST['first_name'], $_POST['last_name'], $_POST['place_of_living'], $_POST['phone'], $_POST['dob'])) {

// Get data from POST request and sanitize it
$firstName = htmlspecialchars($_POST['first_name']);
$lastName = htmlspecialchars($_POST['last_name']);
$placeOfLiving = htmlspecialchars($_POST['place_of_living']);
$phone = htmlspecialchars($_POST['phone']);
$dob = htmlspecialchars($_POST['dob']);

// Prepare data as an associative array
$newProfile = [
    'first_name' => $firstName,
    'last_name' => $lastName,
    'place_of_living' => $placeOfLiving,
    'phone' => $phone,
    'dob' => $dob
];

$path = "users/".$_SESSION['username']."_" .$_SESSION["user_id"];

// Check if the JSON file exists and has content
if (!file_exists("../../".$path)) {
    $currentData = ['general_info' => []]; // Initialize with general_info array if file doesn't exist
} else {
    echo json_encode(["status" => "error", "message" => "You've entered this information!"]);
    return;
}

// Add the new profile to the general_info array
$currentData['general_info'][] = $newProfile;

// Encode the data to JSON format
$jsonData = json_encode($currentData, JSON_PRETTY_PRINT);

// Write the JSON data back to the file
if (file_put_contents("../../".$path, $jsonData)) {
    echo json_encode(["status" => "success", "message" => "Profile information successfully added!"]);
    saveFileUrlToDatabase($path, $_SESSION["user_id"]);
    $_SESSION["is_entered_general_info"] = true;
} else {
    echo json_encode(["status" => "error", "message" => "Error saving profile information."]);
}
}else {
    echo json_encode(["status" => "error", "message" => "Incomplete data provided."]);
}


?>