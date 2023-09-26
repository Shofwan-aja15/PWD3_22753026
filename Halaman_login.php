<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    switch ($role) {
        case "admin":
            if ($username === "admin" && $password === "adminpass") {
                echo "Selamat datang, Admin!";
            } else {
                echo "Login gagal. Periksa kembali username dan password.";
            }
            break;

        case "user":
            if ($username === "user" && $password === "userpass") {
                echo "Selamat datang, User!";
            } else {
                echo "Login gagal. Periksa kembali username dan password.";
            }
            break;

        default:
            echo "Role tidak valid.";
            break;
    }
}
?>
