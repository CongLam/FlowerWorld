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
									<li><i class="fa fa-user"></i> {{$blog->blog_category_name}}</li>
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
                                <h2>{{$blog->title}}</h2>
                                <div class="image" style="margin: auto"><img width="200px" src="{{ asset('storage/blog_thumbnail/'.$blog->thumbnail) }}" alt=""></div>

                                <div class="date"><i>Posted at: {{$blog->created_at}}</i> </div>
                                <div class="content">
                                    {!! $blog->content !!}
                                </div>
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
                               @foreach($latest as $lat)
                                   <div class="single_l_post">
                                       <a href="#">{{$lat->title}}</a>
                                       <p>{{($lat->created_at)}}</p>
                                   </div>
                               @endforeach
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
