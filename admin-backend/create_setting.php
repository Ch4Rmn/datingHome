<?php
session_start();

$auth_role = [1];
// $password = "apple";
// $password = md5($shaKey . md5($password));
// echo $password;
// 1bc42deee499c3eacd84beb569ebb9e0
// 1bc42deee499c3eacd84beb569ebb9e0 

// config
// require_once('../config/require.php');

require_once('../config/config.php');
require_once('../config/auth.php');
require_once('../config/database.php');
require_once('../config/include_function.php');
require_once('../config/admin_middleware.php');

// echo $user_id;
$title = "MMCupid::CreateCity";
$name = "";
$error = false;
$errorMessage = "";
$processError = false;
$point = $company_logo =  $company_name = $company_phone = $company_email = "";

// $url = $adminBaseUrl . "show_city.php";

if (isset($_POST['submit'])) {
    // id 	point 	company_logo 	company_name 	company_phone 	company_email 
    $point = (int)($_POST['point']);
    $company_logo = $mysqli->real_escape_string($_POST['company_logo']);
    $company_name = $mysqli->real_escape_string($_POST['company_name']);
    $company_phone = $mysqli->real_escape_string($_POST['company_phone']);
    $company_email = $mysqli->real_escape_string($_POST['company_email']);

    if ($point == '' || !is_numeric($point)) {
        $error = true;
        $errorMessage .= "need to fill point<br>";
        $processError = true;
    }

    if ($company_logo == '') {
        $error = true;
        $errorMessage .= "need to fill company_logo<br>";
        $processError = true;
    }
    if ($company_name == '') {
        $error = true;
        $errorMessage .= "need to fill company_name<br>";
        $processError = true;
    }
    if ($company_phone == '' || !is_numeric($company_phone)) {
        $error = true;
        $errorMessage .= "need to fill company_phone<br>";
        $processError = true;
    }
    if ($company_email == '') {
        $error = true;
        $errorMessage .= "need to fill company_email<br>";
        $processError = true;
    }
    if ($point === "" || $company_logo === "" || $company_name === "" || $company_phone === "" || $company_email === "") {
        $error = true;
        $errorMessage .= "Need to fill all fields<br>";
        $processError = true;
    }

    if ($processError == false) {

        $sql = "INSERT INTO `setting`(`point`, `company_logo`, `company_name`, `company_phone`, `company_email`,`created_by`, `updated_by`) VALUES ('$point','$company_logo','$company_name','$company_phone','$company_email','$user_id','$user_id')";
        $query = $mysqli->query($sql);
        if ($query) {
            $url = $adminBaseUrl . "show_setting.php";
            header("Refresh:0;url=$url");
            exit();
        } else {
            // Handle error if the query fails
            $error = true;
            $errorMessage .= "Error When Create: " . $mysqli->error . "</br>";
        }
    }
}

// header 
require_once('../master/cp-template-header.php');
// sidebar 
require_once('../master/cp-template-sidebar.php');
// <!-- top navigation -->
require_once('../master/cp-template-navbar.php');


?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="row shadow-sm">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Create City<small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="<?php echo $adminBaseUrl ?>create_setting.php" method="POST">

                        <!-- $point = $company_logo = $company_name = $company_phone = $company_email = ""; -->

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="point">point <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="point" placeholder="fill point" class="form-control" name="point" value="<?php echo $name; ?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="company_logo">company_logo <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="company_logo" placeholder="fill company_logo" class="form-control" name="company_logo" value="<?php echo $name; ?>">
                            </div>
                        </div>

                        <!-- company logo image  -->



                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="company_name">company_name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="company_name" placeholder="fill company_name" class="form-control" name="company_name" value="<?php echo $name; ?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="company_phone">company_phone <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="company_phone" placeholder="fill company_phone" class="form-control" name="company_phone" value="<?php echo $name; ?>">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="company_email">company_email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="company_email" placeholder="fill company_email" class="form-control" name="company_email" value="<?php echo $name; ?>">
                            </div>
                        </div>


                        <input type="hidden" name="form-sub" value="1">
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" name="submit" value="submit"></input>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// footer 
require_once('../master/cp-template-footer.php');
// end 
if ($error == true) {
?>
    <script>
        new PNotify({
            title: 'Error',
            text: '<?php echo $errorMessage ?>',
            type: 'error',
            styling: 'bootstrap3'
        });
    </script>
<?php
}
require_once('../master/cp-template-end.php');
?>