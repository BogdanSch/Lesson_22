<?php
include_once "../dbconnect.php";
try {
    $conn->query("SET NAMES utf8mb4");
    $conn->query("SET CHARACTER SET utf8mb4");
    $conn->query("DROP TABLE IF EXISTS Users;");
    if ($conn->connect_error) {
        throw new Exception('Ошибка удаления таблицы Users: [' . $conn->connect_error . ']');
    }
    $conn->query("DROP TABLE IF EXISTS GBookTable;");if ($conn->connect_error) {
        throw new Exception('Ошибка удаления таблицы GBookTable: [' . $conn->connect_error . ']');
    }
    echo "Tables Users and GBookTable has been deleted successfully";
    mysqli_close($conn);
} catch (Exception $e) {
    $e->getMessage();
}