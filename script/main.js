$(document).ready(function(){


  // Login status
  /*$.getJSON("/api/loginstatus.php")

    .done(function(data){
      if(data.status){
        $(".SignOutMenu").show();
        $(".SignInMenu").hide();
        $(".signedInAsWrapper").show();
        var signedInAs = "Your signed in as " + data.firstname + " " + data.lastname ;
        $(".signedInAs").html(signedInAs);
      }
      else{
        $(".SignInMenu").show();
        $(".SignOutMenu").hide();
        $(".signedInAsWrapper").hide();
      }
    });*/

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

        $.post( "/api/register.php?",
        { ffirstname: firstName,
          flastname: lastName,
          fcompany: company,
          femail: email,
          fpassword: password2,
          fcity: city,
          fwebsite: website} )
        .done(function(data){
          console.log("Success" + data);
        })
        .fail(function(error){
          console.log("Failed register" + error);
        });
    });

    // Sign In form
    $("#signInWindow").on('click', '#logInButton', function () {
          var email = $('.emailSignIn').val();
          var password = $('.passwordSignIn').val();

        console.log( "\nEmail: " + email + "\nPassword: " + password);

        $.post( "api/checklogin.php?",
          .done(function(data){
          {
            email: email,
            password: password} )
          .done(function(data){
            console.log("Success" + data);
          })
          .fail(function(error){
            console.log("Failed login" + error);
          });

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

    // View profile
    $(".testLink").click(function(e){
      e.preventDefault();

      var photographerName = "Fotografnamn";
      var photographerPicture = "<img src='img/profilePictureTest.jpg'  alt='profilePicture' />";
      var photographerCompany = "Företagsnamn";
      var photographerCity = "Staden";
      var photographerWebsite = "hemsidan";
      var photographerContact = "kontakten";
      var photographerFreeText = "<p>A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher." +
                                    "A lot of free text from this photagrapher. A lot of free text from this photagrapher.</p>";

      var img1 = '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg">';
      var img2 = '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg">';
      var img3 = '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg">';
      var img4 = '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">';
      var img5 = '<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-5.jpg">';

      alert("" +
      photographerName + "\n" +
      photographerPicture + "\n" +
      photographerCompany + "\n" +
      photographerCity + "\n" +
      photographerWebsite + "\n" +
      photographerContact + "\n\n" +
      photographerFreeText + "\n\n" +
      img1 + "\n" +
      img2 + "\n" +
      img3 + "\n" +
      img4 + "\n" +
      img5 + "\n");


      $(".photographerName").html(photographerName);
      $(".photographerPicture").html(photographerPicture);
      $(".photographerCompany").html(photographerCompany);
      $(".photographerCity").html(photographerCity);
      $(".photographerWebsite").html(photographerWebsite);
      $(".photographerContact").html(photographerContact);
      $(".photographerFreeText").html(photographerFreeText);
      $(".img1").html(img1);
      $(".img2").html(img2);
      $(".img3").html(img3);
      $(".img4").html(img4);
      $(".img5").html(img5);

    });





    searchResult();
});


// vid klick skicka get request
var searchResult = function(){
  $.getJSON("/api/read.php")
  .done(function(data){
    tableStart = "<table class='table table-hover table-condensed'>" ;
    for(var i = 0; i < data.length; i++){

      console.log("Hämtar info");
        tableStart += "<tr id=" + data[i].id + ">" +
            "<th>" + data[i].firstname + " " + data[i].lastname + "</th>" +
            "<td class='textAlignCenter'>" + data[i].company + "</td>" +
            "<td class='textAlignRight'>" + data[i].city +"</td>" +
          "</tr>";
        }
  tableStart += "</table>";
  console.log(tableStart);
  $(".searchResults").html(tableStart);
});
}
