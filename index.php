<!DOCTYPE html>
<html>

<head>
  <title>Big Red Bikes</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/ContactValidation.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- Smooth Scrolling (added by Peam) from https://css-tricks.com/snippets/jquery/smooth-scrolling/ User: SquirFly-->
  <script>
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>
</head>

<body>

  <!-- Code for single page design source: https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_start_page&stacked=h -->
  <?php include("includes/header.php"); ?>

  <!-- Header -->
  <header id="top" class="w3-container w3-red w3-center">
    <h1 id="main-title" class="w3-margin w3-jumbo">BIG RED BIKES</h1>
    <p class="w3-xlarge">Get riding with Cornell's new bike share system!</p>
  </header>

  <!-- SERVICE (How it works, information) -->
  <div id="service" class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <!-- <div class="w3-twothird"> -->
      <h1 class="bodyHeader">MEET THE BIKE</h1>
      <div id="zagster">
        <div id="zagsterPic">
          <img alt="Zagster Bike" src="images/ZagsterBike.jpg">
        </div>
        <ul id="zagsterInfo">
          <li>Adjustable seat height fits adult riders</li>
          <li>Automatic front and rear lights keep you safe</li>
          <li>Bluetooth Electronic Ring Lock</li>
          <li>Fenders and a chain guard keep you clean</li>
        </ul>
      </div>
      <h1 class="bodyHeader">HOW IT WORKS</h1>
      <div id="howItWorks">
        <div class="howItWorks-group">
          <div class="howItWorks">
            <!--IMAGE SOURCE:designed by Joaquin-->
            <img class="howItWorks-pic" alt="Join image" src="images/join.png">
          </div>
          <p class="howItWorks-info">Check out bikes from your phone with the Zagster app.</p>
          <form id="downloadbutton" method="get" action="https://www.zagster.com/app" target="_blank">
            <button id="appDownloadButton" type="submit">DOWNLOAD ZAGSTER</button>
          </form>
        </div>
        <div class="howItWorks-group">
          <div class="howItWorks">
            <!--IMAGE SOURCE:designed by Joaquin-->
            <img class="howItWorks-pic" alt="Unlock image" src="images/unlock.png">
          </div>
          <p class="howItWorks-info">Receive a single-use code to unlock your bike.</p>
        </div>
        <div class="howItWorks-group">
          <div class="howItWorks">
            <!--IMAGE SOURCE:designed by Joaquin-->
            <img class="howItWorks-pic" alt="Ride image" src="images/ride.png">
          </div>
          <p class="howItWorks-info">Secure your bike with on-board lock during mid-ride stops.</p>
        </div>
        <div class="howItWorks-group">
          <div class="howItWorks">
            <!--IMAGE SOURCE:designed by Joaquin-->
            <img class="howItWorks-pic" alt="Return image" src="images/return.png">
          </div>
          <p class="howItWorks-info">End your ride at one of our 5 stations.</p>
        </div>
      </div>
      <p> No smart phone? Text SMS to <span class="CornellRedFont">(202) 999 - 3924</span> to ride by text </p>
      <h1 class="bodyHeader">LOCATIONS</h1>
      <p> Learn more about our locations by clicking on one of the bikes! </p>
      <!-- Google Map API Insert (Edited) https://developers.google.com/maps/documentation/javascript/adding-a-google-map#key-->
      <div id="map">
        <script>
        function initMap() {
          var cornell = {lat: 42.449700, lng: -76.477700};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: cornell
          });
          var mapicon = "images/bicycle.png"
          var contentStringBalch =
          '<h2 id="firstHeading">Balch Hall</h2>'+
          '<p> Cornell University </p>'+
          '<p> 600 Thurston Ave </p>' +
          '<p> Ithaca, NY 14853</p>' +
          '<p> United States </p>'
          var infowindowBalch = new google.maps.InfoWindow({
            content: contentStringBalch
          });
          var balch = new google.maps.Marker({
            position: {lat:42.453490, lng:-76.478752},
            map: map,
            title: "balch",
            icon: mapicon,
          });
          balch.addListener('click', function() {
            infowindowBalch.open(map, balch);
          });
          var contentStringKennedy =
          '<h2 id="firstHeading">Kennedy Hall</h2>'+
          '<p> Cornell University </p>'+
          '<p> 222 Tower Rd </p>' +
          '<p> Ithaca, NY 14853</p>' +
          '<p> United States </p>'
          var infowindowKennedy = new google.maps.InfoWindow({
            content: contentStringKennedy
          });
          var kennedy = new google.maps.Marker({
            position: {lat:42.447853, lng:-76.478801},
            map: map,
            title: "kennedy",
            icon: mapicon,
          });
          kennedy.addListener('click', function() {
            infowindowKennedy.open(map, kennedy);
          });
          var contentStringDairyBar =
          '<h2 id="firstHeading">Stocking Hall (Cornell Dairy Bar)</h2>'+
          '<p> Cornell University </p>'+
          '<p> 411 Tower Rd </p>' +
          '<p> Ithaca, NY 14853</p>' +
          '<p> United States </p>'
          var infowindowDairyBar = new google.maps.InfoWindow({
            content: contentStringDairyBar
          });
          var dairybar = new google.maps.Marker({
            position: {lat:42.447534, lng:-76.471235},
            map: map,
            title: "dairybar",
            icon: mapicon,
          });
          dairybar.addListener('click', function() {
            infowindowDairyBar.open(map, dairybar);
          });
          var contentStringGrumman =
          '<h2 id="firstHeading">Grumman Hall</h2>'+
          '<p> Cornell University </p>'+
          '<p> 505 Campus Rd </p>' +
          '<p> Ithaca, NY 14853</p>' +
          '<p> United States </p>'
          var infowindowGrumman = new google.maps.InfoWindow({
            content: contentStringGrumman
          });
          var grumman = new google.maps.Marker({
            position: {lat:42.445161, lng:-76.479325},
            map: map,
            title: "grumman",
            icon: mapicon,
          });
          grumman.addListener('click', function() {
            infowindowGrumman.open(map, grumman);
          });
          var contentStringStimson =
          '<h2 id="firstHeading">Olin Library (Between Olin and Stimson)</h2>'+
          '<p> Cornell University </p>'+
          '<p> 204 East Ave </p>' +
          '<p> Ithaca, NY 14853</p>' +
          '<p> United States </p>'
          var infowindowStimson = new google.maps.InfoWindow({
            content: contentStringStimson
          });
          var stimson = new google.maps.Marker({
            position: {lat:42.447789, lng:-76.483677},
            map: map,
            title: "stimson",
            icon: mapicon,
          });
          stimson.addListener('click', function() {
            infowindowStimson.open(map, stimson);
          });
        }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBygKmgSLDm4npzH7BjIxaWreM1R60doco&callback=initMap">
        </script>
      </div>
      <!-- </div> -->
      <h5>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></h5>
      <div id=locations>
        <div class="location">
          <p>OLIN</p>
        </div>
        <div class="location">
          <p>GRUMMAN</p>
        </div>
        <div class="location">
          <p>DAIRY BAR</p>
        </div>
        <div class="location">
          <p>KENNEDY</p>
        </div>
        <div class="location">
          <p>BALCH</p>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <div id="Pricing" class="w3-row-padding w3-container">
      <div class="w3-content">
        <!-- <div class="w3-twothird"> -->
        <h1 class="bodyHeader">PRICING</h1>
        <h3 class=""> Bike Share Rates and Usage Fees </h3>
        <p><span class="CornellRedFont">Annual cornell.edu membership:</span>  $30 (first hour is free; $3/hour charged after the first 60 minutes)</p>
        <p><span class="CornellRedFont">Annual public membership:</span>  $60 (first hour is free; $3/hour charged after the first 60 minutes)</p>
        <p><span class="CornellRedFont">30-day membership:</span>  $15 (first hour is free; $3/hour charged after the first 60 minutes)</p>
        <p><span class="CornellRedFont">Pay-as-You-Ride:</span> $3/hour (max charge for $30 for 24 hours), no membership is required </p>
      </div>
    </div>
  </div>

    <div id="FAQS" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
      <div class="w3-content">
        <!-- <div class="w3-twothird"> -->
        <h1 class="bodyHeader">FREQUENTLY ASKED QUESTIONS</h1>
        <h2 class="CornellRedFont">RENTAL</h2>
        <h3>When can I join the bike share?</h3>
        <p>Everyone 18 and over! Cornell students, faculty and staff as well as visitors and community members are all welcome to join!</p>
        <h3>How long can I take the bike out for?</h3>
        <p>In order to make sure bikes are available to everyone, overtime fees are charged for rentals lasting more than 24 hours.</p>
        <h3>Can I check out more than one bike at a time?</h3>
        <p>No. All riders must check out their own bike in order to sign the Zagster Rider Agreement. Campus groups or departments interested in group rentals should <a href="#contact" title=contactus>contact us</a> at least 7 days in advance for special arrangements.</p>
        <h3> I forgot to end my rental on time and got charged! Please forgive me! </h3>
        <p> We’ve got your back! Zagster offers a one-time “forgetfulness forgiveness” refund on your late fee. Just send an email at <a href="mailto:support@zagster.com">support@zagster.com</a> and we’ll get it taken care of.</p>
        <h2 class="CornellRedFont">MAINTENANCE</h2>
        <h3>What happens if the bike breaks down?</h3>
        <p>Please contact Zagster support at 202-999-3924 OR email <a href="mailto:support@zagster.com">support@zagster.com</a></p>
        <p>Return the bike to the nearest Zagster station. Once it's locked there, end your trip. We'll get the bike fixed up, but in the meantime you're free to start a ride on a new bike and get on your way</p>
        <h3>What happens if I break something?</h3>
        <p> Please report any damage to 202-999-3924 so we can get it fixed up for the next rider.</p>
        <h3>What happens if I lose the bike or it gets stolen?</h3>
        <p>If you believe your Zagster bike has been stolen, call Zagster Support at 202-999-3924 right away! You will need to complete an Incident Report and may be charged for the cost of replacing a lost or stolen bike. Support is open 24/7!</p>
        <h2 class="CornellRedFont"> LOCKS </h2>
        <h3>The lock won't open!</h3>

        <p>1. Make sure there are no spokes making contact with the ring lock. Sometimes a spoke will seat up against the ring lock with enough pressure to keep the ring lock from retracting.</p>
        <p>2. Double check that you are entering the correct code, and try again after waiting for 30 seconds.</p>

        <h3>The lock won't close!</h3>

        <p>1. Make sure there are no spokes in the way. Sometimes a spoke will line up in such way with the ring lock that the spoke will block the ring from closing.</p>
        <p>2. If you have held the lock button until the light flashes, you should hear a mechanical noise from the ring lock itself. This mean the ring lock is armed and ready to use. If you’ve pressed and held the button but heard no noise, there is a good chance the lock is already armed, and you can simply press down the orange tab to lock the ring.</p>
        <p>If you cannot secure your bike, please call Zagster support at 202-999-3924 right away!</p>

        <h3>How should I lock my bike?</h3>
        <p>Try to lock both the frame and the front wheel to a bike rack. Users are responsible for the cost of replacing the bike if it is stolen. </p>
        <h2 class="CornellRedFont">SAFETY</h2>
        <h3>Do I have to wear a helmet?</h3>

        <p>We strongly recommend that all riders wear helmets.</p>

        <h3>Where can I get a helmet?</h3>

        <p>Riders are currently responsible for providing their own helmets. Bike helmets are available for sale in all bike stores in Ithaca. </p>

        <h3>Is Big Red Bikes liable if I get in an accident?</h3>

        <p>No, all users have signed a liability waiver during registration and at every check out instance.</p>
      </div>
    </div>
  <!-- </div> -->

  <!-- ABOUT (Team) -->
  <div id="about" class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">

      <!-- <div class="w3-twothird"> -->
      <h1 class="bodyHeader">ABOUT</h1>
      <!--This slideshow code was sourced from: https://www.w3schools.com/w3css/w3css_slideshow.asp -->
      <div id="slideshow" class="w3-content w3-display-container">
        <img class="mySlides" alt="BRB pics" src="images/aboutImage1.jpg">
        <img class="mySlides" alt="BRB pics" src="images/aboutImage2.jpg">
        <img class="mySlides" alt="BRB pics" src="images/aboutImage3.jpg">
        <img class="mySlides" alt="BRB pics" src="images/aboutImage4.jpg">
        <img class="mySlides" alt="BRB pics" src="images/aboutImage5.jpg">
        <!--IMAGE SOURCES: https://www.facebook.com/CornellBigRedBikes/photos/?tab=album&album_id=1505516929482678 -->
        <button class="w3-button w3-white w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-white w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

      <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
      </script>
      <div>
        <p> Big Red Bikes is a student-run, non-profit organization providing bike share service to the Cornell community. Students working in Big Red Bikes have the unique chance to impact Cornell's campus as part of an innovative business practising social entrepreneurship. Our staff is made up of students studying Urban Planning, Business, Engineering, and much more.</p>
        <p>This interdisciplinary team works with the campus administration and student groups to serve the Cornell Community while constantly expanding and improving our services.</p>
      </div>
      <h1 class="bodyHeader">OUR TEAM</h1>
      <div id="captionGroup">
        <div class="captionGroup-group">
          <h2 class="captionGroupHeader">BUSINESS</h2>
          <div class="captionGroup"> <!--div for styling -->
            <img class="captionGroup-pic" alt="Join image" src="images/business.png">
            <!-- IMAGE SOURCE: Designed by Joaquin -->
          </div>
        </div>
        <div class="captionGroup-group">
          <h2 class="captionGroupHeader">MARKETING</h2>
          <div class="captionGroup">
            <img class="captionGroup-pic" alt="Unlock image" src="images/marketing.png">
            <!-- IMAGE SOURCE: Designed by Joaquin -->
          </div>
        </div>
        <div class="captionGroup-group">
          <h2 class="captionGroupHeader">OPERATIONS</h2>
          <div class="captionGroup">
            <img class="captionGroup-pic" alt="Ride image" src="images/operations.png">
            <!--IMAGE SOURCE: Designed by Joaquin -->
          </div>
        </div>
        <div class="captionGroup-group">
          <h2 class="captionGroupHeader">R & D</h2>
          <div class="captionGroup">
            <img class="captionGroup-pic" alt="Return image" src="images/research.png">
            <!-- IMAGE SOURCE: Designed by Joaquin -->
          </div>
        </div>
      </div>
      <div id="invite">
        <h2 class="teamHeader">Want to join us?</h2>
        <p> New members will have the opportunity to take the lead on high profile campus projects as part of our Business, Marketing, Operations and Research & Development Teams. We have an open and competitive recruitment process in which we welcome students to attend our weekly meetings and take on projects based on personal creativity and drive.</p>
        <p class="teamHeader">Email us at <a href="mailto:bigredbikes@cornell.edu">bigredbikes@cornell.edu</a></p>
      </div>

    </div>
  </div>
  <!-- </div> -->

  <script>
  // Used to toggle the menu on small screens when clicking on the menu button
  function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else {
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

</body>

</html>
