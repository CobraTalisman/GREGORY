<!DOCTYPE html>
<html>
<title>E-COMMERCE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.tag, .fa {cursor:pointer}
.tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Plans</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">About</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Contact</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="panel">
    <h1><b>MARKETING</b></h1>
    <p>Analytics & Optimization</p>
  </div>

  <!-- Slideshow -->
  <div class="container">
    <div class="display-container mySlides">
      <img src="E-commerce.jpeg" style="width:100%">
      <div class="display-topleft container padding-32">
        <span class="white padding-large animate-bottom">Market Fusion</span>
      </div>
    </div>
    <div class="display-container mySlides">
      <img src="crafters.jpg" style="width:100%">
      <div class="display-middle container padding-32">
        <span class="white padding-large animate-bottom">Bold Buyers</span>
      </div>
    </div>
    <div class="display-container mySlides">
      <img src="commerce.webp" style="width:100%">
      <div class="display-topright container padding-32">
        <span class="white padding-large animate-bottom">Prime Picks</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="container dark-grey padding xlarge">
      <div class="left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left hover-text-teal"></i></div>
      <div class="right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right hover-text-teal"></i></div>
    
      <div class="center">
        <span class="tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  
  <!-- Grid -->
  <div class="row container">
    <div class="center padding-64">
      <span class="xlarge bottombar border-dark-grey padding-16">What We Offer</span>
    </div>
    <div class="col l3 m6 w3-light-grey container padding-16">
      <h3>Design</h3>
      <p>Strike a balance between aesthetics and optimization for conversion.</p>
    </div>

    <div class="col l3 m6 w3-grey w3-container padding-16">
      <h3>Branding</h3>
      <p>Craft a cohesive brand identity that sets my e-commerce business apart.</p>
    </div>

    <div class="col l3 m6 w3-dark-grey container padding-16">
      <h3>Consultation</h3>
      <p>Enhance customer engagement in the competitive e-commerce landscape.</p>
    </div>

    <div class="col l3 m6 black container padding-16">
      <h3>Promises</h3>
      <p>Delivering excellent customer service and providing high-quality products.</p>
    </div>
  </div>

  <!-- Grid -->
  <div class="row-padding" id="plans">
    <div class="center padding-64">
      <h3>Pricing Plans</h3>
      <p>Reasonable price tag.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul border w3-center hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>Certified</b> Goods</li>
        <li class="w3-padding-16"><b>Budget</b> friendly</li>
        <li class="w3-padding-16"><b>Money</b> Value</li>
        <li class="w3-padding-16"><b>Base</b> price</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 49</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>Promotional</b> messages</li>
        <li class="w3-padding-16"><b>Discounted</b> price</li>
        <li class="w3-padding-16"><b>Price</b> validity </li>
        <li class="w3-padding-16"><b>Feature</b> differentiation</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 99</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Enroll in</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>Target</b> audience</li>
        <li class="w3-padding-16"><b>Limited</b> editions</li>
        <li class="w3-padding-16"><b>Pricing</b> transparency</li>
        <li class="w3-padding-16"><b>Value-added</b> Services</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 199</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Promised payout</button>
        </li>
      </ul>
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Who We Are</span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="captures.webp" alt="Tommy" style="width:100%">
        <div class="w3-container">
          <h3>Tommy Egan</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Our vision,leadership & strategic decisions shape the success of our e-commerce business.</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="hefee.jpg" alt="Hiram" style="width:100%">
        <div class="w3-container">
          <h3>Hiram Lodge</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Shaping the brand's visual identity and creating a memorable engaging experience for customers.</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="lili.jpg" alt="Betty" style="width:100%">
        <div class="w3-container">
          <h3>Betty cooper</h3>
          <p class="w3-opacity">Designer</p>
          <p>Shaping the visual identity of the e-commerce brand and creating engaging experiences that drive customer engagements.</p>
          <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="name" required placeholder="Tommy Egan">
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required placeholder="CobraTalisman@gmail.com">
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="subject" required placeholder="Customer engagements & E-Commerce analytics">
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="message" required placeholder="Provide Quality Goods and give Customer Satisfaction">
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Footer</h4>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="web-com-s-ecommerce-solution-the best-shopify-alternative.png" title="shopify" target="_blank" class="w3-hover-text-green">Talisman</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<!DOCTYPE html>
<html>
<title>Company Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>User-friendly interface for easy navigation and quick checkout.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Feedback and co-creation:Involve the customers in the product development process that fuels passion and loyalty.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Consistent branding: Maintaining consistency in design elements and imagery to reinforce our brand identity and enhance recognition.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>24/7 availability: Ensure assistance is available whenever customers need it.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We specialise in design.</h3>
      <p>Design competitions: Collaborate with emerging designers to showcase unique and innovative products.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="design.jpg" alt="Website" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="sikora.webp" alt="Egan" style="width:100%">
        <div class="w3-container">
          <h3>Tommy Egan</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>We believe that design is more than just aesthetics.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="lodge era.jpg" alt="Lodge" style="width:100%">
        <div class="w3-container">
          <h3>Hiram Lodge</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Our goal is to captivate,inspire and provoke thought through composition.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="universal.webp" alt="Omar" style="width:100%">
        <div class="w3-container">
          <h3>Omar Hardwick</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>We understand the power of visual storytelling in crafting memorable online experiences.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="cooper.jpg" alt="Cooper" style="width:100%">
        <div class="w3-container">
          <h3>Betty Cooper</h3>
          <p class="w3-opacity">Designer</p>
          <p>We believe that design has the power to shape perceptions and transform ordinary moments into extraordinary experiences.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">21+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">66+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">95+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">163+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="canon.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="veneta.avif" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Designer bag">
    </div>
    <div class="w3-col l3 m6">
      <img src="gucci.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Gucci shoes">
    </div>
    <div class="w3-col l3 m6">
      <img src="holder.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Paste holder">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="tracker.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Tracker hat">
    </div>
    <div class="w3-col l3 m6">
      <img src="muchachos.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Happy clients">
    </div>
    <div class="w3-col l3 m6">
      <img src="steeering.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Steering wheel">
    </div>
    <div class="w3-col l3 m6">
      <img src="sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A  speaker">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image"></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Brand identity Development:<br>
     We excel in crafting compelling brand identities that resonates with target audience and foster brand loyalty.</p>
      <p>Data analytics & Optimization:<br>
      We leverage data analytics tools to track user behavior and make data-driven design decisions aimed at 
      improving the E-commerce experience.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:70%">70%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:80%">80%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:89%">89%</div>
        <img src="pichazz.jpg" alt="photography" style="width:100%;margin-top:47px>
      </div>
    </div>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Detroit, Michigan</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +13 4506727</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: CobraTalisman@gmail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Tommy Egan" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="CobraTalisman@gmail.com" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Fostering work ethic" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Keeping up to the high standards" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <img src="dangerzz.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Cobra</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>


</body>
</html>