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

        $.post( "newbie.zocomutbildning.se/api/register.php?",
        { ffirstname: firstName,
          flastname: lastName,
          fcompany: company,
          femail: email,
          fpassword: password2,
          fcity: city,
          fwebsite: website} ) //Todo: Ersätt med riktig url
        .done(function(data){
          console.log("Success" + data);
        })
        .fail(function(error){
          console.log("Failed register" + error);
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


        /*  $.post( "api/register.php?", //Todo: Ersätt med riktig url  byt till rätt variabel
          {
            femail: email,
            fpassword: password2,
          .done(function(data){
            console.log("Success" + data);
          })
          .fail(function(error){
            console.log("Failed login" + error);
          });*/

    });

    // Recover Password
    $("#recoverPasswordWindow").on('click', '#recoverPasswordButton', function (e) {
          e.preventDefault();
          var email = $('.emailRecover').val();

          alert("Clicked recover button \n" +
          "\nEmail: " + email);

          /*$.post( "api/register.php?", //Todo: Ersätt med riktig url byt till rätt variabel
            {
              femail: email,
            .done(function(data){
              console.log("Success" + data);
            })
            .fail(function(error){
              console.log("Failed recover" + error);
            });*/
    });





    searchResult();
});
// vid klick skicka get request
var searchResult = function() {
  console.log("Funkar");
  var listStart = "<ol>";
  for(var i = 0; i < 20; i++) {  // (var i in data)
    listStart += "<table class='table'>" +
      "<tr>" +
        "<th>Awesome Name</th>" +
        "<th>The awesome company</th>" +
        "<td>Not that awesome city</td>" +
      "</tr>" +
    "</table>";

  }
  listStart += "</ol>";
  console.log(listStart);
  $(".searchResults").html(listStart);
};
