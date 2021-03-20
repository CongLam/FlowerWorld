@extends('frontend/layout')
@section('title', 'Blog')
@section('content')

		<!--Start single blog area -->
		<div class="blog_post_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
						<div class="breadcrumb-single blog_top_area">
							<ul id="breadcrumbs">
								<li><a href=""><i class="fa fa-home"></i>Home</a></li>
								<li><span>Ι</span></li>
								<li>Blog</li>
								<li><span>Ι</span></li>
								<li>Images</li>
							</ul>
						</div>
						<div class="blog_list_area">
							<div class="single_blog_area">
								<img src="img/slider-image/1.jpg" alt="" />
							</div>
							<div class="single_blog_area">
								<img src="img/slider-image/2.jpg" alt="" />
							</div>
							<div class="single_blog_area">
								<img src="img/slider-image/3.jpg" alt="" />
							</div>
						</div>
						<div class="blog_details_area">
							<i class="fa fa-picture-o"></i>
							<div class="blog_details_list">
								<ul class="blog_author">
									<li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
									<li><i class="fa fa-user"></i> Super User</li>
									<li><i class="fa fa-eye"></i> Hits: 256</li>
									<li>
										<div class="star_blog">
											Rating:
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</li>
								</ul>
							</div>
							<div class="blog_info_details">
								 <h2><a class="blog_info_heading" href="#">Images</a></h2>
								 <p class="blog_paragrap_style">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit.</p>
								 <p class="blog_paragrap_style">Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.</p>
								<blockquote>
									<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
								</blockquote>
								 <p class="blog_paragrap_style">Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
								 <p class="blog_paragrap_style">Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
							</div>
						</div>
						<div class="blog_social_icon">
							<img src="img/social/shareicon.png" alt="" />
						</div>
						<div class="blog_add_comment_area">
							<div class="row">
								<div class="col-lg-12">
									<div class="comment_text">
										<h2>Add comment</h2>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="comment_name">
										<input type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="comment_email">
										<input type="text" placeholder="E-mail">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="comment_title">
										<input type="text" placeholder="Title">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="comment_textarea">
										<textarea cols="65" rows="8"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="chapcha">
										<img src="img/social/capcha.jpg" alt="" />
									</div>
								</div>
								<div class="col-lg-12">
									<div class="chapcha_type">
										<input type="text">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="send_button">
										<input type="submit" value="Send">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="blog_right_sidebar">
                           <h2 class="sp_module_title"><span>Newsletter</span></h2>
                           <div class="sub_area">
                               <form action="#">
                                   <input type="text" placeholder="E-mail">
                                   <input type="submit" value="Subscribe">
                               </form>
                           </div>
                           <div class="latest_posts">
                               <h3 class="sp_module_title sp_module_title_rv"><span>Latest Posts</span></h3>
                               <div class="single_l_post">
                                   <a href="#">Images</a>
                                   <p>23 May 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">Video</a>
                                   <p>23 May 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">Jerky shank chicken boudin</a>
                                   <p>2 Jun 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">Nirob</a>
                                   <p>20 Oct 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">Salim</a>
                                   <p>6 Sept 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">shank chicken boudin</a>
                                   <p>7 Sept 2015</p>
                               </div>
                               <div class="single_l_post">
                                   <a href="#">Parvez</a>
                                   <p>8 Sept 2015</p>
                               </div>
                           </div>
                          <div class="add_r_sidebar">
                              <p class="banner_block"><a href="#"><img alt="" src="img/banner/3.jpg"></a></p>
                          </div>
                       </div>
					</div>
				</div>
			</div>
		</div>
		<!--End single blog area -->
		<!--Start Footer Banner area -->
		<div class="blog_banner_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_banner">
							<div class="banner_home_inner">
								<a href="#">
									<img alt="" src="img/banner/2.jpg">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Start Footer Banner area -->

@endsection
