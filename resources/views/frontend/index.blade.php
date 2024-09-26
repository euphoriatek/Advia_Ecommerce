@extends('frontend.layouts.master')
@section('title','Adivaa || HOME PAGE')
@section('main-content')
<!-- Slider Area -->
<div class="hamenu">
   <div class="close-menu cursor-pointer">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" width="20px" height="20px" viewBox="0 0 29.125 28.688"
         enable-background="new 0 0 29.125 28.688" xml:space="preserve">
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
                     <li>
                        <a href="{{ route('adivaa-ring') }}">Adivaa Ring</a>
                     </li>
                     <li>
                        <a href="{{ route('led-bag') }}">Led Bag</a>
                     </li>
                     <li>
                        <a href="{{ route('adivaa-ring') }}">Drop Tag</a>
                     </li>
                     <li>
                        <a href="{{ route('adivaa-ring') }}">Power Track & Sockets</a>
                     </li>
                  </ul>
               </div>
            </li>
            <li>
               <div class="o-hidden">
                  <div class="link cursor-pointer dmenu">
                     <span class="fill-text" data-text="Latest Products">Up comming</span>
                     <i></i>
                  </div>
               </div>
               <div class="sub-menu">
                  <ul>
                     <li><a href="#" class="sub-link">Ring</a></li>
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
<main>
   <!-- ==================== Start Hero Banner ==================== -->
   <div class="hero-banner home-banner">
      <div class="container">
         <div class="caption">
            <div class="slider-title">
               <h1 class="type">Slay It, Stay Fit !</h1>
               <p>content here', making it look like readable English. packages and web page editors now
               </p>
            </div>
         </div>
      </div>
   </div>
   <!-- ==================== End Hero Banner ==================== -->
   <!-- ==================== Start Best Products ==================== -->
   <section class="work-card">
      <div class="container section-padding">
         <div class="sec-head mb-50" data-aos="fade-up">
            <div class="row">
               <div class="col-lg-8" data-aos="fade-up">
                  <h6 class="sub-head">Best Selling Products </h6>
               </div>
            </div>
         </div>
         <div class="cards">
            <div class="card-item">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="cont md-mb50">
                        <div>
                           <h5><a href="#">Power Track and Sockets</a></h5>
                           <h6>Flex you Space, Pick up the Pace!</h6>
                        </div>
                        <div>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority
                              have suffered alteration in some.
                           </p>
                           <div class="mt-40">
                              <a href="0" class="tag">Buy </a>
                              <a href="0" class="tag">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="img"><img src="assets/imgs/works/1.jpg" alt=""></div>
                  </div>
               </div>
            </div>
            <div class="card-item">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="cont md-mb50">
                        <div>
                           <h5><a href="#"> Smart Ring</a></h5>
                           <h6>Slay it, Stay Fit!</h6>
                        </div>
                        <div>
                           <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                              anything embarrassing hidden in the middle of text.
                           </p>
                           <div class="mt-40">
                              <a href="#" class="tag">Buy </a>
                              <a href="#" class="tag">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="img">
                        <img src="assets/imgs/works/2.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-item">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="cont md-mb50">
                        <div>
                           <h5><a href="#"> DropTag</a></h5>
                           <h6>Tag it, Track it!</h6>
                        </div>
                        <div>
                           <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                              in a piece of classical Latin literature from 45 BC, making.
                           </p>
                           <div class="mt-40">
                              <a href="#" class="tag">Buy </a>
                              <a href="#" class="tag">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="img">
                        <img src="assets/imgs/works/3.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-item">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="cont md-mb50">
                        <div>
                           <h5><a href="#">LED Bag</a></h5>
                           <h6>Glow on the Go, Everyday's a New Show!</h6>
                        </div>
                        <div>
                           <p> random text. It has roots in a piece of classical Latin literature from 45 BC,
                              making it over 2000 years old.
                           </p>
                           <div class="mt-40">
                              <a href="#" class="tag">Buy </a>
                              <a href="#" class="tag">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="img">
                        <img src="{{asset('assets/imgs/works/4.png')}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-item">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="cont md-mb50">
                        <div>
                           <h5><a href="#">Led Light </a></h5>
                           <h6>Shine Bright, Set the Mood Right!</h6>
                        </div>
                        <div>
                           <div class="mt-40">
                              <a href="#" class="tag">Buy </a>
                              <a href="#" class="tag">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="img">
                        <img src="{{asset('assets/imgs/works/5.jpg')}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ==================== End Best Products ==================== -->
   <!-- ======================== Upcoming Products ======================= -->
   <section class="latest-product section-padding pt-2">
      <div class="container">
         <div class="sec-head" data-aos="fade-up">
            <div class="row">
               <div class="col-lg-8">
                  <h6 class="sub-head"><span>Upcoming</span> Products</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="thecontainer">
         <div class="panel">
            <div class="item">
               <div class="img">
                  <img src="assets/imgs/team/Hydrogen Bottle.png" alt="">
               </div>
               <div class="cont text-center">
                  <div>
                     <h5>Hydrogen Bottle</h5>
                     <div class="review-star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                     </div>
                  </div>
                  <div class="mt-4">
                     <a href="#"  class="theme-btn" title="buy_now"><i class="fa-solid fa-cart-shopping"></i> Pre Order Now</a>
                     <a href="#"  class="theme-btn fillbtn" title="buy_now" data-bs-toggle="modal" data-bs-target="#join-waitlist"><i class="fa-solid fa-file-signature"></i> Join The Waitlist</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel">
            <div class="item">
               <div class="img">
                  <img src="assets/imgs/team/Hydrogen_Water_Filter_Bottle.png" alt="">
               </div>
               <div class="cont text-center">
                  <div>
                     <h5>Hydrogen Water Filter Bottle</h5>
                     <div class="review-star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                     </div>
                  </div>
                  <div class="mt-4">
                     <a href="#"  class="theme-btn" title="buy_now"><i class="fa-solid fa-cart-shopping"></i> Pre Order Now</a>
                     <a href="#"  class="theme-btn fillbtn" title="buy_now" data-bs-toggle="modal" data-bs-target="#join-waitlist"><i class="fa-solid fa-file-signature"></i> Join The Waitlist</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel">
            <div class="item">
               <div class="img">
                  <img src="assets/imgs/team/New_Drop_Tag.png" alt="">
               </div>
               <div class="cont text-center">
                  <div>
                     <h5>Drop Tag</h5>
                     <div class="review-star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     </div>
                  </div>
                  <div class="mt-4">
                     <a href="#"  class="theme-btn" title="buy_now"> <i class="fa-solid fa-cart-shopping"></i> Pre Order Now</a>
                     <a href="#"  class="theme-btn fillbtn" title="buy_now" data-bs-toggle="modal" data-bs-target="#join-waitlist"><i class="fa-solid fa-file-signature"></i> Join The Waitlist</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel">
            <div class="item">
               <div class="img">
                  <img src="assets/imgs/team/ECGpng.png" alt="">
               </div>
               <div class="cont text-center">
                  <div>
                     <h5>ECG</h5>
                     <div class="review-star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                     </div>
                  </div>
                  <div class="mt-4">
                     <a href="#"  class="theme-btn" title="buy_now"> <i class="fa-solid fa-cart-shopping"></i> Pre Order Now</a>
                     <a href="#"  class="theme-btn fillbtn" title="buy_now" data-bs-toggle="modal" data-bs-target="#join-waitlist"><i class="fa-solid fa-file-signature"></i> Join The Waitlist</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="panel">
            <div class="item">
               <div class="img">
                  <img src="assets/imgs/team/avatar1.jpg" alt="">
               </div>
               <div class="cont text-center">
                  <div>
                     <h5>Led Bag</h5>
                     <div class="review-star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                     </div>
                  </div>
                  <div class="mt-4">
                     <a href="#"  class="theme-btn" title="buy_now"><i class="fa-solid fa-cart-shopping"></i> Pre Order Now</a>
                     <a href="#"  class="theme-btn fillbtn" title="buy_now" data-bs-toggle="modal" data-bs-target="#join-waitlist"><i class="fa-solid fa-file-signature"></i> Join The Waitlist</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ======================== Upcoming Products ======================= -->
   <!-- ==================== Start Testimonials ==================== -->
   <section id="testimonials" class="testimonials container-fluid">
      <div class="section-padding sub-bg radius-30">
         <div class="testimonials-ds">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="qoute-icon md-mb50">
                        <div class="text">
                           <img src="assets/imgs/testim/Vector_Cricle_Text.svg" alt="">
                        </div>
                        <div class="icon">
                           <img src="assets/imgs/testim/vector_quote.svg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="swiper testim-swiper swiper-container">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/megha.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Megha</span>
                                       <p>858****943</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“I'm obsessed with my Adivaa Smart Ring! It's so comfy I
                                       forget I'm wearing it, but it's been a game-changer for
                                       my sleep. I can finally see why I'm always tired.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/bharti.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Bharti</span>
                                       <p>995****370</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“Advertising on a tight budget was killing me, but this
                                       LED bag has been a total game-changer. I slap my shop's
                                       logo on it and people can't help but stare. Best few
                                       thousands I've spent in ages.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/devansh-garg.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Devansh Garg</span>
                                       <p>886****910</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“Movie nights just got a million times better with this
                                       LED light! I set the colors to match the mood, and voice
                                       commands make brightness adjustments a snap. Plus, the
                                       music sync feature immerses me in the movie.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/Abhay.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Abhay</span>
                                       <p>875****719</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“I'm obsessed with my Adivaa Track Socket! The dual USB
                                       ports are lifesavers on busy days. It's tiny, sturdy,
                                       and the built-in LED light is such a nice touch. No more
                                       clutter, no more charging headaches.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/Neeraj.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Neeraj</span>
                                       <p>931****512</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“I was that person always misplacing their purse...
                                       until I got the Adivaa Drop Tag! Now I can find it in
                                       seconds, no matter where I left it. It's literally
                                       changed my life. And the best part? No fuss, no
                                       charging, just peace of mind.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/nalin-solanki.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Nalin Solanki</span>
                                       <p>965****725</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“I've never seen anything like the Adivaa Power Track
                                       system. It's ridiculously easy to use and keeps my
                                       workspace super organized. The compact design and smart
                                       charging are huge bonuses, and it looks amazing with my
                                       home decor. Total win!”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/deborah-saini.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Deborah Saini</span>
                                       <p>977****280</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“The Adivaa LED Bag transformed my small business by
                                       grabbing attention and driving sales with its
                                       eye-catching, portable display, providing a ridiculously
                                       cost-effective advertising solution.”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item">
                                 <div class="info d-flex align-items-center pb-30 bord-thin-bottom-light">
                                    <div>
                                       <div class="img-author">
                                          <img src="assets/imgs/testim/brijendra-tiwari.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="info-text">
                                       <span>Brijendra Tiwari</span>
                                       <p>998****062</p>
                                    </div>
                                 </div>
                                 <div class="text pt-4">
                                    <h4>“I'm literally obsessed with my Adivaa Smart LED Bag!
                                       All my friends are dying to get one too. I mean, where
                                       else can you flash memes and doodles on your bag? It's
                                       the ultimate conversation starter. It's honestly the
                                       coolest thing on campus.s”
                                    </h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ==================== Start Testimonials ==================== -->
   <!-- ==================== Instagram Latest ==================== -->
   <section class="instragrapm">
      <div class="container section-padding bord-thin-top-light">
         <div class="sec-head mb-100" data-aos="fade-up">
            <div class="row">
               <div class="col-lg-8">
                  <h6 class="sub-head">Extend your <img src="assets/imgs/heart.png"> Love</h6>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-3 mb-4">
               <div class="instragrapm-card" data-aos="fade-up">
                  <h6><img src="assets/imgs/insta-icon.png">Orem ipsum dolor sit amet </h6>
                  <div class="instragrapm-img fit-img">
                     <img src="assets/imgs/team/avatar4.png" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 mb-4">
               <div class="instragrapm-card" data-aos="fade-up">
                  <h6><img src="assets/imgs/insta-icon.png">Orem ipsum dolor sit amet </h6>
                  <div class="instragrapm-img fit-img">
                     <img src="assets/imgs/team/avatar1.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 mb-4">
               <div class="instragrapm-card" data-aos="fade-up">
                  <h6><img src="assets/imgs/insta-icon.png">Orem ipsum dolor sit amet </h6>
                  <div class="instragrapm-img fit-img">
                     <img src="assets/imgs/team/avatar2.jpg" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-3 mb-4">
               <div class="instragrapm-card" data-aos="fade-up">
                  <h6><img src="assets/imgs/insta-icon.png">Orem ipsum dolor sit amet </h6>
                  <div class="instragrapm-img fit-img">
                     <img src="assets/imgs/team/avatar3.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- ==================== Start Blogs ==================== -->
   <!-- ==================== Start Blogs ==================== -->
   <section class="blog-sa">
      <div class="container section-padding">
         <div class="sec-head mb-100" data-aos="fade-up">
            <div class="row">
               <div class="col-lg-8">
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
</main>
<!-- Modal end -->
@endsection