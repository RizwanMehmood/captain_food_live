   <script src="<?php echo base_url();?>assets/new/js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo base_url();?>assets/new/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/new/js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.stellar.min.js" type="text/javascript"></script>
        
        
        <!--digit countdown plugin-->
        <script src="<?php echo base_url();?>assets/new/js/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo base_url();?>assets/new/js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo base_url();?>assets/new/js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="<?php echo base_url();?>assets/new/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        
        <!--customizable plugin edit according to your needs-->
        <script src="<?php echo base_url();?>assets/new/js/custom.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="<?php echo base_url();?>assets/new/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/new/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/new/js/revolution-custom.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/js/scrolling-nav.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.blockUI.js"></script>
		
		<script>	
		
			function SendMessage()
			{
				$("#json-overlay").show(); 
				$.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>Home/SendEmail",
					data:$("#contactForm").serialize(),	
					success:function (data) {
						$("#json-overlay").hide();
						
						$("#successMessage").show();
						setTimeout(function() { $("#successMessage").hide(); }, 5000);
						$('#contactForm')[0].reset();
						//$("#successMessage").show().delay(5000).fadeOut();
						
					}
				});
			}
			
			function PlaceOrder()
			{
								$("#json-overlay").show(); 
				$.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>Orders/SendOrder",
					data:$("#orderForm").serialize(),	
					success:function (data) {
						$("#json-overlay").hide();
						
						$("#successMessage").show();
						setTimeout(function() { $("#successMessage").hide(); }, 5000);
						$('#orderForm')[0].reset();
					}
				});
			}
			
			function JoinUs()
			{
				$.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>Home/SendEmail",
					data:$("#joinUsForm").serialize(),	
					success:function (data) {
						alert(data);
					}
				});
			}
			
			//'Name':$("#name").val(),'Email':$("#email").val(),'phone':$("#phone").val(),'message':$("#email").val()
			
			$(document).on('click','.navbar-collapse.in',function(e) {
				if( $(e.target).is('a') ) {
					$(this).collapse('hide');
				}
			});
		</script>
		
		