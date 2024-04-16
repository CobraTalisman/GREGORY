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
        <img src="/w3images/team1.jpg" alt="Tommy" style="width:100%">
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
        <img src="/w3images/team2.jpg" alt="Hiram" style="width:100%">
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
        <img src="/w3images/team3.jpg" alt="Betty" style="width:100%">
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
  <p>Powered by <a href="web-com-s-ecommerce-solution-the best-shopify-alternative.png" title="shopify" target="_blank" class="w3-hover-text-green">Talisman.css</a></p>
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

</body>
</html>
