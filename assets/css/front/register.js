var app = angular.module("myApp", []);
app.controller("myCtrl", function ($scope, $http) {
  $scope.cities = [];
  $scope.hobbies = [];
  $scope.message = "";

  $scope.name = "";
  $scope.password = "";
  $scope.confirm_password = "";
  $scope.email = "";
  $scope.phone = "";
  $scope.hobby = "";
  $scope.city = "";
  $scope.birthday = "";
  $scope.gender = "";
  $scope.education = "";
  $scope.about = "";
  $scope.heightFeet = "";
  $scope.heightInches = "";

  // error
  $scope.process_error = false;
  // $scope.error_name_message = "";

  //       $scope.process_error = false;
  $scope.error_name = false;
  $scope.error_password = false;
  $scope.error_email = false;
  $scope.error_confirm_password = false;
  $scope.error_city = false;
  $scope.error_hobby = false;

  // message
  $scope.error_name_message = "";
  $scope.error_password_message = "";
  $scope.error_email_message = "";
  $scope.error_confirm_password_message = "";
  $scope.error_city_message = "";
  $scope.error_hobby_message = "";

  $scope.init = function () {
    // alert("hello");

    // cities
    let req_url = base_url + "api/get_cities.php";
    $http.get(req_url).then(function (response) {
      // console.log(response.data);
      $scope.cities = response.data;
    });

    // hobbies
    let req_url2 = base_url + "api/get_hobbies.php";
    $http.get(req_url2).then(function (response) {
      // console.log(response.data);
      $scope.hobbies = response.data;
    });
  };

  $scope.step1 = function () {
    const name = $("#name").val();
    const password = $("#password").val();
    const confirm_password = $("#confirm_password").val();
    const city = $("#city").val();
    const email = $("#email").val();
    const hobby = $("#email").val();
    // console.log(name);
    if (name == "") {
      // console.log('hello');
      $scope.error_name = true;
      $scope.process_error = true;
      $scope.error_name_message = error_messages.a001 + "name";
    }
    // else {
    //   alert("have data")
    // }
    if (password == "") {
      // console.log('hello');
      $scope.error_password = true;
      $scope.process_error = true;
      $scope.error_password_message = error_messages.a001 + "password";
    }
    if (hobby == "") {
      // console.log("hello");
      $scope.error_hobby = true;
      $scope.process_error = true;
      $scope.error_hobby_message = error_messages.a001 + "hobby";
    }
    if (confirm_password == "") {
      // console.log('hello');
      $scope.error_confirm_password = true;
      $scope.process_error = true;
      $scope.error_confirm_password_message =
        error_messages.a001 + "confirm_password";
    }
    if (email == "") {
      // console.log('hello');
      $scope.error_email = true;
      $scope.process_error = true;
      $scope.error_email_message = error_messages.a001 + "email";
    }
    if (city == "") {
      // console.log('hello');
      $scope.error_city = true;
      $scope.process_error = true;
      $scope.error_city_message = error_messages.a001 + "city";
    }
    if ($scope.process_error == true) {
      // alert($scope.error_password_message);
      $scope.process_error == false;
    } else {
    }
  };
  // Reset error messages
  // alert("step1")
  //   $scope.process_error = false;
  //   $scope.error_name = false;
  //   $scope.error_password = false;
  //   $scope.error_email = false;
  //   $scope.error_confirm_password = false;

  //   // Validate form fields
  //   if ($scope.name == "") {
  //     $scope.error_name = true;
  //     $scope.process_error = true;
  //     $scope.error_name_message = "need to fill name"
  //   }
  //   if ($scope.password == "") {
  //     $scope.error_password = true;
  //     $scope.process_error = true;
  //   }
  //   if ($scope.email == "") {
  //     $scope.error_email = true;
  //     $scope.process_error = true;
  //   }
  //   if ($scope.confirm_password == "") {
  //     $scope.error_confirm_password = true;
  //     $scope.process_error = true;
  //   }

  //   if (!$scope.process_error) {
  //     let req_url = base_url + "api/get_hobbies.php";
  //     $http.get(req_url).then(function (response) {
  //       $scope.hobbies = response.data;
  //       // $scope.form1 = false;
  //       // $scope.form2 = true;
  //     });
  //   }
  // };

  // $scope.validate = function (field) {
  //   const form_field = $("#" + field).val();
  //   if (form_field === "") {
  //     switch (field) {
  //       case "name":
  //         $scope.error_name = true;
  //         break;
  //       case "password":
  //         $scope.error_password = true;
  //         break;
  //       case "confirm_password":
  //         $scope.error_confirm_password = true;
  //         break;
  //       case "email":
  //         $scope.error_email = true;
  //         break;
  //       default:
  //         break;
  //     }
  //   } else {
  //     switch (field) {
  //       case "name":
  //         $scope.error_name = false;
  //         break;
  //       case "password":
  //         $scope.error_password = false;
  //         break;
  //       case "confirm_password":
  //         const password = $("#password").val();
  //         const confirm_password = $("#confirm_password").val();
  //         if (password !== confirm_password) {
  //           $scope.error_confirm_password = true;
  //         } else {
  //           $scope.error_confirm_password = false;
  //         }
  //         break;
  //       case "email":
  //         $scope.error_email = false;
  //         break;
  //       default:
  //         break;
  //     }
  //   }
  // };

  $scope.validate = function (field) {
    const form_value = $("#" + field).val();
    // console.log(form_value);
    if (form_value == "") {
      switch (field) {
        case "name":
          $scope.error_name = true;
          //  $scope.process_error = true;
          $scope.error_name_message = error_messages.a001 + "name";
          break;
        case "password":
          $scope.error_password = true;
          //  $scope.process_error = true;
          $scope.error_password_message = error_messages.a001 + "password";
          break;

        case "email":
          $scope.error_email = true;
          // $scope.process_error = true;
          $scope.error_email_message = error_messages.a001 + "email";
          break;

        case "confirm_password":
          $scope.error_confirm_password = true;
          //  $scope.process_error = true;
          $scope.error_confirm_password_message =
            error_messages.a001 + "confirm_password";
          break;

        default:
          break;
      }
      // if (field == "name") {
      //   $scope.error_name = true;
      //   //  $scope.process_error = true;
      //   $scope.error_name_message = error_messages.a001 + "name";
      //   }
      // }
    } else {
      switch (field) {
        case "name":
          $scope.error_name = false;
          //  $scope.process_error = true;
          $scope.error_name_message = "";
          break;
        case "password":
          $scope.error_password = false;
          //  $scope.process_error = false;
          $scope.error_password_message = "";
          break;

        case "email":
          $scope.error_email = false;
          // $scope.process_error = false;
          $scope.error_email_message = "";
          break;

        case "confirm_password":
          // $scope.error_confirm_password = false;
          // //  $scope.process_error = false;
          // $scope.error_confirm_password_message = "";
          const password = $("#password").val();
          const confirm_password = $("#confirm_password").val();
          // alert(confirm_password);
          if (password != confirm_password) {
            $scope.error_confirm_password = true;
            //  $scope.process_error = false;
            $scope.error_confirm_password_message =
              error_messages.a003;
          } else {
            $scope.error_confirm_password = false;
            //  $scope.process_error = false;
            $scope.error_confirm_password_message = "";
          }
          break;

        default:
          break;
      }
      // console.log(form_value);

      // console.log(field);
    }
  };

  $scope.step2 = function () {
    $("#my-form").submit();
  };
});
