<?php
require("../config/config.php");
$title = "LoginMember | mmCupid";
$meta_content = "Online Dating | Myanmar Online Dating | find love | find lover";
$meta_keywords = "Online Dating,Myanmar Online Dating,find love,find lover";
require("../master/template-header.php");

?>

<div class="container my-5" ng-app="myApp" ng-controller="myCtrl">
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <h1 class="fw-bold" style="font-size: 60px">Sign up</h1>

      <div class="fw-medium" style="font-size: 14px;">Sign up with your email or phone number</div>
      <input ng-model="name" placeholder="name" name="name" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input ng-model="password" placeholder="password" name="password" type="password" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input ng-model="email" placeholder="email" name="email" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input ng-model="confirm_password" placeholder="confirm_password" name="confirm_password" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input ng-model="phone" placeholder="phone" name="phone" type="number" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
      <input ng-model="birthday" placeholder="birthday" name="birthday" id="birthday" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />

      <div class="form-check form-check-inline mt-2">
        <input ng-model="gender" class="form-check-input" type="radio" name="male" id="inlineRadio1" value="1">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input ng-model="gender" class="form-check-input" type="radio" name="female" id="inlineRadio2" value="2">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div><br>

      <label for="">Education</label>
      <textarea id="" name="education" ng-model="education" rows="2" cols="30" placeholder="tell me about your Education" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;">
</textarea>

      <label for="">About</label>
      <textarea id="" name="about" ng-model="about" rows="4" cols="50" placeholder="tell me about yourself" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;">
</textarea>

      <div class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;">
        <div class="row" style="width:81vh;">
          <div class="col"> <label for="height">Choose your feet</label>
            <select name="heightFeet" id="height" ng-model="heightFeet">
              <option value="">4'</option>
              <option value="">5'</option>
              <option value="">6'</option>
              <option value="">7'</option>
            </select>
          </div>
          <div class="col"> <label for="height">Choose your inches</label>
            <select name="heightInches" id="height" ng-model="heightInches">
              <option value="1">1"</option>
              <option value="2">2"</option>
              <option value="3">3"</option>
              <option value="4">4"</option>
              <option value="5">5"</option>
              <option value="6">6"</option>
              <option value="7">7"</option>
              <option value="8">8"</option>
              <option value="9">9"</option>
              <option value="10">10"</option>
            </select>
          </div>
        </div>
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

<script src="<?php echo $baseUrl; ?>assets/css/front/register.js"></script>
<script>
  $(function() {
    $("#birthday").datepicker();
  });
</script>
<?php
require("../master/template-footer.php");
?>