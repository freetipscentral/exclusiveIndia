<?php include 'header.php';?>

<!-- MAP BLOCK -->
<div class="map-block">
	<div id="map-canvas" class="style-4" data-lat="33.664467" data-lng="-117.601586" data-zoom="10" data-style="2"></div>
    <div class="addresses-block">
        <a data-lat="33.664467" data-lng="-117.601586" data-string="Santa Monica Hotel"></a>
    </div>
</div>

<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">contact info</h4>
					<h2>get in touch</h2>
				</div>
			</div>
		</div>
		<div class="contact-row">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/loc_icon_2_dark.png" alt="">
						<div class="contact-label color-grey-3">Address:</div>
						<div class="contact-text color-dark-2">Aenean vulputate porttitor</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/mail_icon_l_dark.png" alt="">
						<div class="contact-label color-grey-3">Email us:</div>
						<a class="contact-text color-dark-2 link-dr-blue-2" href="mailto:let’s_travel@world.com">let’s_travel@world.com</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="contact-entry">
						<img class="contact-icon" src="img/phone_icon_3_dark.png" alt="">
						<div class="contact-label color-grey-3">Phone:</div>
						<a class="contact-text color-dark-2 link-dr-blue-2" href="tel:">+93 123 456 789</a>
					</div>
				</div>						
			</div>
		</div>
		<div class="share style-2 clearfix">
			<ul>
		      	<li class="color-in"><a href=""><i class="fa fa-linkedin"></i>linkedin<span class="color-in-2">19</span></a></li>			
		      	<li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
		      	<li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
		      	<li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
		      	<li class="color-pin"><a href=""><i class="fa fa-pinterest"></i>pinterest<span class="color-pin-2">70</span></a></li>
	      	</ul>						
		</div>
	</div>
</div>	


<!-- CONTACT-FORM -->
<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">contact form</h4>
					<h2>have a question?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<div class="second-description text-center color-grey-3">Please fill out the following information so that we can help you to have a great trip.</div>			
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form class="contact-form" action="#">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="Enter your name" name="customerName">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="email" required="" placeholder="Enter your email" name="emailId">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="number" min="0" required="" placeholder="number of people" name="numberOfPeople">
							</div>
						</div>	
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="your country" name="country">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="phone number" name="phone">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="drop-wrap drop-wrap-s-3 color-2">
							  	<div class="drop">
								 	<b>region</b>
									<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
									<span>
									    <a href="#">northern india</a>
										<a href="#">southern india</a>
										<a href="#">eastern india</a>
										<a href="#">western india</a>
									</span>
							   	</div>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="drop-wrap drop-wrap-s-3 color-2">
							  	<div class="drop">
								 	<b>destinations you are interested in</b>
									<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
									<span>
									    <a href="#">agra</a>
										<a href="#">delhi</a>
										<a href="#">jaipur</a>
										<a href="#">jodhpur</a>
									</span>
							   	</div>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="drop-wrap drop-wrap-s-3 color-2">
							  	<div class="drop">
								 	<b>type of trip</b>
									<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
									<span>
									    <a href="#">family</a>
										<a href="#">business</a>
										<a href="#">special event</a>
									</span>
							   	</div>
							</div>						
						</div>
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" required="" placeholder="Enter your comment"></textarea>
							<div class="text-center">
								<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>submit comment</span></button>
							</div>
						</div>
					</div>					
				</form>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER -->       
<?php include 'footer.php';?>		   