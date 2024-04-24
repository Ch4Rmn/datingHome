<?php
session_start();
$auth_role = [1];

require_once('../config/require.php');
$point = $company_logo =  $company_name = $company_phone = $company_email = "";
$processError = false;
$error = false;


if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $point = (int)$_POST['point'];
    $company_phone = (int)($_POST['company_phone']);
    $company_email =
        $mysqli->real_escape_string($_POST['company_email']);
    $company_name = $mysqli->real_escape_string($_POST['company_name']);


    // if ($point == '') {
    //     $error = true;
    //     $errorMessage .= "Fill point plz.</br>";
    //     $processError = true;
    // }
    // if ($company_logo == '') {
    //     $error = true;
    //     $errorMessage .= "Fill logo plz.</br>";
    //     $processError = true;
    // }
    // if ($company_name == '') {
    //     $error = true;
    //     $errorMessage .= "Fill name plz.</br>";
    //     $processError = true;
    // }
    // if ($company_phone == '') {
    //     $error = true;
    //     $errorMessage .= "Fill phone plz.</br>";
    //     $processError = true;
    // }
    // if ($company_email == '') {
    //     $error = true;
    //     $errorMessage .= "Fill email plz.</br>";
    //     $processError = true;
    // }

    $user_exist = "SELECT `company_name` FROM `setting` WHERE company_name='$company_name' AND id!='$id'";
    $user_exist_query = $mysqli->query($user_exist);

    if ($user_exist_query->num_rows >= 1) {
        echo "company_name with the same company_name already exists.";
    } else {
        if ($processError == false) {
            $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : (isset($_COOKIE['id']) ? $_COOKIE['id'] : null);
            if ($user_id) {
                $update_sql = "UPDATE `setting` SET point='$point', company_logo='$company_logo', company_email='$company_email',company_phone='$company_phone', updated_at=CURRENT_TIMESTAMP, updated_by='$user_id' WHERE id=$id";
                $update_query = $mysqli->query($update_sql);
                if ($update_query) {
                    $url = $adminBaseUrl . "show_setting.php";
                    header("Refresh:0;url=$url");
                    exit();
                } else {
                    echo "Error updating record: " . $mysqli->error;
                }
            }
        } else {
            echo "User ID not found.";
        }
    }
}
