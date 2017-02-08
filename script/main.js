$(document).ready(function(){



  // Registration form
  $("#registerWindow").on('click', '#registerConfirmButton', function (e) {
        e.preventDefault();
        var firstName = $('.first_name').val();
        var lastName = $('.last_name').val();
        var company = $('.company').val();
        var email = $('.email').val();
        var password1 = $('.password1').val();
        var password2 = $('.password2').val();
        var city = $('.city').val();
        var website = $('.website').val();

        alert("Clicked confirm registration \n" +
        "\nName: " + firstName + " " + lastName +
        "\nCompany: " + company +
        "\nEmail: " + email +
        "\nPassword: " + password1 +
        "\nPassword: " + password2 +
        "\nCity: " + city +
        "\nWebsite: " + website);

        //var url = "../api/register.php?";

        $.post( "../api/register.php?", { ffirstname: firstName, femail: email} ) //Todo: Ersätt med riktig url
        .done(function(data){
          console.log("success");
        }
        .fail(function(error){
          console.log("Failed register");
        });


    });

    // Sign In form
    $("#signInWindow").on('click', '#logInButton', function (e) {
          e.preventDefault();
          var email = $('.emailSignIn').val();
          var password = $('.passwordSignIn').val();


          alert("Clicked sign in \n" +
          "\nEmail: " + email +
          "\nPassword: " + password);

    });

    // Recover Password
    $("#recoverPasswordWindow").on('click', '#recoverPasswordButton', function (e) {
          e.preventDefault();
          var email = $('.emailRecover').val();


          alert("Clicked recover button \n" +
          "\nEmail: " + email);
    });





});
