<?php
require("../config/config.php");
$title = "LoginMember | mmCupid";
$meta_content = "Online Dating | Myanmar Online Dating | find love | find lover";
$meta_keywords = "Online Dating,Myanmar Online Dating,find love,find lover";
require("../master/template-header.php");

?>

<div class="container my-5">
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <h1 class="fw-bold" style="font-size: 60px">Sign up</h1>

      <div class="fw-medium" style="font-size: 14px;">Sign up with your email or phone number</div>
      <input placeholder="name" name="name" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input placeholder="password" name="password" type="password" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input placeholder="email" name="email" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input placeholder="confirm_password" name="confirm_password" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input placeholder="phone" name="phone" type="number" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />

      <div class="form-check form-check-inline mt-2">

        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>

      <button class="btn btn-dark rounded rounded-5 btn-lg mt-4" style="width:81vh;">
        Sign up
      </button>
      <div class="py-3" style="font-size: 14px;">
        Already have an account? <a href="#" class="text-black">Log in</a>
      </div>
      <!-- <div class="my-4">Or</div> -->
      <!-- <button class="btn btn-outline-secondary fs-6 text-black fw-medium rounded-4 btn-lg" style="width:81vh;">
            <i class="bi bi-google"></i> Continue with Google
          </button> -->

      <p class="w-75 mt-4 fw-medium text-center" style="font-size: 12px; line-height:16px;">By signing up, you agree to our
        <a href="" class="text-black">Terms & Conditions</a>. Learn how we
        use your data in our
        <a href="" class="text-black">Privacy Policy</a>
      </p>
    </div>

    <div class="col-md-4"></div>
  </div>
</div>

<?php
require("../master/template-footer.php");
?>