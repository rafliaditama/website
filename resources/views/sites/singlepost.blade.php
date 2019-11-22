@extends('layout.frontend')

@section('content')
<section class="banner-area relative" id="home" style="background: url('{{config('sekolah.image_single_url')}}');" >	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								POSTS		
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="#">Sweet </a> <span class="lnr lnr-arrow-right"></span> <a href="/"> Home</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="{{$post->user->avatar}}" alt="">
									</div>									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$post->user->name}}</a><span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$post->created_at->format('D, d M Y')}}</a> <span class="lnr lnr-calendar-full"></span></p>
										<ul class="social-links col-lg-12 col-md-12 col-6">
											<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>																				
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{$post->title}}</h3>
									<p align="justify" class="excert">
										{{$post->isi_content}}
									</p>									
								</div>								
							</div>
							<div class="navigation-area">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
										</div>
										<div class="arrow">
											<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
									</div>							
								</div>
							</div>
							<div class="comments-area">
								<h4>Kolom Komentar</h4>
								<div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c1.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Emilly Blunt</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	
                               <!-- REPLY -->
								<div class="comment-list left-padding">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="img/blog/c2.jpg" alt="">
                                            </div>
                                            <div class="desc">
                                                <h5><a href="#">Elsie Cunningham</a></h5>
                                                <p class="date">December 4, 2017 at 3:12 pm </p>
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply-btn">
                                               <a href="" class="btn-reply text-uppercase">reply</a> 
                                        </div>
                                    </div>
                                </div>	                                            				
							</div>
							<div class="comment-form">
								<h4>Tinggalkan Komentar</h4>
								<form>
									<div class="form-group form-inline">
									  <div class="form-group col-lg-6 col-md-12 name">
									    <input type="text" class="form-control" id="name" placeholder="Nama Depan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Depan'">
									  </div>
									  <div class="form-group col-lg-6 col-md-12 email">
									    <input type="email" class="form-control" id="email" placeholder="Email mu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email mu">
									  </div>										
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" placeholder="Subjek" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subjel'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'" required=""></textarea>
									</div>
									<a href="#" class="primary-btn text-uppercase">Kirim</a>	
								</form>
							</div>
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<div class="single-sidebar-widget user-info-widget">
									<img src="img/blog/user-info.png" alt="">
									<a href="#"><h4>{{$post->user->name}}</h4></a>
									<p>
										{{$post->user->role}}
									</p>
									<ul class="social-links">
										<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									</ul>
									<p>
										Y
									</p>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp1.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp2.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp3.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="img/blog/pp4.jpg" alt="">
											</div>
											<div class="details">
												<a href="blog-single.html"><h6>Asteroids telescope</h6></a>
												<p>02 Hours ago</p>
											</div>
										</div>															
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
								</div>
								<div class="single-sidebar-widget post-category-widget">
									<h4 class="category-title">Kategori Postingan</h4>
									<ul class="cat-list">
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Game</p>
												<p>37</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Teknologi</p>
												<p>24</p>
											</a>
										</li>
										<li>
											<a href="#" class="d-flex justify-content-between">
												<p>Pemgorgraman</p>
												<p>59</p>
											</a>
										</li>																
									</ul>
								</div>	
								<div class="single-sidebar-widget newsletter-widget">
									<h4 class="newsletter-title">Email Saya</h4>
									<p>
										Anda suka dengan artikel ini ? Kirim saya email tentang kritik dan saran ^_^
									</p>
									<div class="form-group d-flex flex-row">
									   <div class="col-autos">
									      <div class="input-group">
									        <div class="input-group-prepend">
									          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
									        </div>
									        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email-mu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
									      </div>
									    </div>
									    <a href="#" class="bbtns">Berlangganan</a>
									</div>	
									<p class="text-bottom">
										Kamu bisa dapat kesini kapan pun kamu mau
									</p>								
								</div>
								<div class="single-sidebar-widget tag-cloud-widget">
									<h4 class="tagcloud-title">Tag Clouds</h4>
									<ul>
										<li><a href="#">Game</a></li>
										<li><a href="#">Teknologi</a></li>
										<li><a href="#">Pemrograman</a></li>								
									</ul>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
@endsection