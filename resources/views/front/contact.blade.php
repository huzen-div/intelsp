@extends('front.master')

@section('content')
	<div class="contact_details sec-padd">
			<div class="home-google-map">
				<!--<div 
					class="google-map" 
					id="contact-google-map" 
					data-map-lat="40.7128" 
					data-map-lng="-74.0060" 
					data-icon-path="images/logo/map-marker.png"
					data-map-title="Chester"
					data-map-zoom="10" >
				</div>-->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.371111283066!2d100.52962011483051!3d13.756479790344402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29eca8e6778b3%3A0xd4ef3714cbf0dbfc!2z4Lie4LiN4Liy4LmE4LiXIOC4nuC4peC4suC4i-C5iOC4siDguYHguILguKfguIcg4LiX4Li44LmI4LiH4Lie4LiN4Liy4LmE4LiXIOC5gOC4guC4leC4o-C4suC4iuC5gOC4l-C4p-C4tSDguIHguKPguLjguIfguYDguJfguJ7guKHguKvguLLguJnguITguKMgMTA0MDA!5e0!3m2!1sth!2sth!4v1621920491378!5m2!1sth!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
	</div>
		
		<section class="feature-style-three">
			<div class="container">			
				<div class="item-list">
					<div class="row">
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-pin-1"></span></div>
									<h3>Location</h3>
									<div class="text"><p>432 Zafer Street New youk 234 America</p></div>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-cell-phone"></span></div>
									<h3>Phone Number</h3>
									<div class="text"><p>+(333) 052 39876 <br>+(333) 052 39876</p></div>
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="column col-md-4 col-sm-6 col-xs-12">
								<div class="inner-box">
									<div class="icon-box"><span class="icon flaticon-message"></span></div>
									<h3>E-Mail Us</h3>
									<div class="text"><p>Supportinfo@yourdomain.com <br>Supportinfo@domain.com</p></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>Get In Touch</h2>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Perspiciatis unde omnis iste natus error sit.</p>
                </div>
                <div class="default-form-area">
					<form id="contact-form" name="contact_form" class="col-md-10 col-md-offset-1 default-form" action="php/form-to-email.php" method="post">
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
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<textarea name="form_message" class="form-control textarea required" placeholder="Your Message"></textarea>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
								<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
							</div>
						</div> 
					</form>
				</div>          
			</div>
		</section>
@endsection