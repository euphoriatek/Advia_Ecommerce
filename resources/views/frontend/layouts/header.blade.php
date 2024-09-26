<div class="loader-wrap">
  <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
    <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
  </svg>
  <div class="loader-wrap-heading">
    <div class="load-text">
      <span>A</span>
      <span>D</span>
      <span>I</span>
      <span>V</span>
      <span>A</span>
      <span>A</span>
      <span>S</span>
      <span>M</span>
      <span>A</span>
      <span>R</span>
      <span>T</span>
    </div>
  </div>
</div>
<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="logo" href="{{ route('home') }}">
        <img src="{{asset('assets/imgs/adiva-logo.svg')}}" alt="logo">
      </a>
      <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
            <div class="sub-menu">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 p-0">
                    <div class="megamenu-product bg-light h-100">
                      <h5>Shop</h5>
                      <p>Latest Product </p>
                      <p>Accessories</p>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="megamenu-product h-100">
                      <h5>Product</h5>
                      <ul>

                        <li>
                          <a href="{{ route('adivaa-ring') }}">Adivaa Ring</a>
                        </li>

                        <li>
                          <a href="{{ route('led-bag') }}">Led Bag</a>

                          <!-- <a href="led-bag.html">Led Bag</a> -->
                        </li>
                        <li>
                          <a href="{{ route('adivaa-ring') }}">Drop Tag</a>
                        </li>
                        <li>
                          <a href="{{ route('adivaa-ring') }}">Power Track & Sockets</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
            <div class="sub-menu">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 p-0">
                    <div class="megamenu-product bg-light h-100">
                      <h5>Shop</h5>
                      <p>Latest Product </p>
                      <p>Accessories</p>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="megamenu-product h-100">
                      <h5>Product</h5>
                      <ul>
                        <li class="dropdownmenu-list">
                          <a class="accordion">Adivaa Ring <i class="fa-solid fa-angle-down"></i>
                          </a>
                          <div class="accordion-content">
                            <ul>
                              <li>
                                <a class="accordion-link" href="r2ring.html">R2 Ring</a>
                              </li>
                              <li>
                                <a class="accordion-link" href="r3ring.html">R3 Ring</a>
                              </li>
                              <li>
                                <a class="accordion-link" href="r6ring.html">R6 Ring</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <a href="led-bag.html">Led Bag</a>
                        </li>
                        <li>
                          <a href="droptag.html">Drop Tag</a>
                        </li>
                        <li>
                          <a href="powertrack.html">Power Track & Sockets</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ route('latest-product') }}">Upcoming Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>

        </ul>
      </div>
      <div class="topnav d-flex align-items-center">
        <div class="cart-header d-flex align-items-center gap-4">
          <div class="cart-icon">
            <a href="#">
              <!-- <i class="fa-solid fa-cart-shopping"></i> -->
              <img src="{{asset('assets/imgs/header_cart.svg')}}">
            </a>
            <span>04</span>
          </div>
          <div class="menu-icon cursor-pointer">
            <a id="hamburger-icon" href="#" title="Menu">
              <span class="line line-1"></span>
              <span class="line line-2"></span>
              <span class="line line-3"></span>
            </a>
          </div>
          {{ session('user') }}
          <div class="nopush_accordion">
            <ul class="mb-0 p-0">
              <li class="dropdownmenu-list">
                <a class="accordion">
                  <img src="{{asset('assets/imgs/profile-img.png')}}">
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <div class="accordion-content">
                  <ul class="p-0 border-0">
                    @auth
            <li>
              <a class="accordion-link" href="{{ url('user/logout') }}">
              <div class="icon-head">
                <i class="ti-power-off"></i>
              </div> LogOut
              </a>
            </li>
          @else
      <li>
        <a class="accordion-link" href="{{ url('user/login') }}">
        <div class="icon-head">
          <img src="{{asset('assets/imgs/login-icon.svg')}}">
        </div> login
        </a>
      </li>
      <li>
        <a class="accordion-link" href="{{ url('user/register') }}">
        <div class="icon-head">
          <img src="{{asset('assets/imgs/signup-icon.svg')}}">
        </div> Sign Up
        </a>
      </li>
    @endauth
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>