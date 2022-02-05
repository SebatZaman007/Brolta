<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body>
  <div class="hero_area">
    <div class="hero_bg_box">

        <img src="{{asset(BlogImage().$bannerimage->banner_image)}}" alt="">


    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

            <a class="navbar-brand " href="index.html">{{$logo->logo_name}}</a>


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
        <p class="col-lg-8 px-0">
            {{$featured->featured_discription}}
        </p>


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
        <div class="row">
            <div class="col-md-6 px-0">
              <div class="img-box ">
                <img src="{{asset(BlogImage().$about->about_image)}}" class="box_img" alt="about img">
              </div>
            </div>
            <div class="col-md-5">
              <div class="detail-box ">
                <div class="heading_container">
                  <h2 class="">
                    {{$about->about_name}}
                  </h2>
                </div>
                <p class="detail_p_mt">
                    {{$about->about_description}}
                </p>
                <a href="{{$about->about_readmore}}" class="">
                  Read More
                </a>
              </div>
            </div>
          </div>


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
        <p class="col-lg-8 px-0">
            {{$apdescription->apdescription}}
          </p>

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
              @foreach ($clientreview as $clientreviewitem)
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="{{asset(BlogImage().$clientreviewitem->client_image)}}" alt="" class="img-1">
                  </div>
                  <div class="detail-box">
                    <h5>
                      {{$clientreviewitem->client_name}}
                    </h5>
                    <p>
                        {{$clientreviewitem->client_review}}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
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
          <div class="col-md-6 col-lg-12 footer-col">
            <div class="footer_detail">
              <a href=" {{$footerleft->footer_link}}">
                <h4>
                  Brolta
                </h4>
              </a>
              <p>
               {{$footerleft->footer_description}}
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-12 ">
            <h4>
              Contact us
            </h4>
            <div class="contact_nav footer-col">
              <a href="{{$contactus->contactus_location}}">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : {{$contactus->contactus_phonenumber}}
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : {{$contactus->contactus_email}}
                </span>
              </a>
            </div>
          </div>
          {{-- <div class="col-lg-3">
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
          </div> --}}
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
              @foreach ($socialmedia as $socialmediaitem)
              <a href="{{$socialmediaitem->socialmedia_link}}">
                <i class="{{$socialmediaitem->socialmedia_icon}}" aria-hidden="true"></i>
              </a>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

 @include('frontend.includes.scripts')
</body>

</html>
