@extends('layouts.layout')
@section('content')
    <!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
                <li class="active">{{$catalogById -> nameCatalog}}</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- products --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Loại sản phẩm</h2>
					<ul class="cate">
                        @foreach ($listCatalogBig as $catalogBig)
                        <li><a href=""><i class="fa fa-arrow-right" aria-hidden="true"></i>{{$catalogBig -> nameCatalog}}</a></li>
                        <ul>
                            @foreach ($listCatalog as $catalog)
                                @if ($catalog['idParentCatalog'] == $catalogBig['idCatalog'])
                                    <li><a href="/showProduct/{{$catalog -> idCatalog}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{$catalog -> nameCatalog}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        @endforeach
					</ul>
				</div>
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 32</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agile_top_brands_grids">
                    @foreach ($listProductById as $product)
                        <div class="col-md-4 top_brand_left">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="{{asset('images')}}/offer.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="/productDetail/{{$product -> idProduct}}"><img title=" " alt=" " src="{{asset('images')}}/{{$product -> imgProduct}}" height="100px"></a>
                                                    <p>{{$product -> nameProduct}}</p>
                                                    <h4>{{$product -> priceProduct}}000 vnd <span>55000 vnd</span></h4>
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
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
<!--- products --->
@endsection
