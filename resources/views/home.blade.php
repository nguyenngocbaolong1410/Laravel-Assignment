@extends('layouts.layout')
@section('content')
<!-- main-slider -->
<ul id="demo1">
  <li>
    <img src="{{asset('images')}}/11.jpg" alt="" />
    <!--Slider Description example-->
    <div class="slide-desc">
      <h3>Mua các sản phẩm bánh kẹo trực tuyến của chúng tôi</h3>
    </div>
  </li>
  <li>
    <img src="{{asset('images')}}/22.jpg" alt="" />
    <div class="slide-desc">
      <h3>Mua các sản phẩm đóng hộp trực tuyến của chúng tôi</h3>
    </div>
  </li>

  <li>
    <img src="{{asset('images')}}/44.jpg" alt="" />
    <div class="slide-desc">
      <h3>Mua các sản phẩm đồ uống trực tuyến của chúng tôi</h3>
    </div>
  </li>
</ul>
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
  <div class="container">
    <h2>Các sản phẩm bán chạy nhất</h2>
    <div class="agile_top_brands_grids">
        @foreach ($listProductByBuy as $product)
        <div class="col-12 col-sm-6 col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset('images')}}/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="/productDetail/{{$product -> idProduct}}"
                        ><img title=" " alt=" " src="{{asset('images')}}/{{$product -> imgProduct}}" height="100px"
                      /></a>
                      <p>{{$product -> nameProduct}}</p>
                      <div class="stars">
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star gray-star"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <h4>{{$product -> priceProduct}}000 vnd <span>55000vnd</span></h4>
                    </div>
                    <div class="btn btn-danger" onclick="alert('Sản phẩm của bạn đã thêm vào giỏ hàng')"><a href="/addToCart/{{$product -> idProduct}}">ADD TO CART</a></div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div>{{ $listProductByBuy -> links() }}</div>
    </div>
  </div>
</div>
<!-- //top-brands -->
<!--brands-->
<div class="brands">
  <div class="container">
    <h3>Brand Store</h3>
    <div class="brands-agile">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>

      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="brands-agile-1">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>

      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="brands-agile-2">
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>

      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="col-md-2 w3layouts-brand">
        <div class="brands-w3l">
          <p><a href="#">Lorem</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//brands-->
<!-- new -->
<div class="newproducts-w3agile">
  <div class="container">
    <h3>Các sản phẩm mới</h3>
    <div class="agile_top_brands_grids">
        @foreach ($listProductNew as $product)
        <div class="col-12 col-sm-6 col-md-3 top_brand_left-1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset('images')}}/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="/productDetail/{{$product -> idProduct}}"
                        ><img title=" " alt=" " src="{{asset('images')}}/{{$product -> imgProduct}}" height="100px"
                      /></a>
                      <p>{{$product -> nameProduct}}</p>
                      <div class="stars">
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star blue-star"
                          aria-hidden="true"
                        ></i>
                        <i
                          class="fa fa-star gray-star"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <h4>{{$product -> priceProduct}}000 vnd <span>55000vnd</span></h4>
                    </div>
                    <div class="btn btn-danger"><a href="/addToCart/{{$product -> idProduct}}">ADD TO CART</a></div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div>{{ $listProductNew -> links() }}</div>
    </div>
  </div>
</div>
<!-- //new -->
@endsection
