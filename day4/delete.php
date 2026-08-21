<?php
require "./connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->delete('users', $id);
    header("location:allUsers.php?message=" . urlencode($result));
    exit;
} else {
    header("location:allUsers.php");
    exit;
}