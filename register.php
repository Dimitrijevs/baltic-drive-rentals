<?php
header("Access-Control-Allow-Origin: http://localhost:8080");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"), true);

  // Extract data from the JSON request
  $username = $data['username'];
  $email = $data['email'];
  $age = $data['age'];
  $password = $data['password'];

  // Perform user registration logic and database operations here
  // Return JSON response indicating success or failure
} else {
  // Handle other HTTP methods or invalid requests
  http_response_code(405);
  echo json_encode(["error" => "Method Not Allowed"]);
}
