@extends('frontend.layouts.master')
@section('title', 'Adivaa || Adiva Ring')
@section('main-content')
<!-- ==================== Left Menu header ==================== -->
<div class="hamenu">
   <div class="close-menu cursor-pointer">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" width="20px" height="20px" viewBox="0 0 29.125 28.688" enable-background="new 0 0 29.125 28.688"
         xml:space="preserve">
         <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF"
            d="M14.592,15.716c-0.109,0.144-0.172,0.247-0.253,0.331
            c-3.77,3.772-7.541,7.541-11.309,11.313c-0.293,0.293-0.612,0.472-1.036,0.353c-0.675-0.191-0.922-0.982-0.477-1.522
            c0.069-0.083,0.151-0.158,0.228-0.235c3.755-3.758,7.51-7.514,11.268-11.27c0.077-0.076,0.17-0.135,0.257-0.201
            c0.017-0.044,0.034-0.088,0.052-0.131c-0.104-0.06-0.227-0.1-0.308-0.182C9.248,10.412,5.483,6.649,1.731,2.876
            c-0.182-0.182-0.325-0.458-0.37-0.71C1.293,1.771,1.5,1.456,1.862,1.271c0.362-0.186,0.71-0.136,1.029,0.108
            C2.978,1.444,3.05,1.528,3.127,1.605c3.743,3.741,7.486,7.482,11.228,11.225c0.076,0.076,0.136,0.171,0.333,0.311
            c0.059-0.104,0.099-0.227,0.181-0.309c3.773-3.78,7.551-7.557,11.324-11.338c0.303-0.303,0.633-0.478,1.064-0.343
            c0.643,0.201,0.881,0.96,0.468,1.493c-0.079,0.101-0.175,0.188-0.266,0.279c-3.741,3.743-7.483,7.485-11.225,11.229
            c-0.084,0.083-0.177,0.157-0.289,0.255c0.104,0.109,0.183,0.194,0.265,0.276c3.77,3.769,7.542,7.538,11.306,11.314
            c0.179,0.18,0.33,0.428,0.397,0.671c0.101,0.371-0.122,0.763-0.454,0.954c-0.336,0.194-0.753,0.167-1.062-0.076
            c-0.092-0.073-0.174-0.162-0.258-0.246c-3.75-3.749-7.5-7.497-11.249-11.246C14.808,15.97,14.733,15.877,14.592,15.716z" />
      </svg>
   </div>
   <div class="container-fluid rest d-flex">
      <div class="menu-links">
         <ul class="main-menu rest">
            <li>
               <div class="o-hidden">
                  <div class="link cursor-pointer dmenu">
                     <span class="fill-text" data-text="Shop">Shop</span>
                     <i></i>
                  </div>
               </div>
               <div class="sub-menu">
                  <ul>
                     <li><a href="#" class="sub-link">Adivaa Ring</a></li>
                     <li><a href="#" class="sub-link">Led Bag</a></li>
                     <li><a href="#" class="sub-link">Drop Tag</a></li>
                     <li><a href="#" class="sub-link">Power Track & Sockets</a></li>
                  </ul>
               </div>
            </li>
            <li>
               <div class="o-hidden">
                  <div class="link cursor-pointer dmenu">
                     <span class="fill-text" data-text="Latest Products">Latest Products</span>
                     <i></i>
                  </div>
               </div>
               <div class="sub-menu">
                  <ul>
                     <li><a href="#" class="sub-link">Adivaa Ring</a></li>
                     <li><a href="#" class="sub-link">Led Bag</a></li>
                     <li><a href="#" class="sub-link">Drop Tag</a></li>
                     <li><a href="#" class="sub-link">Power Track & Sockets</a></li>
                  </ul>
               </div>
            </li>
            <li>
               <div class="o-hidden">
                  <a href="#" class="link"><span class="fill-text" data-text="About Us">About Us</span></a>
               </div>
            </li>
            <li>
               <div class="o-hidden">
                  <a href="#" class="link"><span class="fill-text" data-text="Blog">Blog</span></a>
               </div>
            </li>
            <li>
               <div class="o-hidden">
                  <a href="#" class="link"><span class="fill-text" data-text="Contact Us">Contact Us</span></a>
               </div>
            </li>
         </ul>
      </div>
      <div class="cont-info valign">
         <div class="text-center full-width">
            <div class="logo"><img src="assets/imgs/adiva-logo.svg" alt="logo"></div>
            <div class="social-icon mt-40">
               <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-instagram"></i></a>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="item mt-30">
               <h5> S-15, 2nd floor, <br> Aditya Mega Mall, Indirapuram,<br> Ghaziabad - 201014</h5>
            </div>
            <div class="item mt-10">
               <h5><a href="mailto:contact@adivaasmart.com">contact@adivaasmart.com</a></h5>
               <h5 class="underline"><a href="tel:+91 8008146642">+91 8008146642</a></h5>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ==================== Left Menu header ==================== -->
<div id="smooth-wrapper">
   <div id="smooth-content">
      <!-- <main> -->
      <!-- ==================== Start Hero Banner ==================== -->
      <div class="hero-banner inner-banner ring-banner">
         <div class="container">
            <div class="banner-title">
               <h1 data-aos="fade-right" data-aos-delay="600">Adivaa Smart <span>Ring</span></h1>
               <p data-aos="fade-right" data-aos-delay="800">Best In Class With Highly Accurate Data Report.</p>
               <div class="banner-button mt-5" data-aos="fade-right" data-aos-delay="1000">
                  <a href="#" class="buy-btn" title="buy_now">Buy Now</a>
               </div>
            </div>
         </div>
      </div>
      <!-- ==================== End Hero Banner ==================== -->
      <!-- ==================== Ring Benefits ==================== -->
      <section class="section-padding ring-benefits">
         <div class="container">
            <div class="sec-head mb-50" data-aos="fade-up">
               <div class="row text-center">
                  <div class="col-lg-12" data-aos="fade-up">
                     <h6 class="sub-head">Benefits of Smart Rings <br>Future of Wearables</h6>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row align-items-center ">
               <div class="col-lg-4 text-right">
                  <div class="ring-benifits-list left-ring-list">
                     <ul>
                        <li data-aos="fade-right" data-aos-delay="400">body temprature <i
                           class="fa-solid fa-temperature-three-quarters"></i></li>
                        <li data-aos="fade-right" data-aos-delay="600">Stress Level <i
                           class="fa-brands fa-connectdevelop"></i></li>
                        <li data-aos="fade-right" data-aos-delay="700">HRV <i class="fa-solid fa-heart-pulse"></i></li>
                        <li data-aos="fade-right" data-aos-delay="800">SPO2 <i class="fa-solid fa-gauge"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 text-center">
                  <div class="ring-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                     <div class="ring-round"><img src="assets/imgs/ring-page/ring-round.png"></div>
                     <h5>Smart <span> Ring</span></h5>
                  </div>
               </div>
               <div class="col-lg-4 text-left">
                  <div class="ring-benifits-list">
                     <ul>
                        <li data-aos="fade-left" data-aos-delay="400"><i class="fa-solid fa-droplet"></i> Menstrual Cycle
                        </li>
                        <li data-aos="fade-left" data-aos-delay="600"><i class="fa-solid fa-heart-circle-check"></i> Health
                           Monitoring 
                        </li>
                        <li data-aos="fade-left" data-aos-delay="700"><i class="fa-solid fa-shoe-prints"></i> Step Count </li>
                        <li data-aos="fade-left" data-aos-delay="800"><i class="fa-solid fa-fire-burner"></i> Count calorie
                           Burned 
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==================== Start Best Products ==================== -->
      <!-- ======================== Ring Waterproof ======================= -->
      <section class="ring-waterproof section-padding">
         <div class="container">
            <div class="row">
               <!-- <div class="col-lg-12"><div class="wather-ring-img"></div></div> -->
               <div class="col-lg-7">
                  <div class="wather-ring-content" data-aos="fade-up">
                     <h4>IP68 Waterproof</h4>
                     <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======================== Ring Waterproof ======================= -->
      <!-- ======================== Long Life Battery ======================= -->
      <section class="long-life-battery">
         <div class="d-md-flex flex-wrap justify-content-between align-items-center h-100">
            <div class="wather-ring-img h-100"><img src="assets/imgs/ring-page/battery-life.png"> </div>
            <div class="life-battery-content p-5 align-items-center d-md-flex">
               <div data-aos="fade-right">
                  <h4>Long <br><span>Battery </span><br> Life</h4>
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                     took a galley of type and scrambled it to make a type
                  </p>
               </div>
            </div>
         </div>
      </section>
      <!-- ======================== Long Life Battery ======================= -->
      <!-- ======================== Stress Manitoring ======================= -->
      <section class="stress-manitoring section-padding">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <div class="stress-content" data-aos="fade-right">
                     <h6><span>Stress</span> Monitoring</h6>
                     <p> Integrated stress monitoring to help users manage and reduce stress levels.</p>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="stress-img" data-aos="fade-left">
                     <img src="assets/imgs/ring-page/stress-img.jpg">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======================== Stress Manitoring ======================= -->
      <section class="remote-control section-padding">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <div class="stress-img" data-aos="fade-right">
                     <img src="assets/imgs/ring-page/female-health.png">
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="stress-content" data-aos="fade-left">
                     <h6><span>Female Health</span> Tracking</h6>
                     <p>Period tracking and fertility predictions for female users through the mobile app.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ======================== Stress Manitoring ======================= -->
      <!-- ======================== Ring Specifications ======================= -->
      <section class="ring-specifications section-padding">
         <div class="container">
            <div class="sec-head mb-50" data-aos="fade-up">
               <div class="row">
                  <div class="col-lg-12">
                     <h6 class="sub-head">Adivaa Smart Ring </h6>
                  </div>
               </div>
            </div>
            <div class="smartring-details">
               <table class="table mt-5 custom-table">
                  <thead>
                     <tr>
                        <th style="width: 230px;">Featrure</th>
                        <th style="width: 300px;" class="text-center">
                           <div class="table-head">
                              <img src="assets/imgs/r2-ring.png"> <br>
                              R2 Ring <br>
                              <p><strong>₹6,499.00</strong></p>
                           </div>
                        </th>
                        <th style="width: 300px;" class="text-center">
                           <div class="table-head">
                              <img src="assets/imgs/r3-ring.png"><br>
                              R3 Ring <br>
                              <p><strong>₹4,499.00</strong></p>
                           </div>
                        </th>
                        <th style="width: 300px;" class="text-center">
                           <div class="table-head">
                              <img src="assets/imgs/r6-ring.png"><br>
                              R6 Ring
                              <br>
                              <p><strong>₹6,499.00</strong></p>
                           </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Modal</td>
                        <td class="text-center">R2</td>
                        <td class="text-center">R3</td>
                        <td class="text-center">R6</td>
                     </tr>
                     <tr>
                        <td>NFC</td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                     </tr>
                     <tr>
                        <td>BT</td>
                        <td class="text-center">BT 5.1</td>
                        <td class="text-center">BT 5.1</td>
                        <td class="text-center">BT 5.1</td>
                     </tr>
                     <tr>
                        <td>Charging time</td>
                        <td class="text-center">60 min</td>
                        <td class="text-center">45 min</td>
                        <td class="text-center">90 min</td>
                     </tr>
                     <tr>
                        <td>Remote Camera</td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                     </tr>
                     <tr>
                        <td>Gesture Control</td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/no-cross.svg" class="no-feature"></td>
                     </tr>
                     <tr>
                        <td> Motion Control Gaming</td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/no-cross.svg" class="no-feature"></td>
                     </tr>
                     <tr>
                        <td>Battery Life</td>
                        <td class="text-center">Upto 7 days</td>
                        <td class="text-center">Upto 5 days</td>
                        <td class="text-center">Upto 10 days</td>
                     </tr>
                     <tr>
                        <td>Ring Weight</td>
                        <td class="text-center">6.8g</td>
                        <td class="text-center">6.8g</td>
                        <td class="text-center">4g</td>
                     </tr>
                     <tr>
                        <td>Waterproof Standard</td>
                        <td class="text-center">IP68</td>
                        <td class="text-center">IP68</td>
                        <td class="text-center">IPX8</td>
                     </tr>
                     <tr>
                        <td>Material</td>
                        <td class="text-center">Ceramic + Stainless Steel</td>
                        <td class="text-center">Titanium Alloy + Stainless Steel</td>
                        <td class="text-center">Titanium Alloy</td>
                     </tr>
                     <tr>
                        <td>Color</td>
                        <td class="text-center">Black</td>
                        <td class="text-center">Golden, Silver</td>
                        <td class="text-center">Black, Golden, Silver</td>
                     </tr>
                     <tr>
                        <td>Ring Data Storage Capacity</td>
                        <td class="text-center">Upto 30 days</td>
                        <td class="text-center">Upto 30 days</td>
                        <td class="text-center">Upto 30 days</td>
                     </tr>
                     <tr>
                        <td>Operates With (IOS/ Android)</td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                        <td class="text-center"><img src="assets/imgs/yes-checked.svg" class="no-feature"></td>
                     </tr>
                     <tr>
                        <td>Works with</td>
                        <td class="text-center">"Adivaa Smart" App</td>
                        <td class="text-center">"Adivaa Smart" App</td>
                        <td class="text-center">"Adivaa Smart" App</td>
                     </tr>
                     <tr>
                        <td>What's in the Box</td>
                        <td class="text-center">1 Adivaa Smart Ring, 1 Wireless Charger, 1 Cable, 1 User Mnaual, 1 Calendar
                        </td>
                        <td class="text-center">2 Adivaa Smart Ring, 1 Wireless Charger, 1 Cable, 1 User Mnaual, 1 Calendar
                        </td>
                        <td class="text-center">3 Adivaa Smart Ring, 1 Wireless Charger, 1 Cable, 1 User Mnaual, 1 Calendar
                        </td>
                     </tr>
                  </tbody>
                  <tfoot class="text-center tablebutton">
                     <tr>
                        <th></th>
                        <th><a href="{{ route('product-detail', 23) }}">Buy Now</a></th>
                        <th><a href="{{ route('product-detail', 24) }}">Buy Now</a></th>
                        <th><a href="{{ route('product-detail', 25) }}">Buy Now</a></th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </section>
      <!-- ======================== Ring Specifications ======================= -->
      <section class="specificationslist-main section-padding">
         <div class="container">
            <div class="sec-head mb-50" data-aos="fade-up">
               <div class="row">
                  <div class="col-lg-12">
                     <h6 class="sub-head">Specifications </h6>
                  </div>
               </div>
            </div>
            <div class="tabs-main" data-aos="fade-up">
               <nav>
                  <div class="nav nav-tabs border-0 mb-3" id="nav-tab" role="tablist">
                     <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">R2 Smart Ring </button>
                     <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">R3 Smart Ring</button>
                     <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">R6 Smart Ring</button>
                  </div>
               </nav>
               <div class="tab-content p-5" id="nav-tabContent">
                  <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="specifications-list">
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-regular fa-life-ring"></i> Design:
                           </li>
                           <li>- Slim and lightweight design for enhanced comfort during prolonged wear.</li>
                           <li>- Minimalist aesthetic suitable for various occasions.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-heart-pulse"></i> Health Monitoring:
                           </li>
                           <li> - *SpO2 Sensor:* Real-time blood oxygen level monitoring for health insights.</li>
                           <li> - *Heart Rate Sensor:* Continuous heart rate monitoring with customizable alerts.</li>
                           <li> - *Sleep Tracking:* Advanced algorithms for detailed sleep analysis.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-chart-line"></i> Activity Tracking:
                           </li>
                           <li> - Step counter, distance traveled, and calorie burn tracking for comprehensive activity
                              monitoring.
                           </li>
                           <li> - Sport-specific modes for accurate tracking during workouts.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-walkie-talkie"></i> Stress Monitoring:
                           </li>
                           <li> - Integrated stress monitoring to help users manage and reduce stress levels.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-droplet"></i> Female Health Tracking:
                           </li>
                           <li>- Period tracking and fertility predictions for female users through the mobile app.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-circle-nodes"></i> Connectivity:
                           </li>
                           <li>- Bluetooth 5.1 for seamless connectivity with smartphones and other compatible devices.</li>
                           <li>- Synchronization with a dedicated mobile app for detailed health data review.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-bell"></i> Notifications:
                           </li>
                           <li>- Receive call alerts, message notifications, and app alerts directly on your smartphone.</li>
                           <li>- Customizable vibration patterns for different notification types.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-cloud-showers-water"></i> Waterproof:
                           </li>
                           <li>- IP68 or higher waterproof rating for use during daily activities.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-battery-full"></i> Battery Life:
                           </li>
                           <li>- Long-lasting battery life for extended usage between charges.</li>
                           <li>- Efficient charging via the magnetic connector for convenience.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-puzzle-piece"></i> Compatibility:
                           </li>
                           <li>- Compatible with Android and iOS smartphones, providing flexibility for users.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-brands fa-uncharted"></i> Software Updates:
                           </li>
                           <li> - Regular over-the-air (OTA) updates to enhance features and address potential improvements.
                           </li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-link"></i> Remote Control:
                           </li>
                           <li>- Can click selfies with gesture control.</li>
                        </ul>
                        <p>The Smart Health Ring Lite offers essential health-tracking features without a built-in display,
                           allowing you to conveniently monitor your well-being and stay connected through your smartphone.
                        </p>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="specifications-list">
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-regular fa-life-ring"></i> Design:
                           </li>
                           <li>- Slim and lightweight design for enhanced comfort during prolonged wear.</li>
                           <li>- Minimalist aesthetic suitable for various occasions.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-heart-pulse"></i> Health Monitoring:
                           </li>
                           <li> - *SpO2 Sensor:* Real-time blood oxygen level monitoring for health insights.</li>
                           <li> - *Heart Rate Sensor:* Continuous heart rate monitoring with customizable alerts.</li>
                           <li> - *Sleep Tracking:* Advanced algorithms for detailed sleep analysis.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-chart-line"></i> Activity Tracking:
                           </li>
                           <li> - Step counter, distance traveled, and calorie burn tracking for comprehensive activity
                              monitoring.
                           </li>
                           <li> - Sport-specific modes for accurate tracking during workouts.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-walkie-talkie"></i> Stress Monitoring:
                           </li>
                           <li> - Integrated stress monitoring to help users manage and reduce stress levels.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-droplet"></i> Female Health Tracking:
                           </li>
                           <li>- Period tracking and fertility predictions for female users through the mobile app.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-circle-nodes"></i> Connectivity:
                           </li>
                           <li>- Bluetooth 5.1 for seamless connectivity with smartphones and other compatible devices.</li>
                           <li>- Synchronization with a dedicated mobile app for detailed health data review.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-bell"></i> Notifications:
                           </li>
                           <li>- Receive call alerts, message notifications, and app alerts directly on your smartphone.</li>
                           <li>- Customizable vibration patterns for different notification types.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-cloud-showers-water"></i> Waterproof:
                           </li>
                           <li>- IP68 or higher waterproof rating for use during daily activities.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-battery-full"></i> Battery Life:
                           </li>
                           <li>- Long-lasting battery life for extended usage between charges.</li>
                           <li>- Efficient charging via the magnetic connector for convenience.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-puzzle-piece"></i> Compatibility:
                           </li>
                           <li>- Compatible with Android and iOS smartphones, providing flexibility for users.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-brands fa-uncharted"></i> Software Updates:
                           </li>
                           <li> - Regular over-the-air (OTA) updates to enhance features and address potential improvements.
                           </li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-link"></i> Remote Control:
                           </li>
                           <li>- Can click selfies with gesture control.</li>
                        </ul>
                        <p>The Smart Health Ring Lite offers essential health-tracking features without a built-in display,
                           allowing you to conveniently monitor your well-being and stay connected through your smartphone.
                        </p>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                     <div class="specifications-list">
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-regular fa-life-ring"></i> Design:
                           </li>
                           <li>- Slim and lightweight design for enhanced comfort during prolonged wear.</li>
                           <li>- Minimalist aesthetic suitable for various occasions.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-heart-pulse"></i> Health Monitoring:
                           </li>
                           <li> - *SpO2 Sensor:* Real-time blood oxygen level monitoring for health insights.</li>
                           <li> - *Heart Rate Sensor:* Continuous heart rate monitoring with customizable alerts.</li>
                           <li> - *Sleep Tracking:* Advanced algorithms for detailed sleep analysis.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-chart-line"></i> Activity Tracking:
                           </li>
                           <li> - Step counter, distance traveled, and calorie burn tracking for comprehensive activity
                              monitoring.
                           </li>
                           <li> - Sport-specific modes for accurate tracking during workouts.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-walkie-talkie"></i> Stress Monitoring:
                           </li>
                           <li> - Integrated stress monitoring to help users manage and reduce stress levels.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-droplet"></i> Female Health Tracking:
                           </li>
                           <li>- Period tracking and fertility predictions for female users through the mobile app.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-circle-nodes"></i> Connectivity:
                           </li>
                           <li>- Bluetooth 5.1 for seamless connectivity with smartphones and other compatible devices.</li>
                           <li>- Synchronization with a dedicated mobile app for detailed health data review.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-bell"></i> Notifications:
                           </li>
                           <li>- Receive call alerts, message notifications, and app alerts directly on your smartphone.</li>
                           <li>- Customizable vibration patterns for different notification types.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-cloud-showers-water"></i> Waterproof:
                           </li>
                           <li>- IPX8 or higher waterproof rating for use during daily activities.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-battery-full"></i> Battery Life:
                           </li>
                           <li>- Long-lasting battery life for extended usage between charges.</li>
                           <li>- Efficient charging via the magnetic connector for convenience.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-puzzle-piece"></i> Compatibility:
                           </li>
                           <li>- Compatible with Android and iOS smartphones, providing flexibility for users.</li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-brands fa-uncharted"></i> Software Updates:
                           </li>
                           <li> - Regular over-the-air (OTA) updates to enhance features and address potential improvements.
                           </li>
                        </ul>
                        <ul>
                           <li class="specifications-title">
                              <i class="fa-solid fa-link"></i> Remote Control:
                           </li>
                           <li>- Can click selfies with gesture control.</li>
                        </ul>
                        <p>The Smart Health Ring Lite offers essential health-tracking features without a built-in display,
                           allowing you to conveniently monitor your well-being and stay connected through your smartphone.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==================== Start Blogs ==================== -->
      <section class="blog-sa">
         <div class="container section-padding">
            <div class="sec-head mb-100" data-aos="fade-up">
               <div class="row">
                  <div class="col-lg-12">
                     <h6 class="sub-head">Blogs</h6>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 mb-4">
                  <div class="item md-mb50" data-aos="fade-up">
                     <div class="img fit-img">
                        <img src="assets/imgs/blog/blog-ring.jpg" alt="">
                     </div>
                     <div class="cont mt-30">
                        <h6>
                           <a href="#">Features of Smart Ring: Empower your Future</a>
                        </h6>
                        <div class="info d-flex align-items-center mt-20">
                           <!-- <a href="#0" class="tag"><span>Date</span></a> -->
                           <a href="#0" class="date">
                           <span>May 15, 2024</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 mb-4">
                  <div class="item md-mb50" data-aos="fade-up">
                     <div class="img fit-img">
                        <img src="assets/imgs/blog/blog-Bag.jpg" alt="">
                     </div>
                     <div class="cont mt-30">
                        <h6>
                           <a href="#">Adivaa Smart LED Bag</a>
                        </h6>
                        <div class="info d-flex align-items-center mt-20">
                           <!-- <a href="#0" class="tag"><span>Date</span></a> -->
                           <a href="#0" class="date">
                           <span>May 15, 2024</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==================== Start Blogs ==================== -->
   </div>
</div>
@endsection