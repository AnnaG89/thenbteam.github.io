/*$(document).on('click', '#logInButton', function () {
    var email;
    var password;
    alert("Clicked the log in button");
});*/
$(document).ready(function(){
  /*function test(btn) {
    var val = btn.form.querySelector('input[name="Montant"]').value;
    alert(val);
  }*/

  $("#registerWindow").on('click', '#registerConfirmButton', function (e) {
        e.preventDefault();
        var firstName = $('.first_name').val();
        /*var lastName = $('.last_name').val();
        var comapny = $('.company').val();*/
        var email = $('.email').val();
        /*var password1 = $('.password1').val();
        var password2 = $('.password2').val();
        var city = $('.city').val();
        var website = $('.website').val();*/

        console.log(firstName);
        alert("Clicked confirm registration " + firstName + " " + email);

        //var url = "../api/register.php?";

        $.post( "api/register.php?", { firstname: firstName, email: email} );


    });


    /*var firstName = $("#first_name").val();
    var lastName;
    var email;
    var password1;
    var password2;
    var city;
    var website;

      console.log(firstName);
  */


/*
$(document).on('click', '#recoverPasswordButton', function () {
  var email;

    alert("Clicked the recover password button");*/
});
