@extends('frontend/layout')
@section('title', 'Detail Product')
@section('content')
		<!-- breadcrumbs area -->
		<div class="breadcrumbs_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcrumb-single breadcrumb_top">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Home</a></li>
								<li><span>I</span></li>
								<li>@foreach($topicList as $topic)
                                        @if ($product->topic_id == $topic->id)
                                            <a href="#">{{$topic->topic_name}}</a>
                                        @endif
                                    @endforeach
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End breadcrumbs area -->
		<!-- Start preview Product details area -->
		<div class="blog_single_view_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="my_tabs">
							<div class="tab-content tab_content_style">
								<div id="tab1" class="tab-pane fade in active">
									<div class="blog_tabs">
										<a class="fancybox" href="img/product/pr1.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/pr1.png" alt="" /></a>
									</div>
								</div>
								<div id="tab2" class="tab-pane fade">
									<div class="blog_tabs">
										<a class="fancybox" href="img/product/pr2.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/pr2.png" alt="" /></a>
									</div>
								</div>
								<div id="tab3" class="tab-pane fade">
									<div class="blog_tabs">
										<a class="fancybox" href="img/product/pr3.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/pr3.png" alt="" /></a>
									</div>
								</div>
								<div id="tab4" class="tab-pane fade">
									<div class="blog_tabs">
										<a class="fancybox" href="img/product/pr4.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/pr4.png" alt="" /></a>
									</div>
								</div>
								<div id="tab5" class="tab-pane fade">
									<div class="blog_tabs">
										<a class="fancybox" href="img/product/pr5.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/pr5.png" alt="" /></a>
									</div>
								</div>
							</div>
							<div class="blog_view_list">
								<ul class="tab_style tab_bottom">
									<li class="active">
										<div class="blog_single_carousel">
										<a data-toggle="tab" href="#tab1"><img src="img/product/pr6.png" alt="" /></a>
										</div>
									</li>
									<li>
										<div class="blog_single_carousel">
										<a data-toggle="tab" href="#tab2"><img src="img/product/pr7.png" alt="" /></a>
										</div>
									</li>
									<li>
										<div class="blog_single_carousel">
										<a data-toggle="tab" href="#tab3"><img src="img/product/pr8.png" alt="" /></a>
										</div>
									</li>
									<li>
										<div class="blog_single_carousel">
										<a data-toggle="tab" href="#tab4"><img src="img/product/pr9.png" alt="" /></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="blog_product_details">
							<h2 class="blog_heading"><a href="">{{$product->product_name}}</a></h2>
							<div class="product_rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product_rating">
								<a href="#">1 Review(s) <span>I</span></a>
								<a href="#"> Add Your Review</a>
							</div>
							<div class="pricing_rate">
								<p class="stack">Availability:
                                    @if($product->qty !=0)
                                        <span class="in-stock"> In stock</span>
                                    @else
                                        <span class="in-stock"> Out of stock</span>
                                    @endif
                                </p>
                                @if(!empty($product->sale_price))
                                    <p class="rating_dollor rating_margin"><span class="rating_value_one dollor_size">${{ number_format($product->price, 0, '.', ',') }}</span> <span class="rating_value_two">${{ number_format($product->sale_price, 0, '.', ',') }}</span></p>
                                @elseif(empty($product->sale_price))
                                    <p class="rating_dollor rating_margin"><span class="rating_value_two">${{ number_format($product->price, 0, '.', ',') }}</span></p>

                                @endif
								<p class="blog_texts">{{$product->title}}}</p>
							</div>
							<div class="product_blog_button">
								<div class="cart_blog_details blog_icon_border">
									<a href="" target="blank"><i class="fa fa-heart-o"></i></a>
								</div>
								<div class="cart_blog_details blog_icon_border">
									<a href="" target="expand"><i class="fa fa-retweet"></i></a>
								</div>
								<div class="cart_blog_details blog_icon_border">
									<a href="" target="heart"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<div class="product_options_area">
							<div class="product_options_selection">
								<ul id="options_selection">
									<li><span class="star_color">*</span><span class="Product_color">color</span> <span class="required">*Required Fields</span></li>
									<li>
									<select>
										<option value="" selected="selected">-- Please Select --</option>
                                        @foreach($colorList as $color)
                                                @if(in_array($color->id, $colorChoosed ))
                                                    <option value="{{$color->id}}">{{$color->color_name}}</option>
                                                @endif
                                        @endforeach
									</select>
									</li>
									<li><span class="star_color">*</span><span class="Product_color">size</span></li>
									<li>
									<select>
										<option value="" selected="selected">-- Please Select --</option>
                                        @foreach($sizeList as $size)
                                            @if(in_array($size->id, $sizeChoosed ))
                                                <option value="{{$size->id}}">{{$size->size_name}}</option>
                                            @endif
                                        @endforeach
									</select>
									</li>
								</ul>
							</div>
							<div class="cart_blog_item">
								<p class="rating_dollor rating_margin"><span class="rating_value_one dollor_size">$170.00</span> <span class="rating_value_two">$12.00</span></p>
								<div class="add-to-cart">
									<input type="text" title="Qty" value="1" class="qty"/>
									<button type="button" title="Add to Cart"  class="cart_button"  onclick="location.href = '{{asset('cart/add/'.$product->id)}}';"><span>Add to Cart</span></button>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End preview Product details area -->
		<!-- Start Product details tabs area -->
		<div class="product_collateral_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="my_tabs_description">
							<ul class="tab_style">
								<li class="active">
									<a data-toggle="tab" href="#tab-1">Product Description</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab-2">Reviews</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab-3">Product Tags</a>
								</li>
							</ul>
							<div class="tab-content tab_content_style">
								<div id="tab-1" class="tab-pane fade in active">
									<div class="product_description">
                                        <p>{{$product->description}}</p>
									</div>
								</div>
								<div id="tab-2" class="tab-pane fade">
									<div class="product_description">
										<ul id="Motorola">
											<li><a href="#">Motorola</a> Review by <span class="Motorola_cl">Motorola</span></li>
											<li><span>Quality</span>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</li>
											<li><span>Price</span>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</li>
											<li><span>Value</span>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</li>
											<li>Motorola (Posted on 11/2/2015)</li>
										</ul>
										<div class="fieldsets">
											<h3>You're reviewing: <span>Lorem ipsum dolor</span></h3>
											<h4>How do you rate this product?*</h4>
											<div class="start_tab_pricing_area">
												<fieldset>
													<table class="star_pricing_tb">
														<tr>
															<th></th>
															<th>1 Star</th>
															<th>2 Stars</th>
															<th>3 Stars</th>
															<th>4 Stars</th>
															<th>5 Stars</th>
														</tr>
														<tr>
															<td>Quality</td>
															<td><input type="radio" name="ratings[1]" value="1" class="radio"></td>
															<td><input type="radio" name="ratings[1]" value="2" class="radio"></td>
															<td><input type="radio" name="ratings[1]" value="3" class="radio"></td>
															<td><input type="radio" name="ratings[1]" value="4" class="radio"></td>
															<td><input type="radio" name="ratings[1]" value="5" class="radio"></td>
														</tr>
														<tr>
															<td>Price</td>
															<td><input type="radio" name="ratings[2]" value="6" class="radio"></td>
															<td><input type="radio" name="ratings[2]" value="7" class="radio"></td>
															<td><input type="radio" name="ratings[2]" value="8" class="radio"></td>
															<td><input type="radio" name="ratings[2]" value="9" class="radio"></td>
															<td><input type="radio" name="ratings[2]" value="10" class="radio"></td>
														</tr>
														<tr>
															<td>Value</td>
															<td><input type="radio" name="ratings[3]" value="11" class="radio"></td>
															<td><input type="radio" name="ratings[3]" value="12" class="radio"></td>
															<td><input type="radio" name="ratings[3]" value="13" class="radio"></td>
															<td><input type="radio" name="ratings[3]" value="14" class="radio"></td>
															<td><input type="radio" name="ratings[3]" value="15" class="radio"></td>
														</tr>
													</table>
												</fieldset>
											</div>

											<div class="rating_contact">
												<ul id="review_contact">
													<li>Nickname<span>*</span></li>
													<li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
													<li>Summary of Your Review<span>*</span></li>
													<li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
													<li>Review<span>*</span></li>
													<li><textarea name="detail" cols="5" rows="3" class="required-entry"></textarea></li>
												</ul>
											</div>
											<div class="review_button">
												<button type="submit" title="Submit Review" class="button">Submit Review</button>
											</div>
										</div>
									</div>
								</div>
								<div id="tab-3" class="tab-pane fade">
									<div class="product_description">
										<div class="product_tag_area">
											<h2>Other people marked this product with these tags:</h2>
											<ul id="product_tags">
												<li><a href="#">fashion</a> <span>(1)</span></li>
												<li><a href="#">Nunc</a> <span>(1)</span></li>
												<li><a href="#">facilisis</a> <span>(1)</span></li>
											</ul>
											<div class="add_tags">
												<h2>Add Your Tags:</h2>
												<input type="text" name="nickname" class="input-text required-entry" value="">
											</div>
											<div class="review_button product_tag_add">
												<button type="submit" title="Submit Review" class="button">Add Tags</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Product details tabs area -->
		<!-- Start upsell products area -->
		<div class="upsell_products">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature_text feature_upsell">
							<h4>Upsell Products</h4>
						</div>
						<div class="row">
							<div class="upsell_product_list ">
								@foreach($specialProduct as $specialPro)
                                    <div class="col-lg-3 " >
                                        <div class="single_upsell align-content-center">
                                            <a href="#"><img src="img/product/pr1.png" alt="" /></a>
                                            <div class="upsell_details">
                                                <h2><a href="">{{$specialPro->product_name}}</a></h2>
                                                <div class="product_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#">1 Review(s) <span>I</span></a>
                                                    <a href="#"> Add Your Review</a>
                                                </div>
                                                @if(!empty($specialPro->sale_price))
                                                    <p class="rating_dollor rating_margin"><del class="rating_value_one dollor_size">${{ number_format($specialPro->price, 0, '.', ',') }}</del> <span class="rating_value_two">${{ number_format($specialPro->sale_price, 0, '.', ',') }}</span></p>
                                                @elseif(empty($specialPro->sale_price))
                                                    <p class="rating_dollor rating_margin"><span class="rating_value_two">${{ number_format($specialPro->price, 0, '.', ',') }}</span></p>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End upsell products area -->
		<!-- Start Related products area -->
		<div class="related_products_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature_text feature_upsell">
							<h4>Related Products</h4>
						</div>
						<div class="row">
							<div class="upsell_product_list">
                                @foreach($relatedProduct as $relatedPro)
                                    <div class="col-lg-3 " >
                                        <div class="single_upsell align-content-center">
                                            <a href="#"><img src="img/product/pr1.png" alt="" /></a>
                                            <div class="upsell_details">
                                                <h2><a href="">{{$relatedPro->product_name}}</a></h2>
                                                <div class="product_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#">1 Review(s) <span>I</span></a>
                                                    <a href="#"> Add Your Review</a>
                                                </div>
                                                @if(!empty($relatedPro->sale_price))
                                                    <p class="rating_dollor rating_margin"><del class="rating_value_one dollor_size">${{ number_format($relatedPro->price, 0, '.', ',') }}</del> <span class="rating_value_two">${{ number_format($relatedPro->sale_price, 0, '.', ',') }}</span></p>
                                                @elseif(empty($relatedPro->sale_price))
                                                    <p class="rating_dollor rating_margin"><span class="rating_value_two">${{ number_format($relatedPro->price, 0, '.', ',') }}</span></p>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Related products area -->
@endsection
