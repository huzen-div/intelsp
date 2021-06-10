@extends('front.master')

@section('content')
		<!--Page Title-->
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
				<h1>Blog Details</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="index.html">Home</a></li>
					<li><a class="inner" href="#">Blog Details</a></li>
				</ul>
			</div>
		</section>
        <!--Page Title Ends-->
		
		 <!--Sidebar Page-->
		<div class="sidebar-page">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="col-md-8 col-sm-12 col-xs-12">
						<section class="blog-container news">  
							<div class="news-post">
								<div class="news-post-image">
										
									<div class="news-category"><a href="#">Business Consulting</a></div>	
									<img src="images/resources/bs.jpg" alt="Image" class="img-responsive">
								</div>
								<div class="news-post-text">
									<h3><a href="#">Successfull business tips and tricks way to grow</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio provident nihil facilis molestiae maxime ipsum hic harum esse sunt, magni, adipisci doloremque omnis ex, earum sint possimus necessitatibus ducimus dolores Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nostrum, facere a voluptates quos culpa odit earum aut itaque quisquam dolor necessitatibus at. Dolore, ut ipsum eum vero natus quas.</p>
								</div>
								<ul class="s-list list-unstyled mb-20" style="padding-left:40px;margin-top:10px">
				                  <li><span class="fa fa-check"></span>Donec facilisis velit eu est phasellus consequat quis nostrud</li>
				                  <li><span class="fa fa-check"></span>Aenean vitae quam. Vivamus et nunc nunc conseq</li>
				                  <li><span class="fa fa-check"></span>Sem vel metus imperdiet lacinia enea sapiente maior</li>
				                  <li><span class="fa fa-check"></span>Dapibus aliquam augue fusce eleifend quisque tels</li>
				                  <li><span class="fa fa-check"></span>Dapibus aliquam augue fusce tels optio facilis sapiente maiores</li>
				                </ul>
				                <div class="news-post-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio provident nihil facilis molestiae maxime ipsum hic harum esse sunt, magni, adipisci doloremque omnis ex, earum sint possimus necessitatibus ducimus dolores Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nostrum, facere a voluptates quos culpa odit earum aut itaque quisquam dolor necessitatibus at. Dolore, ut ipsum eum vero natus quas.</p>
								</div>

				                <div class="blockquote-wraper" style="padding: 0 20px 0 40px">
				                	<blockquote>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
										<div class="quate"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
									</blockquote>
				                </div>
								<div class="clearfix"></div>
								<div class="news-post-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio provident nihil facilis molestiae maxime ipsum hic harum esse sunt, magni, adipisci doloremque omni. Dolore, ut ipsum eum vero natus quas.</p>
								</div>
								<div class="news-post-meta">
									<a href="#"><i class="fa fa-user"></i>Admin</a>
									<a href="#"><i class="fa fa-heart-o"></i> 370 likes</a>
									<a href="#"><i class="fa fa-comments-o"></i> 24 comments</a>
								</div>
								<div class="tag-share clearfix">
			                        <div style="float:left">
			                            <ul class="popular-tag">
				                            <li><a href="#">Business</a></li>
				                            <li><a href="#">Exchange</a></li>
				                            <li><a href="#">Crypto</a></li>
				                            <li><a href="#">Buy</a></li>
				                        </ul>
			                        </div>
			                       <div class="icon" style="float:right">
										<ul class="list-unstyled list-inline">
											<li>Share:</li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
									</div>
			                    </div>
							</div>
							<div class="clearfix"></div>
							<!--Comments Area-->
							<div class="news-details">
								<div class="comments">
			                        <div class="article comment clearfix">
			                            <div class="author-pic">
			                                <img src="images/blog/testi-image-1.jpg" alt="">
			                            </div>
			                            <div class="details">
			                                <div class="author-meta">
			                                    <div class="name"><h4>Nasery Wright</h4></div>
			                                    <div class="date"><span>2 hours ago</span></div>
			                                </div>
			                                <div class="comment-content">
			                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			                                </div>
			                                <div class="replay">
			                                    <button>Replay</button>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="article comment-reply clearfix">
			                            <div class="author-pic">
			                                <img src="images/blog/testi-image-2.jpg" alt="">
			                            </div>
			                            <div class="details">
			                                <div class="author-meta">
			                                    <div class="name"><h4>Johab Doe</h4></div>
			                                    <div class="date"><span>2 hours ago</span></div>
			                                </div>
			                                <div class="comment-content">
			                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>
			                                </div>
			                                <div class="replay">
			                                    <button>Replay</button>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="article comment clearfix">
			                            <div class="author-pic">
			                                <img src="images/blog/testi-image-3.jpg" alt="">
			                            </div>
			                            <div class="details">
			                                <div class="author-meta">
			                                    <div class="name"><h4>Amila Smith</h4></div>
			                                    <div class="date"><span>2 hours ago</span></div>
			                                </div>
			                                <div class="comment-content">
			                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
			                                </div>
			                                <div class="replay">
			                                    <button>Replay</button>
			                                </div>
			                            </div>
			                         </div>
			                    </div>
							</div>
							<div class="clearfix"></div>

							<div class="leave-comment">
								<div class="section-title">
									<h3>Leave a Comment</h3>
								</div>
								<div class="default-form-area">
									<form id="contact-form" name="contact_form" class="default-form" action="#" method="post">
										<div class="row clearfix">
											<div class="col-md-6 col-sm-6 col-xs-12">
												
												<div class="form-group style-two">
													<input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group style-two">
													<input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
												</div>
											</div>	
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="form-group style-two">
													<textarea name="form_message" class="form-control textarea required" placeholder="Comment"></textarea>
												</div>
											</div> 				  
											<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="form-group style-two">
													<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
													<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
												</div>
											</div>   

										</div>
									</form>
								</div>
							</div>                                                          
						</section> 
					</div>
					<!--Content Side-->
					
					<!--Sidebar-->	
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="sidebar-wrapper">
		                    <!--Start single sidebar-->
		                    <div class="single-sidebar">
		                        <form class="search-form" action="#">
									<input placeholder="Search..." type="text">
									<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
		                    </div>
		                    <!--End single sidebar-->
		                    <!--Start single sidebar-->
		                    <div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Categories</h3>
		                        </div>
		                        <ul class="categories clearfix">
		                            <li><a href="#">Business Investment<span>(5)</span></a></li>
		                            <li><a href="#">Crypto currencies<span>(7)</span></a></li>
		                            <li><a href="#">Business Mining<span>(3)</span></a></li>
		                            <li><a href="#">Exchange Crypto<span>(10)</span></a></li>
		                            <li><a href="#">Escrow Service<span>(10)</span></a></li>
		                            <li><a href="#">Uncategorized<span>(4)</span></a></li>
		                        </ul>
		                    </div>
		                    <!--End single sidebar-->
		                    <!--Start single sidebar--> 
		                    <div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Categories</h3>
		                        </div>
		                        <ul class="categories clearfix">
		                            <li><a href="#">Business Investment<span>(5)</span></a></li>
		                            <li><a href="#">Financial Strategies<span>(7)</span></a></li>
		                            <li><a href="#">Business Planning<span>(3)</span></a></li>
		                            <li><a href="#">Marketing Rates<span>(10)</span></a></li>
		                            <li><a href="#">Escrow Service<span>(10)</span></a></li>
		                            <li><a href="#">Uncategorized<span>(4)</span></a></li>
		                        </ul>
		                    </div>
		                    <!--End single sidebar-->
		                    <!--Start single sidebar--> 
		                    <div class="single-sidebar">
		                        <div class="wedgit-title">
		                            <h3>Popular Post</h3>
		                        </div>
		                        <ul class="popular-post">
		                            <li>
		                                <div class="img-holder">
		                                    <img src="images/blog/sidebar/popular-post-1.png" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="#"><h5 class="post-title">11 Things You Need to Know About Business – Bare Facts</h5></a>
		                                    <h6 class="post-date">December 14, 2018</h6>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="img-holder">
		                                    <img src="images/blog/sidebar/popular-post-2.png" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="#"><h5 class="post-title">What Comes After the Business growth Bubble?</h5></a>
		                                    <h6 class="post-date">December 13, 2018</h6>
		                                </div>
		                            </li>
		                            <li>
		                                <div class="img-holder">
		                                    <img src="images/blog/sidebar/popular-post-3.png" alt="Awesome Image">
		                                    <div class="overlay-style-one">
		                                        <div class="box">
		                                            <div class="content">
		                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="title-holder">
		                                    <a href="#"><h5 class="post-title">Platform and Market Maker Helps Financial and Business</h5></a>
		                                    <h6 class="post-date">December 10, 2018</h6>
		                                </div>
		                            </li>
		                           
		                        </ul>
		                    </div>
		                    <!--End single sidebar-->
		                    <!--Start single-sidebar-->    
		                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0" style="visibility: hidden; animation-duration: 1s; animation-delay: 0s; animation-name: none;">
		                        
		                        <div class="question">
		                            <div class="img-box"><figure><img src="images/services/q1.jpg" alt=""></figure></div>
		                            <div class="content">
		                                <h3>Got any<br>
		                                Questions?</h3>
		                                <div class="call"><i class="fa fa-phone"></i><h4>(333) 052 39876</h4></div>
		                            </div>
		                        </div>
		                    </div>
		                    <!--End single-sidebar--> 
		                    
		                    <!--Start single-sidebar-->
		                    <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0" style="visibility: hidden; animation-duration: 1s; animation-delay: 0s; animation-name: none;">
		                        <div class="wedgit-title">
		                            <h3>Tag Cloud</h3>
		                        </div>
		                        <ul class="popular-tag">
		                            <li><a href="#">Business</a></li>
		                            <li><a href="#">Services</a></li>
		                            <li><a href="#">Marketing</a></li>
		                            <li><a href="#">Investments</a></li>
		                            <li><a href="#">Growth</a></li>
		                            <li><a href="#">Investment</a></li>
		                            <li><a href="#">Planning</a></li>
		                            <li><a href="#">Growth</a></li>
		                            <li><a href="#">Sell Business</a></li>
		                        </ul>      
		                    </div>
		                    <!--End single-sidebar-->
		                </div>                                  
					</div>
					<!--Sidebar-->                           
				</div>
			</div>
		</div>
@endsection