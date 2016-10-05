<div class="divide0"></div>
          <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>About Captain Food</h3>
                            <p>
                                Captain Food is an online homemade food bazaar where you can cook, sell, buy or eat. Captain Food’s mission is to serve freshly cooked homemade food right at your door step. 
                            </p>
                            <ul class="list-inline footer-social">
                                <li>
                                    <a href="#" class="social-icon si-dark si-gray-round si-colored-facebook">
                                        <i class="fa fa-facebook"></i>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#" class="social-icon si-dark si-gray-round si-colored-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/captainfood.pk" class="social-icon si-dark si-gray-round si-colored-instagram">
                                        <i class="fa fa-instagram"></i>
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/captain-food-88b659128" class="social-icon si-dark si-gray-round si-colored-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Featured Chefs</h3>
                            <ul class="list-inline f2-work">
							<?php if($ftchefs){ foreach($ftchefs as $row)
							{
							?>
                                <li><a href="<?php echo base_url().'Home/menu/'.$row['ChefID']?>"><img src="<?php echo base_url();?>assets/img/<?php echo $row['picture'] ?>" class="img-responsive" alt=""></a></li>
							
							<?php }} ?>
                            </ul>
                        </div>                        
                    </div>
					
					<div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>

                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong>55-B Walton Railway Colony </p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">support@captainfood.pk</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +92 342 4252000</p></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                   
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Become a super chef</h3>
                            <form  name="joinUsForm" id="joinUsForm" action="javascript:JoinUs()" method="post">
                                <div class="input-group " >
                                    <input type="email" class="form-control" size="35" placeholder="Email Address" id="testemail" name="email" required data-validation-required-message="Please enter your email address.">
                                    
                                    <input type="hidden" class="form-control" size="35" value="Chef Join" id="testmessage" name="message" required data-validation-required-message="Please enter your email address.">
									<br/><br/><br/>
                                    <input type="tel" class="form-control" required placeholder="Phone Numberer" id="testphone" name="phone">
                                    <input type="hidden" class="form-control" size="35" value="Chef Join" id="testname" name="name" required data-validation-required-message="Please enter your email address.">
									<br/><br/><br/>
									</div>
									<div class="input-group">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" style="background-color:#f05f40" type="submit">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>                        
                    </div><!--footer col-->

                </div>
                
            </div>
              
        </footer>
        
        