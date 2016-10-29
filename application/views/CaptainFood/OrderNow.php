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
		<?php $this->load->view('CaptainFood/includes/navbar-general')?>

         <!--rev slider start-->
          
	<form name="orderForm" id="orderForm" action="javascript:PlaceOrder()" method="post">
	 
	
	<section id="menu" class="services-wrap " style="background-image: url(<?php echo base_url()?>assets/img/menuback.jpg);background-repeat:no-repeat;background-position: center center;background-size: cover; background-attachment:fixed; width:100%; ">
	<div>
		<div class="container table-responsive">
			<div class="row profile-tile">
						  <div class="col-lg-12 text-center " style="margin-top:2%">
								<h2 class="sectionheadings">
								<?php  
								if($chef)
								{
								echo $chef[0]['Name'];
								}
								?>
								</h2>
								
							</div>
							
							<div class="col-md-3" style="text-align:center"> 
							  <img class="responsive-img" src="<?php echo base_url().'assets/img/'.$chef[0]["picture"]?>" width="120"; height="120";/>
							  
							</div>
							<div class="col-md-8">
							<p class="section-heading" style="margin-top:2%;font-size:18px;color:#333">
							<!------test---------------->
							<?php 
							if($chef)
							{
								echo $chef[0]['chef_information'];
							}
							?>
							</p>
							</div>
							
			  
			</div>
		</div>
		</div>
		</section>
	
	<section id="customerInfo" style="background-color:#EDEDED;">
	 <div class="container">
	 <div class="row cust-header">
        <div class="panel panel-default">
              <div class="col-lg-12 text-center"  style="background-color:#f05f40;">
				<h1 class="order-headings">Customer Details</h1>
				<hr class="primary">
			   </div>
             <div class="panel-body" style="margin-top:10%;">
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
                   <div class="col-md-6">
                    <div class="row control-group">
                     <div class="form-group col-xs-12  controls">
                      <label>Phone Number<span>*</span></label>
                       <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block"></p>
                     </div>
                    </div>
				   </div>
					<div class="col-md-6">
					 <div class="row control-group">
                      <div class="form-group col-xs-12  controls">
                       <label>Address<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Address" id="address" name="address" required data-validation-required-message="Please enter your Address.">
                         <p class="help-block"></p>
                      </div>
                     </div>
					</div>
                   </div>
				  </div>
                 
				</div>
			   </div>
			</section>
		
		
	<section id="orderDetails" style="background-color:#EDEDED;">
	            
	  <div class="container">
		<div class="row order-header"> 
		 <div class="panel panel-default">
           <div class="col-lg-12 text-center"  style="background-color:#f05f40;">
				<h1 class="order-headings">Order Details</h1>
				<hr class="primary">
			</div>
			
             <div class="panel-body" style="margin-top:10%;">

			  <div class="col-md-6">
			   <div class="row control-group">
                  <div class="form-group col-xs-12 controls">
                   <label>Chef</label>
                   
                    <input type="text" class="form-control"  Value="<?php echo $chef[0]['Name'];?>" disabled="true" id="chefName1" name="chefName1" >
                    <input type="hidden" class="form-control"  Value="<?php echo $chef[0]['Name'];?>"  id="chefName" name="chefName" >
                     <p class="help-block"></p>
                  </div>
                 </div>
				</div>
			   <div class="col-md-6">
				<div class="row control-group">
                  <div class="form-group col-xs-12 controls">
                   <label>Menu</label>
                    <input type="text" class="form-control" Value="Menu <?php echo $results[0]['menuID'];?>" disabled="true" id="Menu1" name="Menu1" >
                    <input type="hidden" class="form-control" Value="Menu <?php echo $results[0]['menuID'];?>" hidden="true" id="menu" name="menu" >
                     <p class="help-block"></p>
                  </div>
                 </div>
				</div>
			   <div class="col-md-6">
				<div class="row control-group">
                  <div class="form-group col-xs-12 controls">
                   <label>Start From<span>*</span></label>
                    <input type="date" class="form-control" placeholder="Select date you want to start from" id="StartDate" name="StartDate"  required data-validation-required-message="Please Select Date.">
                     <p class="help-block"></p>
                  </div>
                 </div>
				</div>
			   <!-- <div class="col-md-6">
				<div class="row control-group">
                  <div class="form-group col-xs-12 controls">
                   <label>Duaration<span>*</span></label>
                    <input type="number" class="form-control" placeholder="Enter number of weeks " id="duration" min="1" max="4" name="duration" required data-validation-required-message="Please enter duration.">
                     <p class="help-block"></p>
                  </div>
                 </div>
				</div> -->
			   <div class="col-md-6">
				<div class="row control-group">
                  <div class="form-group col-xs-12 controls">
                   <label>Quantity<span>*</span></label>
                    <input type="number" class="form-control" placeholder="Serving per person" id="Quantity"  name="Quantity"  required data-validation-required-message="Please enter serving Quantity.">
                     <p class="help-block"></p>
                  </div>
                   
                 </div>
                 <br>
				</div>
				
				 <div id="success"></div>
                   <div class="row">
                   <div id="successMessage" class="isa_success" style="display:none;">
		  		<strong>Order Placed Successfully!</strong> 
		</div>
                    <div class="col-lg-12 text-center">
                      <button type="submit" class="btn btn-theme-bg btn-lg">Submit</button>
                    </div>
                   </div>
			 </div>
			</div>
		 </div>
		</div> 
	 </section>
   </form>
		<section id="footer">
	<?php $data['ftchefs']= $ftchefs;
	$this->load->view('CaptainFood/includes/footer',$data)?>
		
    <?php $this->load->view('CaptainFood/includes/footer_js')?>
		</section>
		
		<script type="text/javascript">
            $(function () {
                $('#StartDate').datetimepicker();
            });
        </script>
		</body>
		</html>