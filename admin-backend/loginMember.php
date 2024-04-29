<?php
require("../config/config.php");
$title = "LoginMember | mmCupid";
$meta_content = "Online Dating | Myanmar Online Dating | find love | find lover";
$meta_keywords = "Online Dating,Myanmar Online Dating,find love,find lover";

if (isset($_POST['form-sub']) &&  $_POST['form-sub'] == 1) {
  $name = $mysql->real_escape_string($_POST['name']);
}
require("../master/template-header.php");


?>

<div class="container my-5" ng-app="myApp" ng-controller="myCtrl" ng-init="init()">
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <h1 class="fw-bold" style="font-size: 60px">Sign up</h1>
      <!-- form  -->
      <!--  -->
      <div class="">
        <div class="fw-medium" style="font-size: 14px;">Sign up with your email or phone number</div>
        <div class="">
          <input ng-model="name" placeholder="name" name="name" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" id="name" ng-blur="validate('name')" />
          <span class="text-danger" ng-if="error_name">{{ error_name_message }}</span>

          <input ng-model="password" id="password" placeholder="password" name="password" type="password" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" ng-blur="validate('password')" />
          <span class="text-danger" ng-if="error_password">{{ error_password_message }}</span>

          <input ng-model="confirm_password" id="confirm_password" placeholder="confirm_password" name="confirm_password" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" ng-blur="validate('confirm_password')" ng-change="validate('confirm_password')" />
          <span class="text-danger" ng-if="error_confirm_password">{{ error_confirm_password_message }}</span>

          <input ng-model="email" id="email" placeholder="email" name="email" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" ng-blur="validate('email')" />
          <span class="text-danger" ng-if="error_email">{{ error_email_message }}</span>

          <input ng-model="phone" placeholder="phone" name="phone" type="number" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />
          <input ng-model="birthday" placeholder="birthday" name="birthday" id="birthday" type="text" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;" />

          <select name="city" id="city" ng-model="city" class="form-control form-control-lg border border-1 border-black rounded rounded-4 mt-2" style="width:81vh;">
            <option value="">choose ur town</option>
            <option ng-repeat="city in cities" value=" {{city.id}} ">{{ city.name}}</option>
          </select>
          <span class="text-danger" ng-if="error_city">{{ error_city_message }}</span><br>



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
                  <option value="" selected>choose your height feet</option>
                  <option value="">4'</option>
                  <option value="">5'</option>
                  <option value="">6'</option>
                  <option value="">7'</option>
                </select>
              </div>
              <div class="col"> <label for="height">Choose your inches</label>
                <select name="heightInches" id="height" ng-model="heightInches">
                  <option value="" selected>choose your height inches</option>
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






          <h1>form2</h1>
          <div class="row">
            <div class="col-md-4" ng-repeat="hobby in hobbies">
              <div class="form-check form-check-inline">
                <input type="checkbox" ng-model="hobby" name="hobby[]" id="hobby-{{hobby.id}}" class="form-check-input" value="{{ hobby.id }}">
                <label type="checkbox" value="hobby-{{hobby.id}}" name="" id="" class="form-check-label">{{ hobby.name }}
              </div>
              <!-- <span class="text-danger" ng-if="error_hobby">{{ error_hobby_message }}</span><br> -->
            </div>
            <!-- <button class="btn btn-dark rounded rounded-5 btn-lg mt-4" style="width:81vh;" ng-click="step2()">
            Sign up
          </button> -->
            <input type="hidden" name="form-sub" value="1">
          </div>
          <!-- </form> -->

          <!-- <div class="my-4">Or</div> -->
          <!-- <button class="btn btn-outline-secondary fs-6 text-black fw-medium rounded-4 btn-lg" style="width:81vh;">
            <i class="bi bi-google"></i> Continue with Google
          </button> -->
          <button class="btn btn-dark rounded rounded-5 btn-lg mt-4" style="width:81vh;" ng-click="step1()">
            Sign up
          </button>
        </div>
        <div class="py-3" style="font-size: 14px;">
          Already have an account? <a href="#" class="text-black">Log in</a>
        </div>

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