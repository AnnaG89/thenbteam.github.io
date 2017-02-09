// View profile
$("#profileWindow").click(function(e){
  alert("Clicked profile link");
  e.preventDefault();
  var photographerName = "Spenat";
  var photographerPicture = "<img src='img/profilePictureTest.jpg'  alt='profilePicture' />";
  var photographerCompany = "Das företag";
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

  var img1 = "<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg' alt>";
  var img2 = "<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg' alt>";
  var img3 = "<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg' alt>";
  var img4 = "<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg' alt>";
  var img5 = "<img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-5.jpg' alt>";

  $(".photographerName").html(photographerName);
  $(".photographerPicture").html(photographerPicture);
  $(".photographerCompany").html(photographerCompany);
  $(".photographerCity").html(photographerCity);
  $(".photographerWebsite").html(photographerWebsite);
  $(".hotographerContact").html(hotographerContact);
  $(".photographerFreeText").html(photographerFreeText);
  $(".img1").html(img1);
  $(".img2").html(img2);
  $(".img3").html(img3);
  $(".img4").html(img4);
  $(".img5").html(img5);

});
