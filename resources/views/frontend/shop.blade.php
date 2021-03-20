@extends('frontend/layout')
@section('title', 'Shop')
@section('content')
		<!--Start breadcrumbs area -->
		<div class="breadcrumbs_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcrumb-single">
							<ul id="breadcrumbs">
								<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
								<li><span>Ι</span></li>
								<li>Clothings</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End breadcrumbs area -->
		<!--Start clothing product area -->
		<div class="clothing_product_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="catagory_price_color">
							<div class="catagory_area">
								<h2>TOPIC</h2>
								<ul class="catagory">
                                    @foreach($topicList as $topic)
                                        <li><a href="{{asset('topic/'.$topic->id)}}"><i class="fa fa-angle-right"></i>{{$topic->topic_name}}</a> <span></span></li>
                                    @endforeach
								</ul>
							</div>
							<div class="priceing_area">
								<h2>Price</h2>
								<div class="info_widget">
									<div class="price_filter">
										<div id="slider-range"></div>
										<div class="price_slider_amount">
											<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
											<input type="submit"  value="Search"/>
										</div>
									</div>
								</div>
							</div>
							<div class="catagory_area">
								<h2>COLOR</h2>
								<ul class="catagory">
                                    @foreach($colorList as $color)
                                        <li><a href="{{asset('color/'.$color->id)}}"><i class="fa fa-angle-right"></i>{{$color->color_name}}</a> <span></span></li>
                                    @endforeach

								</ul>
							</div>
						</div>
						<div class="popular_tag_area">
							<div class="popular_items">
								<h2>POPULAR TAGS</h2>
								<ul id="single_popular">
									<li><a href="#">Carnation</a></li>
									<li><a href="#">Yellow Rose</a></li>
									<li><a href="#">Orchids</a></li>
									<li><a href="#">Gladiolus</a></li>
									<li><a href="#">Sunflower</a></li>
									<li><a href="#">Magnolia</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="popular_tag_area popular_tag_response">
									<div class="popular_items">
										<h2>COMPARE PRODUCTS</h2>
										<div class="conpany_product_details">
											<p>You have no items to compare.</p>
											<a href="#"><img src="img/banner/banner_left.jpg" alt="" /></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="popular_tag_area">
									<div class="popular_items">
										<h2>Highlights</h2>
									</div>
								</div>
								<div class="clothing_carousel_list">
									<div class="single_clothing_product">
										<div class="clothing_item">
											<img src="img/product/pr1.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Beauty Calla Lily Bouquety</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$13.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/product/pr6.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Special Bouquet</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$12.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/product/pr8.png" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Breathtaking Beauty Bouquet</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
									</div>
									<div class="single_clothing_product">
										<div class="clothing_item">
											<img src="img/bestseller/10.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Cheerful Wishes Blooming Basket</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$14.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/bestseller/11_1.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
										<div class="clothing_item">
											<img src="img/bestseller/16.jpg" alt="" />
											<div class="product_clothing_details">
												<h2><a href="#">Nam ullamcorper vive</a></h2>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<p>$123.00</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="catagory_banner">
									<img src="img/banner/category.jpg" alt="" />
								</div>
							</div>
						</div>
						<div class="my_tabs">
							<ul class="tab_style">
								<li class="active"><a data-toggle="tab" href="#tab1"><span><i class="fa fa-th"></i></span></a></li>
								<li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
							</ul>
							<div class="limiter">
								<label>Show</label>
								<select>
									<option value="">9</option>
									<option value="" selected="selected">12</option>
									<option value="">24</option>
									<option value="">36</option>
								</select> per page
							</div>
							<div class="sort-by">
								<label>Sort By</label>
								<select>
									<option value="" selected="selected">Position</option>
									<option value="">Name</option>
									<option value="">Price</option>
								</select>
								<a href=""><i class="fa fa-long-arrow-up"></i></a>
							</div>
							<div class="tab-content tab_content_style">
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
                                        @foreach($products as $product)
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="product_list">
                                                    <div class="single_product">
                                                        <a href="{{asset('product_detail/'.$product->product_id)}}" target="main"><img src="img/product/pr1.png" alt="" /></a>
                                                        <div class="product_details">
                                                            <h2>{{$product->product_name}}</h2>
                                                            @if(!empty($product->sale_price))
                                                                <p><span class="regular_price">{{ number_format($product->price, 0, '.', ',') }}$</span> <span class="popular_price">
                                                    {{ number_format($product->sale_price, 0, '.', ',') }}$
                                            </span>
                                                                </p>
                                                            @elseif(empty($product->sale_price))
                                                                <p> <span class="popular_price">
                                                    {{ number_format($product->price, 0, '.', ',') }}$
                                            </span>
                                                                </p>
                                                            @endif
                                                        </div>
                                                        <div class="product_detail">
                                                            <div class="star_icon">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>
                                                            <div class="product_button">
                                                                <div class="cart_details">
                                                                    <a href="{{ asset('cart/add/'.$product->product_id)}}" target="blank">Add to cart</a>
                                                                </div>
                                                                <div class="cart_details">
                                                                    <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                                <div class="cart_details">
                                                                    <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if(!empty($product->sale_price))
                                                            <div class="sale_product">
                                                                <h5>Sale</h5>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="blog_pagination">
												<h2>Page:</h2>
												{{--<ul class="pagination_list">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a></li>
												</ul>--}}
                                                <div id="pagination">
                                                    {{ $products->links() }}
                                                </div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab2" class="tab-pane fade">
                                    @foreach($products as $product)
									    <div class="row">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
											<div class="product_blog_image">
												<div class="product_blog_image">
													<a href="{{asset('product_detail/'.$product->product_id)}}"><img src="img/product/pr1.png" alt="" /></a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
                                                    @if(!empty($product->sale_price))
                                                        <p class="rating_dollor">
                                                            <span class="rating_value_one">{{ number_format($product->price, 0, '.', ',') }}$</span> <span class="popular_price">
                                                            {{ number_format($product->sale_price, 0, '.', ',') }}$
                                                            </span>
                                                        </p>
                                                    @elseif(empty($product->sale_price))
                                                        <p class="rating_dollor"> <span class="rating_value_two">
                                                                {{ number_format($product->price, 0, '.', ',') }}$
                                                            </span>
                                                        </p>
                                                    @endif
{{--													<p class="rating_dollor"><span class="rating_value_one">$19.00</span> <span class="rating_value_two">$16.00</span></p>--}}
													<p class="blog_texts">{{$product->title}}<a class="learn_more" href="#">Learn More</a></p>
												</div>
												<div class="product_blog_button">
													<div class="cart_blog_details">
														<a href="{{ asset('cart/add/'.$product->product_id)}}" target="blank">Add to cart</a>
													</div>
													<div class="cart_blog_details">
														<a href="#" target="expand"><i class="fa fa-expand"></i></a>
													</div>
													<div class="cart_blog_details">
														<a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
									<div class="row">
										<div class="col-lg-12">
											<div class="blog_pagination">
												<h2>Page:</h2>
												<ul class="pagination_list">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a></li>
												</ul>
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
		<!--End clothing product area -->

        <script>
            function addToCartAjax(rowId) {
                $.ajax({
                    type: "GET",
                    url: '{{asset('cart/ajax_add')}}',
                    data: {
                        'rowId':rowId
                    },
                    success: function(data)
                    {
                        //location.reload();
                    }
                });
            }
        </script>
@endsection
