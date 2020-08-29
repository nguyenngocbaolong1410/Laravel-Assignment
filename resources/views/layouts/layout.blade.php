<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bách Hóa Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta
      name="keywords"
      content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <link rel="stylesheet" href="{{asset('css')}}/styleuser.css">
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      	function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- //for-mobile-apps -->
    <link
      href="{{asset('css')}}/bootstrap.css"
      rel="stylesheet"
      type="text/css"
      media="all"
    />
    <link href="{{asset('css')}}/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('css')}}/font-awesome.css" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('js')}}/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link
      href="//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js')}}/move-top.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
          event.preventDefault();
          $("html,body").animate(
            { scrollTop: $(this.hash).offset().top },
            1000
          );
        });
      });
    </script>
    <!-- start-smoth-scrolling -->
  </head>

  <body>
    <!-- header -->
    <div class="agileits_header">
      <div class="container">
        <div class="w3l_offers">
          <p>
            GIẢM GIÁ TỚI 70%. DÙNG MÃ "SALE70%" .
            <a href="products.html">MUA SẮM NGAY BÂY GIỜ</a>
          </p>
        </div>
        <div class="agile-login">
          @if(Auth::check())
              <ul>
              <li><p style="color: #fff;">Welcome: 
              @if(Auth::user()->role == 1 && Auth::user()->status == 1)
              <a href="{{url('admin')}}"><span style="color: #ee3b3b;">Admin</span></a>
              @endif              
              {{ Auth::user()->name }}</p></li>
              <li><a href="{{url('logout')}}">Logout</a></li>
              </ul>
            @else
              <ul>
                <li><a href="/registered"> Tạo tài khoản </a></li>
                <li><a href="/login">Đăng nhập</a></li>
                <li><a href="contact.html">Trợ giúp</a></li>
              </ul>
          @endif
        </div>
        <div class="product_list_header">
            @if(isset($carts))
                @php $totalQuantity = 0 @endphp
                @foreach ($carts as $cartItem)
                @php $totalQuantity += $cartItem['quantity'] @endphp
                @endforeach
                <a href="/cartShow"><i class="fa fa-cart-arrow-down" style="color: white" data-toggle="modal" data-target="#cartModal"> {{$totalQuantity}}</i></a>
            @else
                <a href="/cartShow"><i class="fa fa-cart-arrow-down" style="color: white"> 0</i></a>
            @endif
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="logo_products">
      <div class="container">
        <div class="w3ls_logo_products_left1">
          <ul class="phone_email">
            <li>
              <i class="fa fa-phone" aria-hidden="true"></i>Mua trực tuyến hoặc gọi chúng tôi: 0373 123 456
            </li>
          </ul>
        </div>
        <div class="w3ls_logo_products_left">
          <h1><a href="/">TIỆM BÁCH HÓA </a></h1>
        </div>
        <div class="w3l_search">
          <form action="#" method="post">
            <input
              type="search"
              name="Search"
              placeholder="Tìm sản phẩm..."
              required=""
            />
            <button
              type="submit"
              class="btn btn-default search"
              aria-label="Left Align"
            >
              <i class="fa fa-search" aria-hidden="true"> </i>
            </button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
            <button
                type="button"
                class="navbar-toggle collapsed navbar-toggle1"
                data-toggle="collapse"
                data-target="#bs-megadropdown-tabs"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/" class="act">HOME</a></li>
                <!-- Mega Menu -->
                @foreach ($listCatalogBig as $catalogBig)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                        >{{ $catalogBig -> nameCatalog }}<b class="caret"></b
                    ></a>
                    <ul class="dropdown-menu multi-column columns-3 columns-3--fix">
                    <div class="row">
                        <div class="multi-gd-img">
                        <ul class="multi-column-dropdown">
                            @foreach ($listCatalog as $catalog)
                                @if ($catalog['idParentCatalog'] == $catalogBig['idCatalog'])
                                    <li><a href="/showProduct/{{$catalog -> idCatalog}}">{{$catalog -> nameCatalog}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        </div>
                    </div>
                    </ul>
                </li>
                @endforeach
            </ul>
            </div>
        </nav>
        </div>
    </div>
  <!-- //navigation -->
    @section('content')
        @show
        <!-- //footer -->
    <div class="footer">
        <div class="container">
          <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
              <h3>LIÊN HỆ</h3>

              <ul class="address">
                <li>
                  <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i
                  >123 Lũy Bán Bích, Hòa Thạnh <span>Thành Phố Hồ Chí Minh.</span>
                </li>
                <li>
                  <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i
                  ><a href="mailto:tuvo1632@gmail.com">tuvo1632@gmail.com</a>
                </li>
                <li>
                  <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i
                  >0373 123 456
                </li>
              </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
              <h3>THÔNG TIN CHUNG</h3>
              <ul class="info">
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="about.html">Về chúng tôi</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="contact.html">Liên hệ</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="short-codes.html">Mã khuyến mãi</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="faq.html">FAQ's</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="products.html">Các sản phẩm</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
              <h3>CÁC LOẠI SẢN PHẨM</h3>
              <ul class="info">
                  @foreach ($listCatalogBig as $catalogBig)
                  <li>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i
                    ><a href="groceries.html">{{$catalogBig -> nameCatalog}}</a>
                  </li>
                  @endforeach

              </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
              <h3>Profile</h3>
              <ul class="info">
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="products.html">Cửa hàng</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="checkout.html">Giỏ hàng</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="login.html">Đăng nhập</a>
                </li>
                <li>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i
                  ><a href="registered.html">Tạo tài khoản</a>
                </li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="footer-copy">
          <div class="container">
            <p>
              © 2020 Tiệm Bách Hóa. Design by Nhóm TLVV
            </p>
          </div>
        </div>
      </div>
      <div class="footer-botm">
        <div class="container">
          <div class="w3layouts-foot">
            <ul>
              <li>
                <a href="#" class="w3_agile_facebook"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a href="#" class="agile_twitter"
                  ><i class="fa fa-twitter" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a href="#" class="w3_agile_dribble"
                  ><i class="fa fa-dribbble" aria-hidden="true"></i
                ></a>
              </li>
              <li>
                <a href="#" class="w3_agile_vimeo"
                  ><i class="fa fa-vimeo" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="payment-w3ls">
            <img src="{{asset('images')}}/card.png" alt=" " class="img-responsive" />
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- //footer -->
      <!-- Bootstrap Core JavaScript -->
      <script src="{{asset('js')}}/bootstrap.min.js"></script>

      <!-- top-header and slider -->
      <!-- here stars scrolling icon -->
      <script type="text/javascript">
        $(document).ready(function () {
          /*
                  var defaults = {
                  containerID: 'toTop', // fading element id
                  containerHoverID: 'toTopHover', // fading element hover id
                  scrollSpeed: 1200,
                  easingType: 'linear'
                  };
              */

          $().UItoTop({ easingType: "easeOutQuart" });
        });
      </script>
      <!-- //here ends scrolling icon -->
      <script src="{{asset('js')}}/minicart.min.js"></script>
      <script>
        // Mini Cart
        paypal.minicart.render({
          action: "#",
        });

        if (~window.location.search.indexOf("reset=true")) {
          paypal.minicart.reset();
        }
      </script>
      <!-- main slider-banner -->
      <script src="{{asset('js')}}/skdslider.min.js"></script>
      <link href="{{asset('css')}}/skdslider.css" rel="stylesheet" />
      <script type="text/javascript">
        jQuery(document).ready(function () {
          jQuery("#demo1").skdslider({
            delay: 5000,
            animationSpeed: 2000,
            showNextPrev: true,
            showPlayButton: true,
            autoSlide: true,
            animationType: "fading",
          });

          jQuery("#responsive").change(function () {
            $("#responsive_wrapper").width(jQuery(this).val());
          });
        });
      </script>
      <!-- //main slider-banner -->
    </body>
  </html>
