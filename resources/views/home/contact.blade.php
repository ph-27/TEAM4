@extends('layouts.master')
@section('content')
	<div class="ads-grid_shop">
	    <div class="shop_inner_inf">
	        <h3 class="head">Contact Us</h3>
	        <p class="head_para">Add Some Description</p>
	        <div class="inner_section_w3ls">
	            <div class="col-md-7 contact_grid_right">
	                <h6>Please fill this form to contact with us.</h6>
	                <form action="#" method="post">
	                    <div class="col-md-6 col-sm-6 contact_left_grid">
	                        <input type="text" name="Name" placeholder="Name" required="">
	                        <input type="email" name="Email" placeholder="Email" required="">
	                    </div>
	                    <div class="col-md-6 col-sm-6 contact_left_grid">
	                        <input type="text" name="Telephone" placeholder="Telephone" required="">
	                        <input type="text" name="Subject" placeholder="Subject" required="">
	                    </div>
	                    <div class="clearfix"> </div>
	                    <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
	                    <input type="submit" value="Submit">
	                    <input type="reset" value="Clear">
	                </form>
	            </div>
	            <div class="col-md-5 contact-left">
	                <h6>Contact Info</h6>
	                <div class="visit">
	                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
	                        <span class="fa fa-home" aria-hidden="true"></span>
	                    </div>
	                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
	                        <h4>Visit us</h4>
	                        <p>Tam Kì, Quảng Nam</p>
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="mail-us">
	                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
	                        <span class="fa fa-envelope" aria-hidden="true"></span>
	                    </div>
	                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
	                        <h4>Mail us</h4>
	                        <p><a href="mailto:info@example.com">ptyshoes@gmail.com</a></p>
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="call">
	                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
	                        <span class="fa fa-phone" aria-hidden="true"></span>
	                    </div>
	                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
	                        <h4>Call us</h4>
	                        <p>+84344505663</p>
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	                <div class="visit">
	                    <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
	                        <span class="fa fa-fax" aria-hidden="true"></span>
	                    </div>
	                    <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
	                        <h4>Fax</h4>
	                        <p>+84386383712</p>
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	            </div>
	            <div class="clearfix"> </div>
	        </div>
	        <div class="clearfix"></div>
    	</div>
	</div>
	<div class="contact-map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
	        class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
@endsection
@section('script')
	<script src="pages/js/easy-responsive-tabs.js"></script>
	<script>
	    $(document).ready(function () {
	    	$('#horizontalTab').easyResponsiveTabs({
	    		type: 'default', //Types: default, vertical, accordion           
	    		width: 'auto', //auto or any width like 600px
	    		fit: true, // 100% fit in a container
	    		closed: 'accordion', // Start closed if in accordion view
	    		activate: function (event) { // Callback function if tab is switched
	    			var $tab = $(this);
	    			var $info = $('#tabInfo');
	    			var $name = $('span', $info);
	    			$name.text($tab.text());
	    			$info.show();
	    		}
	    	});
	    	$('#verticalTab').easyResponsiveTabs({
	    		type: 'vertical',
	    		width: 'auto',
	    		fit: true
	    	});
	    });
	</script>
@endsection