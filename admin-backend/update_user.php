<?php
session_start();
$auth_role = [1];

require_once('../config/require.php');

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $username = $mysqli->real_escape_string($_POST['username']);
    $status = (int)$_POST['status'];
    $role = (int)$_POST['role'];

    $user_exist = "SELECT `username` FROM `user` WHERE username='$username' AND id!='$id'";
    $user_exist_query = $mysqli->query($user_exist);

    if ($user_exist_query->num_rows >= 1) {
        echo "User with the same username already exists.";
    } else {
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : (isset($_COOKIE['id']) ? $_COOKIE['id'] : null);
        if ($user_id) {
            $update_sql = "UPDATE `user` SET username='$username', role='$role', status='$status', updated_at=CURRENT_TIMESTAMP, updated_by='$user_id' WHERE id=$id";
            $update_query = $mysqli->query($update_sql);
            if ($update_query) {
                $url = $adminBaseUrl . "show_user.php";
                header("Refresh:0;url=$url");
                exit();
            } else {
                echo "Error updating record: " . $mysqli->error;
            }
        } else {
            echo "User ID not found.";
        }
    }
}
