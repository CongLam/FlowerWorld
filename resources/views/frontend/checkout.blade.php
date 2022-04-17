@extends('frontend/layout')
@section('title', 'Checkout')
@section('content')

        @if(Cart::content()->isNotEmpty())

		<div class="checkout_accrodion_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="accordion" id="accordion2">
                            <form method="POST">
							<div class="panel accordion-group">
								<div class="accordion-heading" id="headingTwo">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span>1</span>Nhập thông tin
								  </a>
								</div>
                                @include('errors.note')
								<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
                                        @csrf
								        <div class="accordion-inner">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="billing_info">
                                                        <ul class="billing_in">
                                                            <li>Họ tên<span>*</span></li>
                                                            <li>
                                                            <input required type="text" id="billing:firstname" name="fullname" value="{{!empty(old('name')) ? old('name') : (!empty(Auth::user()->name) ? Auth::user()->name : '') }}" title="Full Name" maxlength="255" class="input-text required-entry"></li>
                                                            <li>Công ty</li>
                                                            <li><input type="text" id="billing:company" name="company" value="{{old('company')}}" title="Company" class="input-text"></li>
                                                            <li>Email<span>*</span></li>
                                                            <li><input required type="text" name="email" id="billing:email" value="{{!empty(old('email')) ? old('email') : (!empty(Auth::user()->email) ? Auth::user()->email : '')}}" title="Email Address" class="input-text validate-email required-entry"></li>
                                                            <li>Địa chỉ<span>*</span></li>
                                                            <li><input required type="text" title="Street Address 2" name="street" id="billing:street2" value="{{!empty(old('street')) ? old('street') : (!empty(Auth::user()->address) ? Auth::user()->address : '')}}" class="input-text"></li>
                                                            <li>Thành phố<span>*</span></li>
                                                            <li><input required type="text" title="City" name="city" value="{{old('city')}}" class="input-text  required-entry" id="billing:city"></li>
                                                            <li>Số điện thoại<span>*</span></li>
                                                            <li><input required type="text" name="telephone" value="{{!empty(old('telephone')) ? old('telephone') : (!empty(Auth::user()->phone) ? Auth::user()->phone : '')}}" title="Telephone" class="input-text  required-entry" id="billing:telephone"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                </div>
							</div>
                            <div class="panel accordion-group">
								<div class="accordion-heading" id="headingFive">
								  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<span>2</span>Đơn hàng
								  </a>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" aria-labelledby="headingFive">
								  <div class="accordion-inner">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="accordion_total_pricing">
													<table id="product_details_price">
														<tr>
															<th>Tên SP</th>
															<th>Giá</th>
															<th>SL</th>
															<th>Tổng</th>
														</tr>

                                                        @foreach($items as $item)
                                                            <tr>
                                                                <td><h2>{{$item->name}}</h2></td>
                                                                <td>{{ number_format($item->price, 0, '.', ',') }} VNĐ</td>
                                                                <td>{{$item->qty}}</td>
                                                                <td>{{ number_format($item->qty * $item->price, 0, '.', ',') }} VNĐ</td>
                                                            </tr>
                                                        @endforeach
													</table>
													<table id="product_details_rate">
														<tr>
															<td>Tổng</td>
															<td>{{$totalPrice}}VNĐ</td>
														</tr>
														<tr>
															<td>Phí ship (Flat Rate - Fixed)</td>
															<td>0VNĐ</td>
														</tr>
														<tr>
															<th>Tổng tiền</th>
															<th>{{$totalPrice}}VNĐ</th>
														</tr>
													</table>
												</div>
                                               {{-- <div class="shopping_details_des">
                                                    <h2>Discount Codes</h2>
                                                    <h3>Enter your coupon code if you have one.</h3>
                                                    <div class="shopping_form">
                                                        <form action="{{route('apply_coupon')}}" method="post">
                                                            @csrf
                                                            <input class="input-text validate-postcode" type="text" name="coupon_code" value="{{old('coupon_code')}}">
                                                            <div class="review_button product_tag_add">
                                                                <button type="submit" title="Submit Review" class="button">Apply Coupon</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>--}}
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="Continue_button">
                                                            <button type="submit" title="Place Order" class="button" onclick="return confirm('Bạn chắc chắn muốn mua những sản phẩm trên?')">ĐẶT HÀNG</button>
                                                        </div>
                                                    </div>
                                                </div>
											</div>
										</div>
								  </div>
								</div>
							</div>
                            </form>
                        </div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="check_progress">
							<h2>Quá trình thanh toán</h2>
							<ul id="progress_btn">
								<li><i class="fa fa-minus"></i>Điền thông tin</li>
								<li><i class="fa fa-minus"></i>Đơn hàng</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

        @else
            <div>

            </div>
            <div class="cart-collaterals-item">
                <div class="container" style="text-align: center; text-transform: uppercase;">
                    <div class="row">
                        <p style="text-align: center; text-transform: uppercase;"> Giỏ hàng rỗng</p>
                    </div>
                    <div class="shopping_button">
                        <button type="button" title="shop"  class="continue_shopping" onclick="location.href = '{{asset('shop')}}';">Tiếp tục mua sắm</button>
                    </div>
                </div>
            </div>

        @endif
@endsection
