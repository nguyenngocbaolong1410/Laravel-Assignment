@extends('layouts.layout');
@section('content')
    <!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">{{$getProductById -> nameProduct}}</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">

				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="{{asset('images')}}/{{$getProductById -> imgProduct}}" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
                <h2>{{$getProductById -> nameProduct}}</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p>{{$getProductById -> noidungProduct}}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">{{$getProductById -> priceProduct}}000 vnd <span>50000 vnd</span></h4>
						</div>
						<div class="btn btn-danger" onclick="alert('Sản phẩm của bạn đã thêm vào giỏ hàng')"><a href="/addToCart/{{$getProductById -> idProduct}}">ADD TO CART</a></div>
					</div>
				</div>
				<div class="clearfix"> </div>
            </div>
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
                                <div class="btn btn-danger" onclick="alert('Sản phẩm của bạn đã thêm vào giỏ hàng')"><a href="/addToCart/{{$product -> idProduct}}">ADD TO CART</a></div>
                                </div>
                            </figure>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
  <!-- //new -->
		</div>
	</div>
@endsection
