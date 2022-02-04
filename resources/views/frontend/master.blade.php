<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
        @foreach ($bannerimage as $bannerimageitem)
        <img src="{{asset(BlogImage().$bannerimageitem->banner_image)}}" alt="">
        @endforeach

    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            @foreach ($logo as $item)
            <a class="navbar-brand " href="index.html">{{$item->logo_name}}</a>
            @endforeach

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <i class="fa fa-user" aria-hidden="true"></i> </a>
              </li>
              <form class="form-inline justify-content-center">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section ">

      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $banneritem)
            @if ($loop->first)
            <div class="carousel-item active">
                <div class="container ">
                  <div class="row">
                      <div class="col-md-6 ">
                        <div class="detail-box">
                          <h1>
                           {{$banneritem->banner_name}}
                          </h1>
                          <p>
                            {{$banneritem->banner_description}}
                          </p>
                          <div class="btn-box">
                            <a href=" {{$banneritem->banner_link}}" class="btn1">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            @else
            <div class="carousel-item">
                <div class="container ">
                  <div class="row">
                      <div class="col-md-6 ">
                        <div class="detail-box">
                          <h1>
                           {{$banneritem->banner_name}}
                          </h1>
                          <p>
                            {{$banneritem->banner_description}}
                          </p>
                          <div class="btn-box">
                            <a href=" {{$banneritem->banner_link}}" class="btn1">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
        <div class="container">
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
          Featured Products
        </h2>
        @foreach ($featured as $featureditem)
        <p class="col-lg-8 px-0">
            {{$featureditem->featured_discription}}
        </p>
        @endforeach

      </div>
      <div class="product_container">
        <div class="product_owl-carousel owl-carousel owl-theme ">
            @foreach ($product as $productitem)
            <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset(BlogImage().$productitem->product_image)}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h4>
                      {{$productitem->product_name}}
                    </h4>
                    <h6 class="price">
                      <span class="new_price">
                       {{$productitem->product_newprise}}
                      </span>
                      <span class="old_price">
                        {{$productitem->product_oldprise}}
                      </span>
                    </h6>
                    <a href="{{$productitem->product_buy}}">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- product section ends -->

  <!-- about section -->

  <section class="about_section ">
    <div class="container-fluid">
        @foreach ($about as $aboutitem)
        <div class="row">
            <div class="col-md-6 px-0">
              <div class="img-box ">
                <img src="{{asset(BlogImage().$aboutitem->about_image)}}" class="box_img" alt="about img">
              </div>
            </div>
            <div class="col-md-5">
              <div class="detail-box ">
                <div class="heading_container">
                  <h2 class="">
                    {{$aboutitem->about_name}}
                  </h2>
                </div>
                <p class="detail_p_mt">
                    {{$aboutitem->about_description}}
                </p>
                <a href="{{$aboutitem->about_readmore}}" class="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        @endforeach

    </div>
  </section>

  <!-- about section ends -->

  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center ">
        <h2 class="">
         All Products
        </h2>
        @foreach ($apdescription as $apdescriptionitem)
        <p class="col-lg-8 px-0">
            {{$apdescriptionitem->apdescription}}
          </p>
        @endforeach

      </div>
      <div class="row">
          @foreach ($allproduct as $allproductitem)
          <div class="col-sm-6 col-md-3">
            <div class="box">
              <div class="img-box">
                <img src="{{asset(BlogImage().$allproductitem->allproduct_image)}}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  {{$allproductitem->allproduct_name}}
                </h4>
                <h6 class="price">
                  <span class="new_price">
                    {{$allproductitem->allproduct_newprice}}
                  </span>
                  <span class="old_price">
                    {{$allproductitem->allproduct_oldprice}}
                  </span>
                </h6>
                <a href="{{$allproductitem->allproduct_seemore}}">
                  Buy Now
                </a>
              </div>
            </div>
          </div>

          @endforeach
      </div>
      <div class="btn-box">
        <a href="{{$allproductitem->allproduct_seemore}}">
          See More
        </a>
      </div>
    </div>
  </section>

  <!-- product section ends -->


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
              <div>
                <input type="text" name="contact_name" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" name="contact_phonenumber" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" name="contact_email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" name="contact_message" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap">
          <div class="owl-carousel client_owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('frontend/images/c1.jpg')}}" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    John Doe
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('frontend/images/c2.jpg')}}" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Alan Jonas
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('frontend/images/c1.jpg')}}" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    John Doe
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('frontend/images/c2.jpg')}}" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Alan Jonas
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="footer_content ">
        <div class="row ">
          <div class="col-md-6 col-lg-6 footer-col">
            <div class="footer_detail">
              <a href="index.html">
                <h4>
                  Brolta
                </h4>
              </a>
              <p>
                Exercitationem nisi voluptates mollitia suscipit voluptate minus facere, temporibus placeat ratione porro! Laboriosam esse ab cupiditate qui vel blanditiis, molestias, eaque natus aspernatur ipsam quasi id eos sapiente ducimus non!
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Contact us
            </h4>
            <div class="contact_nav footer-col">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer_form footer-col">
              <h4>
                NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
        <div class="footer-info-box">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

 @include('frontend.includes.scripts')
</body>

</html>
