<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('CaptainFood/includes/header')?>

<body >
					<!------header-->
         <?php $this->load->view('CaptainFood/includes/navbar-general')?>
	
	<!------Main body start-------->
	
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
							
							<div class="col-md-3" style="text-align:center;"> 
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
		<section id="inner-menu" class="services-wrap" style="background-color:#EDEDED;">
		<div class="container table-responsive" style="padding:10px; background-color:#fff; ">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="sectionheadings">Menus</h1>
						<hr class="primary">
					</div>
				</div>
				<?php if($results){?>
				<div class="row" style="margin:1%">
				
					<ul class="nav nav-pills nav-stacked col-md-3 col-sm-3 table-pills">
					<?php $count=1; foreach($results as $row){ ?>
						<li id="<?php echo $row["menuID"].'_active';?>" <?php if($count==1) { ?> class="active" <?php } ?> ><a href="javascript:HideMe(<?php echo $row["menuID"];?>)">Menu <?php echo $count;?></a></li>
					<?php $count++;} ?>	
					</ul>
					<?php $i=0;
					foreach($results as $row){?>
					<div class="col-md-9 HideMenu" <?php if($i>0) { ?> style="display:none;"<?php } ?> id="<?php echo $row["menuID"];?>">
						<table class="table table-hover">
							<thead style="background-color:#f05f40;color:#ffffff;font-family:'Open Sans','Helvetica Neue',Arial,sans-serif;">
								<tr>
									<th class="menu-header">Day</th>
									<th class="menu-header">Dish Name</th>
								</tr>
							</thead>
							<tr><td>Monday</td><td><?php echo $row["mon_dishes"];?></td></tr>
							<tr><td>Tuesday</td><td><?php echo $row["tue_dishes"];?></td></tr>
							<tr><td>Wednesday</td><td><?php echo $row["wed_dishes"];?></td></tr>
							<tr><td>Thursday</td><td><?php echo $row["thu_dishes"];?></td></tr>
							<tr><td>Friday</td><td><?php echo $row["fri_dishes"];?></td></tr>
							<?php if($row["sat_dishes"]!='') {?> <tr><td>Saturday</td><td><?php echo $row["sat_dishes"];?></td></tr> <?php } ?>
						</table>
						<div class="col-md-9 text-center">
							<h2 style="font-weight:500;text-transform:uppercase;letter-spacing:1px;">Only in Rs.<?php echo $row["meal_price"];?></h2>
						</div>
						<div class="col-md-12" style="margin-top:2%;">
							<ul class="fa-ul extra-meal">
							 <li><i class="fa-li fa fa-square"></i>1 Person Serving.</li>
							 <li><i class="fa-li fa fa-square"></i>Package includes Raita,Salad and 2 Roti.</li>
							 <li><i class="fa-li fa fa-square"></i>Additional Charges apply in case of Extra Roti as Rs.10 per Roti.</li>
							</ul>
						</div>
						
						<div class="col-lg-9 text-center" style="margin-top:2%;">
					<a href="<?php echo base_url().'orders/neworder/'.$row["ChefID"].'/'.$row["menuID"]?>" class="btn btn-theme-bg">Order Now</a>
						</div>
						
					</div>
					
				<?php $i++;
					} ?>	
			
				</div>
				<?php }  else {?>
						<div class="row" style="margin-top:4%; text-align:center">
						<h3 class="menu-header">
					No Menu Available
					</h3>
						<ul class="nav nav-pills nav-stacked col-md-3 col-sm-3">	
					</ul>
					<div class="col-md-9" style="height:200px">
					
					</div>
						</div>
				<?php }?>
				<!-- <div class="row">
					<div class="col-md-12">
						<h2>Per Head Rs.140</h2>
					</div> -->
				</div>				
			</div>
		
		</section>
	
	<!------Main body ends---->
	
	<!------footer---->
	<section id="footer">
	<?php $data['ftchefs']= $ftchefs;
	$this->load->view('CaptainFood/includes/footer',$data)?>
		<?php $this->load->view('CaptainFood/includes/footer_js')?>
		</section>
		
	<script>
		
		function HideMe(MenuID)
		{
			$('.HideMenu').fadeIn();
			$(".HideMenu").hide();
			$("#"+MenuID).show();
			var $id=MenuID+"_active";
			$("li").removeClass("active");
			$("#"+$id).addClass("active");
		}
		</script>

			

	
	</body>
	</html>