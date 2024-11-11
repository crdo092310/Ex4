<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $result = "POST Method: Hello, $name! Your email is $email.";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"]) && isset($_GET["email"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $result = "GET Method: Hello, $name! Your email is $email.";
}

echo json_encode(["result" => $result]);
?>