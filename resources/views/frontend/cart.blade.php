@extends('frontend/layout')
@section('title', 'Home')
@section('content')
        <script>
            function updateCart(qty, rowId) {
                $.ajax({
                    type: "GET",
                    url: '{{asset('cart/update')}}',
                    data: {
                        'qty':qty,
                        'rowId':rowId
                    },
                    success: function(data)
                    {
                       location.reload();
                    }
                });
            }
        </script>

        @if(Cart::content()->isNotEmpty())

		<!--Start Shopping Cart top area -->
		<div class="shopping_cart_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cart_title">
							<h2>Shopping Cart</h2>
						</div>
						<div class="shopping-cart-table">
							<table class="cart_items">
								<tr>
									<th width="5%">Xóa</th>
									<th width="25%">Ảnh</th>
									<th width="20%" style="padding: 10px 10px;">Tên</th>
									<th width="20%"  style="padding: 2px 2px;">Giá</th>
									<th width="10%">Số lượng</th>
									{{--<th width="10%">Size</th>
									<th width="10%">Main Color</th>--}}
									<th width="20%">Tổng</th>
								</tr>
                                @foreach($items as $item)
                                    <tr>
                                        <td><a href="{{asset('cart/delete/'.$item->rowId)}}"><img src="img/arrow/btn_trash.gif" alt="" /></a></td>
                                        <td><a ><img width="100%" src="{{ asset('storage/thumbnail/'.$item->options->img) }}" alt="" /></a></td>
                                        <td width="100%" style="padding: 10px 10px;"><a href="#">{{$item->name}}</a></td>
                                        <td>{{ number_format($item->price, 0, '.', ',') }} VNĐ</td>
                                        <td>
                                            <input name="cart[390][qty]" value="{{$item->qty}}" size="4" title="Qty" class="input-text qty" maxlength="12" onchange="updateCart(this.value, '{{$item->rowId}}')">
                                        </td>
                                        {{--<td>{{$item->options->size}}</td>
                                        <td>{{$item->options->color}}</td>--}}
                                        <td>{{ number_format($item->qty * $item->price, 0, '.', ',') }} VNĐ</td>
                                    </tr>
                                @endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="shopping_cart_main">
							<div class="shopping_button">
								<button type="button" title="shop"  class="continue_shopping" onclick="location.href = '{{asset('shop')}}';">Tiếp tục mua sắm</button>
							</div>
							<div class="shopping_button">
								<button type="button" title="shop"  class="continue_shopping" onclick="location.href = '{{asset('cart/delete/all')}}';">Xóa tất cả</button>
							</div>
							<div class="shopping_button">
								<button type="button" title="shop"  class="continue_shopping" onclick="location.href = '{{asset('')}}';">Cập nhật giỏ hàng</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Shopping Cart top area -->
		<!--Start Estimate Shipping,Discount,Total checkout area -->
		<div class="cart-collaterals-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
{{--						<div class="shopping_details_des">--}}
{{--							<h2>Discount Codes</h2>--}}
{{--							<h3>Enter your coupon code if you have one.</h3>--}}
{{--							<div class="shopping_form">--}}
{{--                                <form action="{{route('apply_coupon')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <input class="input-text validate-postcode" type="text" name="coupon_code" value="{{old('coupon_code')}}">--}}
{{--                                    <div class="review_button product_tag_add">--}}
{{--                                        <button type="submit" title="Submit Review" class="button">Apply Coupon</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--							</div>--}}
{{--						</div>--}}
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="total_price">
							<table class="total_rate">
								<tr>
									<th>Tổng hóa đơn</th>
									<th>{{ number_format($totalPrice, 0, '.', ',') }}VNĐ</th>
								</tr>
							</table>
						</div>
						<div class="check_out_simble review_button">
							<button type="submit" title="Submit Review" class="button"  onclick="location.href = '{{asset('checkout')}}';" >Thanh toán</button>
{{--							<h2><a href="">Checkout with Multiple Addresses</a></h2>--}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Estimate Shipping,Discount,Total checkout area -->
        @else
            <div>

            </div>
            <div class="cart-collaterals-item">
                <div class="container" style="text-align: center; text-transform: uppercase;">
                    <div class="row">
                        <p style="text-align: center; text-transform: uppercase;"> Giỏ hàng trống!</p>
                    </div>
                    <div class="shopping_button">
                        <button type="button" title="shop"  class="continue_shopping" onclick="location.href = '{{asset('shop')}}';">Tiếp tục mua sắm</button>
                    </div>
                </div>
            </div>

        @endif


@endsection
