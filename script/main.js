$(document).ready(function(){
 var signedInAs;

  // Login status
  $.getJSON("/api/loginstatus.php")

    .done(function(data){
                //alert("Page load data: " + data);
                console.log("Anropar checked login");
                console.log("status: " + data.status);
                console.log("firstname: " + data.firstname);
                console.log("lastname: " + data.lastname);
      if(data.status){ // Galet data.status
                console.log("Loggat in");
        $(".signOutMenu").show();
                console.log("Visar sign out");
        $(".signInMenu").hide();
                console.log("Göm sign in");
        $(".signedInAsWrapper").show();
        signedInAs = "Du är inloggad som " + data.firstname + " " + data.lastname ;
        $(".signedInAs").html(signedInAs);
      }
      else{
        console.log("Loggat ut");
        $(".signInMenu").show();
        console.log("Visa sign in");
        $(".signOutMenu").hide();
        console.log("Göm sign out");
        $(".signedInAsWrapper").hide();
        console.log("Dölj inloggad");
      }
    });

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

        console.log("Clicked confirm registration \n" +
        "\nName: " + firstName + " " + lastName +
        "\nCompany: " + company +
        "\nEmail: " + email +
        "\nPassword: " + password1 +
        "\nPassword: " + password2 +
        "\nCity: " + city +
        "\nWebsite: " + website);

        if(password1 === password2){

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
        }
        else {
          alert("Lösenorden matchar inte varandra");
        }
    });

    // Sign In form
    $("#signInWindow").on('click', '#logInButton', function () {
          var email = $('.emailSignIn').val();
          var password = $('.passwordSignIn').val();

        console.log( "\nEmail: " + email + "\nPassword: " + password);
        $.post( "api/checklogin.php?",
          {
            email: email,
            password: password} )
          .done(function(data){
            console.log("Success " + data);
            $("#signInWindow").modal('hide');
            location.reload();
          })
          .fail(function(error){
            console.log("Failed login" + error);
          });
    });

    // Sign out
    $("nav").on('click', '.signOutButton', function () {
          alert("Du har blivit utloggad");
      $.post("api/logout.php?")
    });

    // Recover Password (Funktionen är inte implementerad än)
    $("#recoverPasswordWindow").on('click', '#recoverPasswordButton', function (e) {
          e.preventDefault();
          var email = $('.emailRecover').val();

          alert("Clicked recover button \n" +
          "\nEmail: " + email);
    });


    // Search results
    searchResult();
});

// View profile
function showPhotographer(photographerId){
  console.log("Startat funktionen showPhotographer " + photographerId);

  $.post( "api/read2.php?",
    {id: photographerId} )
      .done(function(data){
        alert("Success: " + data + "\n" +
              "Firstname: " + data.firstname + "\n" +
              "Lastname: " + data.lastname + "\n" +
              "Company: " + data.company + "\n" +
              "Email: " + data.email + "\n" +
              "Profile Pic: " + data.profilepic + "\n" +
              "Instagram: " + data.insta + "\n" +
              "Website: " + data.website + "\n" +
              "City: " + data.city + "\n" +
              "Bio: " + data.bio + "\n" +
              "Pic 1 : " + data.pic1 + "\n" +
              "Pic 2 : " + data.pic2 + "\n" +
              "Pic 3 : " + data.pic3 + "\n" +
              "Pic 4 : " + data.pic4 + "\n" +
              "Pic 5 : " + data.pic5 + "\n");
      });

      /*
        `id`, `firstname`, `lastname`, `company`, `email`, `profilepic`, `insta`, `website`, `city`, `bio`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`
      */


  // Starta modal här
  $("#profileWindow").modal("show");

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

console.log("" +
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

};



// vid klick skicka get request
var searchResult = function(){
  $.getJSON("/api/read.php")
  .done(function(data){
    tableStart = "<table class='table table-hover table-condensed'>" ;
    for(var i = 0; i < data.length; i++){

      console.log("Hämtar info");
        tableStart += "<tr id=" + data[i].id + ">" + //<a href="">
            "<th><a href='#' onclick='showPhotographer("+ data[i].id +");'>" + data[i].firstname + " " + data[i].lastname + "</a></th>" +
            "<td class='textAlignCenter'><a href='#' onclick='showPhotographer("+ data[i].id +");'>" + data[i].company + "</a></td>" +
            "<td class='textAlignRight'><a href='#' onclick='showPhotographer("+ data[i].id +");'>" + data[i].city +"</a></td>" +
          "</tr>"; //</a>
        }
  tableStart += "</table>";
  console.log(tableStart);
  $(".searchResults").html(tableStart);
});
}
