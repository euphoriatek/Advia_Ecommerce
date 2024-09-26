@extends('frontend.layouts.master')
@section('title','Adivaa || Blog')
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
                <h6 class="sub-head">Benefits of Smart Rings</h6>
              </div>
              <div class="col-lg-12 ">
                <h4>Future of Wearables </h4>
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
                    Monitoring </li>
                  <li data-aos="fade-left" data-aos-delay="700"><i class="fa-solid fa-shoe-prints"></i> Step Count </li>
                  <li data-aos="fade-left" data-aos-delay="800"><i class="fa-solid fa-fire-burner"></i> Count calorie
                    Burned </li>
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
                  took a galley of type and scrambled it to make a type</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======================== Ring Waterproof ======================= -->


      <!-- ======================== Long Life Battery ======================= -->

      <section class="long-life-battery">

        <div class="d-md-flex flex-wrap justify-content-between align-items-center h-100">
          <div class="wather-ring-img h-100">
            <img src="{{ asset('assets/imgs/ring-page/battery-life.png') }}" alt="">
          </div>
          <div class="life-battery-content p-5 align-items-center d-md-flex">
            <div data-aos="fade-right">
              <h4>Long <br><span>Battery </span><br> Life</h4>
              <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type</p>
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
                <img src="{{ asset('assets/imgs/ring-page/female-health.png') }}" alt="">
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





      <section class="ring-specifications section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="smartring-details">
                <h3>R2 Adivaa Smart Ring</h3>
                <table class="table mt-5">
                  <tr>
                    <td><b>Model</b></td>
                    <td>R2</td>
                  </tr>
                  <tr>
                    <td><b>NFC</b></td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td><b>BT</b></td>
                    <td>BT 5.1</td>
                  </tr>
                  <tr>
                    <td><b>Charging Time</b></td>
                    <td>Upto 60 minutes</td>
                  </tr>
                  <tr>
                    <td><b>Working Time</b></td>
                    <td>Upto 5 days on default settings</td>
                  </tr>
                  <tr>
                    <td><b>Ring Weight</b></td>
                    <td>7gm</td>
                  </tr>
                  <tr>
                    <td><b>Waterproof Standard</b></td>
                    <td>IP68</td>
                  </tr>
                  <tr>
                    <td><b>Color</b></td>
                    <td>Black</td>
                  </tr>
                  <tr>
                    <td><b>Material</b></td>
                    <td>Ceramic + Stainless Steel</td>
                  </tr>
                  <tr>
                    <td><b>Works with</b></td>
                    <td>“Adivaa Ring” App</td>
                  </tr>
                  <tr>
                    <td><b>Storage Capacity</b></td>
                    <td>Upto “30 days”</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="specificationslist-main section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="specifications-list">
                <h5>Specifications</h5>

                <div class="row">
                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-regular fa-life-ring"></i>
                      <h6>Design</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-solid fa-heart-pulse"></i>
                      <h6>Health Monitoring</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-solid fa-chart-line"></i>
                      <h6>Activity Tracking</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-solid fa-walkie-talkie"></i>
                      <h6>Stress Monitoring</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-solid fa-droplet"></i>
                      <h6>Female Health Tracking</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <i class="fa-solid fa-circle-nodes"></i>
                      <h6>Connectivity</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/notifications.png"> -->
                      <i class="fa-solid fa-bell"></i>
                      <h6>Notifications</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/waterproof.png"> -->
                      <i class="fa-solid fa-cloud-showers-water"></i>
                      <h6>Waterproof</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/battery-life.png"> -->
                      <i class="fa-solid fa-battery-full"></i>
                      <h6>Battery Life</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/compatibility.png"> -->
                      <i class="fa-solid fa-puzzle-piece"></i>
                      <h6>Compatibility</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/software-updates.png"> -->
                      <i class="fa-brands fa-uncharted"></i>
                      <h6>Software Updates</h6>
                    </div>
                  </div>

                  <div class="col-lg-4 px-2 mb-3">
                    <div class="specifications-items">
                      <!-- <img src="assets/imgs/ring-page/icons/remote-control.png"> -->
                      <i class="fa-solid fa-link"></i>
                      <h6>Remote Control</h6>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </section>

      <!-- ==================== Start Blogs ==================== -->

      <section class="blog-sa">
        <div class="container section-padding bord-thin-top-light">
          <div class="sec-head mb-100" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-6">
                <h6 class="sub-head">Latest Blog</h6>
              </div>
              <div class="col-lg-6">
                <h4>The word Lorem Ipsum is derived of a te <span class="sub-color inline">“pain itself”. </span> used
                  the website. </h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="item md-mb50" data-aos="fade-up">
                <div class="img fit-img">
                  <img src="{{asset('assets/imgs/blog/blog-ring.jpg')}}" alt="">
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


      @endsection
