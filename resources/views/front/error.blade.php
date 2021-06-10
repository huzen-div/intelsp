@extends('front.master')

@section('content')
		<!--Page Title-->
        <section class="bredcrumb">
			<div class="bg-image text-center" style="background-image: url('images/resources/banner.jpg');">
				<h1>Error Page</h1>
			</div>
			<div class="">
				<ul class= "middle">
					<li><a href="index.html">Home</a></li>
					<li><a class="inner" href="#">Error Page</a></li>
				</ul>
			</div>
		</section>
        <!--Page Title Ends-->
		
		<section class="error-page">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<figure class="image-box">
							<img src="images/resources/error.jpg" alt="" />
						</figure>
					</div>
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="content-box">
							<h1>404</h1>
							<h2>Oops! Page Not Found!</h2>
							<p>Try to Search for the Best Match or Visit our Home Page</p>
							<div class="sidebar_search">
								<form action="#">
									<input type="text" placeholder="Search....">
									<button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div> 
							<ul class="link_btn">
								<li><a href="index.html" class="thm-btn style-two">go to home</a></li>
							</ul>
						</div>
						 
					</div>
				</div>
			</div>
		</section>
@endsection