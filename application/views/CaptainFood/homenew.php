<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('CaptainFood/includes/header')?>
    <style>
    .loading {
    background-color: #FFFFFF;
    opacity: 0.8;
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: 100;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background-position: center;
    background-repeat: no-repeat;
}
.isa_success {
    margin: 10px 0px;
    padding:12px;
    color: #4F8A10;
    background-color: #DFF2BF;
}
    </style>
	<body>
		<!--navbar-default-->
		<?php $this->load->view('CaptainFood/includes/navbar')?>

<section id="mobile_home" style="display:none;">
<div class="container">
                    <div class="row">
                        <!-- MAIN IMAGE -->
					<div class="col-md-4 hidden-sm">
                                            <img src="<?php echo base_url();?>assets/img/CF_Mobile.png" height=500 width=500 class="img-responsive" alt="mockup">
                                       </div>
						
					</div>						
				</div>
					
				</div>
</section>
         <!--rev slider start-->
		<section id="Home">
                <div class="container" style="width:100%;">
                    <div class="row" style="position:relative;">
                        <!-- MAIN IMAGE -->
						<h1 class="main_heading">Order From the Best homeMade Food Chef in Town</h1>
						<a href="#chefs" class="btn btn-theme-bg page-scroll main-btn-img">Find Chefs</a>
						<img class="main-img" src="<?php echo base_url();?>assets/img/slider-2.png"  alt="Main Image"/>
						
					</div>						
				</div>
					
				</div>
        <!--full width banner-->
		</section>
        <!--revolution end-->
       <section id="HWW" class="services-wrap">
            <div class="container">
                <center><h2 class="sectionheadings">How It Works</h2>
                <span class="center-line"></span></center>
                <div class="row">
                    <div class="col-md-3 margin20">
					<center>
                       <img src="<?php echo base_url()?>assets/img/search-chef.png" alt=""/>
						<h3 class="sub-sectionheading">Select your Chef</h3>
						<p class="hww-text">Browse from the List of our HomeMade Food Experts</p>
						</center><!--team-wrap-->
                    </div><!--team col-->
                    <div class="col-md-3 margin20">
                        <div >
						<center>
							<img src="<?php echo base_url()?>assets/img/select-menu.png" alt=""/>
							<h3 class="sub-sectionheading">Choose a Menu</h3>
							<p class="hww-text">Select a Menu that suits your Mood</p>
                        </center>
						</div><!--team-wrap-->
                    </div><!--team col-->
                    <div class="col-md-3 margin20">
                        <div >
						<center>
                           <img src="<?php echo base_url()?>assets/img/order_2.png"  alt=""/>
							<h3 class="sub-sectionheading">Place your Order</h3>	
							<p class="hww-text">Call us to place an Order</p>
                        </center>
						</div><!--team-wrap-->
                    </div><!--team col-->
                    <div class="col-md-3 margin20">
                        <div >
						<center>
                           <img src="<?php echo base_url()?>assets/img/deliver_2.png" alt=""/>
							<h3 class="sub-sectionheading">Enjoy your Food</h3>
							<p class="hww-text">Your HomeCooked Food is delivered right at your Doorstep</p>
                        </center>
						</div><!--team-wrap-->
                    </div><!--team col-->

                </div>
            </div>
       </section>

       <section id="chefs" class="services-wrap" style="background-color:#EDEDED;">
            <div class="container">
                <center><h2 class="sectionheadings">Our Super Chefs</h2><span class="center-line"></span></center>
            <br/>
               <div class="row">
				   <?php 
					foreach ($results as $row)
					{
					 
					 ?>
						<div class="col-md-3 margin20" >
							<div class="team-wrap" style="background-color:#fff">
								<center><h3 style="margin-top:6%;font-weight:600;text-transform:uppercase;">
								<?php echo $row['Name'];?></h3></center>
								<hr>
								<center><img src="<?php echo base_url().'assets/img/'.$row["picture"]?>" class="img-responsive  customer-img" alt=""></center>
							   
								<ul style="padding:0 10px;margin:0px;"class="list-inline">
									<li style="width:100%;"><span style="font-size:14px;float:left">Minimum Person Limit</span>
									<span style="font-size:14px;float:right" > <?php echo $row['min_person_limit'];?></span></li>
									<li style="width:100%;"><span style="font-size:14px;float:left">Currently Serving</span> 
									<span style="font-size:14px;float:right">  <?php echo $row['currently_serving'];?></span></li>
									<li style="width:100%;"><span style="font-size:14px;float:left">Cuisines</span>
									<span style="font-size:14px;float:right"><lead><?php echo $row['cusines'];?></lead></span></li>
                                                                        <li style="width:100%;"><span style="font-size:14px;float:left">Location</span>
									<span style="font-size:14px;float:right"><lead><?php echo $row['Location'];?></lead></span></li>
								</ul>
								<a href="<?php echo base_url().'Home/menu/'.$row["ChefID"]?>" class="btn btn-theme-bg">Menu</a>
							</div><!--team-wrap-->
						</div><!--team col-->
                    <?php } 
					?>
                </div><!--team col-->
						<!-- <div class="col-md-12 text-center">
							<a href="#" class="btn border-theme btn-lg wow animated fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Load More Chefs</a>
						</div> -->
			</div> 
       </section>

	   <section id="FeedYourOffice" style="padding: 50px 0;
		background-image: url(<?php echo base_url()?>assets/img/OfficeSection.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed; width:100%;">
            <div class="container">
                <div class="row">
                    	<div class="hidden-sm wow animated fadeInLeft widget-tile">
						<center><h3 class="heading-transformed">MAKE LUNCH TIME YOUR BEST TIME OF THE DAY</h3></center>
							<div class="sub-text">
							<center><p>To get Hygienic and Healthy food is no longer a problem in your working hours. Choose your chef and enjoy the best meals of your choice.</p></center>
						</div>
						<center>
						<div class="col-md-12 text-center">
							<a href="#contact" class="btn border-theme btn-lg wow animated fadeInUp animated page-scroll" style="visibility: visible; animation-name: fadeInUp;">Get in Touch</a>
						</center>
                    <!--service box-->
                </div>
            </div> 
        </section>
	   
       
       
        <section id="about" style="background-color:#ededed;padding: 40px 0;">
            <div class="container">
                <div class="row">
                    <div id="CF-img" class="col-md-4 hidden-sm wow animated fadeInLeft">
                        <img src="<?php echo base_url();?>assets/img/CF.png" width=500 height=500 class="img-responsive" alt="mockup">
                    </div>
                    <div class="col-md-8">
                        <h1 class="wow animated fadeInDownfadeInRight sectionheadings">About Us</h1>
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-eye"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Vision</h4>
                                <p>
                                    Captain Food is an online homemade food bazaar where you can cook, sell, buy or eat. Empowering citizens by providing them an opportunity to start their own cooking business right from home.
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-group"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Mission</h4>
                                <p>
                                    Captain Food’s mission is to serve freshly cooked homemade food right at your door step. With a number of Super Chefs of your city in our alliance, Captain Food gives you the power to choose, order and eat. Lunch time in offices or whatever the occasion is, order from anywhere because we serve everywhere.
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-cutlery"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>EAT</h4>
                                <p>
                                    If you are missing the taste of homemade food, if you want your food to be healthy and hygienic, if regularly eating out is affecting your health, then wait no more. Want your desired food for a day, week or a whole month? You just have to order once.
                                </p>
                            </div>
                            
                            
                        </div><!--service box-->
                        <div class="services-box margin30 wow animated fadeInRight">
                            <div class="services-box-icon">
                                <i class="fa fa-female"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>COOK</h4>
                                <p>
                                    Cooking is your passion, make it your profession. Join hands with us and become a Super Chef. You simply cook and earn, while we do the rest.
                                </p>
                            </div>
                            
                            
                        </div><!--service box-->
                    </div>
                </div>
            </div> 
        </section><!--services with the showcase mockups-->

        <section id="contact" class="services-wrap">
            <div class="container">
            
                <center><h2 class="sectionheadings">Get in Touch</h2><span class="center-line"></span></center>
                <div class="col-md-8 margin30">
                <div class="form-contact">
                        <div class="required">
                            <p>( <span>*</span> fields are required )</p>
                        </div>
                        <!--loader div-->
		<div id="json-overlay" class="loading" style="display:none;background-image: url('<?php echo base_url();?>assets/img/loader.gif');">
		</div> 
		
                       <form name="sentMessage" id="contactForm" action="javascript:SendMessage()" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                            <div id="successMessage" class="isa_success" style="display:none;">
		  		<strong>Message Sent Successfully!</strong> 
			    </div>
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-theme-bg btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div><!--contact form-->
                </div>
                <div class="col-md-4">
                    <h3 class="heading">Contact info</h3>
                    <ul class="list-unstyled contact contact-info">
                        <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> lahore</p></li> 
                        <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">Support@captainfood.pk</a></p></li>
                        <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +92 342 4252000</p></li>
                    </ul>
                    <div class="divide40"></div>
                    <h4>Get social</h4>
                     <div class=" margin10">
                            <a href="https://www.facebook.com/capfood" class="social-icon si-dark si-colored-facebook" target="_blank">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="mailto:support@captainfood.pk" class="social-icon si-dark si-colored-google-plus" target="_blank">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="https://www.instagram.com/captainfood.pk/" class="social-icon si-dark si-colored-instagram" target="_blank">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                            
                            <a href="https://www.linkedin.com/in/captain-food-88b659128" class="social-icon si-dark si-colored-linkedin" target="_blank">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div><!--socials-->
                </div>
            </div>

        </section>

		<section id="BeAChef" style="background:#e8ecf0;padding: 50px 0;">
            <div class="container">
                <div class="row">
                    	<div class="widget-tile" style="background: rgba(255, 255, 255, 255);">
							<h3 class="heading-transformed">BECOME A SUPER CHEF</h3>
							<div class="col-md-9 sub-text">
							<p>Your food tastes good but there are only few to taste it? We provide you an opportunity to sell your delicious homemade food.</p>
							<p>Turn your kitchen into your office and start earning today.
							<!-- <a href="#" style="text-decoration:none;color:#f05f40;">Apply online now!</a></p> -->						
							</div>
						<img id="img-becomeChef" src="<?php echo base_url()?>assets/img/BecomeChef.png"  style="margin-right:6%;margin-top:-5%;float:right;" alt=""/>	
						</div>
                    <!--service box-->
                </div>
            </div> 
        </section><!--services with the showcase mockups-->

		<?php $data['ftchefs']= $ftchefs;
	$this->load->view('CaptainFood/includes/footer',$data)?>
       <!--scripts and plugins -->
        <!--must need plugin jquery-->
     	<?php $this->load->view('CaptainFood/includes/footer_js')?>	

</body>

</html>
