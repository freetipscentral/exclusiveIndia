<?php include 'header.php';?>

<!-- MAP BLOCK -->

<!-- CONTACT-FORM -->
<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-dr-blue-2 underline">contact form</h4>
					<h2>Want a Customized Package</h2>
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
							<textarea class="area-style-1 color-1" name="requirements" required="" placeholder="Enter your requirements here"></textarea>
							<div class="text-center">
								<button type="submit" class="c-button bg-dr-blue-2 hv-dr-blue-2-o"><span>submit this information</span></button>
							</div>
						</div>
					</div>					
				</form>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script>

<!-- FOOTER -->       
<?php include 'footer.php';?>		   