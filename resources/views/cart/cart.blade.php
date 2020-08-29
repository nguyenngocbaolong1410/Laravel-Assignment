@extends('layouts.layout')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Checkout Page</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- checkout -->
<div class="checkout">
    <div class="container">
        <h2>Your shopping cart</h2>
        @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

        @endif
        <div class="checkout-right">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Số thứ tự</th>
                        <th>Hình sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tên sản phẩm</th>

                        <th>Gía</th>
                        <th>Xóa</th>
                    </tr>
                </thead>

                    @if (isset($carts))
                        @php $numberOrder = 0   @endphp
                        @foreach ($carts as $itemCart)
                            <tr class="rem1">
                                <td class="invert">{{++$numberOrder}}</td>
                                <td class="invert-image"><a href="/productDetail/{{$itemCart['id']}}"><img src="{{asset('images')}}/{{$itemCart['images']}}" alt=" " class="img-responsive" width="50%"/></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <a href="/upQuantityCart/{{$itemCart['id']}}" class="btn btn-info btn-sm update-cart">
                                                <i class="fa fa-caret-square-o-up"></i>
                                            </a>
                                            <span>{{$itemCart['quantity']}}</span>
                                            <a href="/downQuantityCart/{{$itemCart['id']}}" class="btn btn-info btn-sm update-cart">
                                                <i class="fa fa-caret-square-o-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{$itemCart['name']}}</td>

                                <td class="invert">{{$itemCart['price']}}000 vnd</td>
                                <td class="invert"><a href="/deleteItemCart/{{$itemCart['id']}}"><i class="fa fa-close"></i></a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="rem1">
                            <td colspan="12"> No product</td>
                        </tr>
                    @endif




            </table>
        </div>
        <div class="checkout-left">
            <div class="checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    @if (isset($carts))
                        @php
                            $numberOrder = 0;
                            $totalPrice = 0;
                        @endphp
                        @foreach ($carts as $itemCart)
                            <li>Sản phẩm {{++$numberOrder}} <i></i> <span>{{$itemCart['quantity'] * $itemCart['price']}}000 vnd </span></li>
                            @php
                                $totalPrice += $itemCart['price'] * $itemCart['quantity']
                            @endphp
                        @endforeach
                        <li>Total <i></i> <span>{{$totalPrice}}000 vnd</span></li>
                    @else
                        <li>No product</li>
                    @endif
                </ul>
            </div>
            <div class="checkout-right-basket">
                <a href="/"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //checkout -->
@endsection

