<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php $this->load->view('admin/includes/header')?>
<link href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
        <!-- END PAGE LEVEL PLUGINS -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('admin/includes/navbar')?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('admin/includes/sidebar')?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="<?php echo base_url().'admin/dashboard'?>">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Orders</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Order List
                        
                    </h3>
					<div class="row">
						<div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                       <i class="icon-settings font-green"></i>
                                        <span class="caption-subject bold uppercase">Order Listing</span>
									</div>
                                    
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" id="order_table">
                                        <thead >
                                            <tr>
                                               
                                                <th> Order Id </th>
                                                <th> Customer Name </th>
                                                <th> Menu Name  </th>
												<th> Quantity </th> 
												<th> Payment Method </th> 
												<th> Status </th> 
												<th> Payment Cycle </th> 
												<th> Days of Weeks </th> 
												<th> Due Date </th> 
																
												<th> Action </th> 
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                                if ($orders) {
                                    $i=0;
                                    foreach ($orders as $order) {
                                        ?>
                                <tr>
                                    
                                    <td><?php echo $order['OrderId']; ?></td>
									
                                    <td><?php echo $order['Name']; ?></td>
									<td><?php echo $order['MenuName']; ?></td>
									
									<td><?php echo $order['Quantity']; ?></td>
									<td><?php echo $order['PaymentMethod']; ?></td>
									<td><?php echo $order['Status']; ?></td>
									<td><?php echo $order['PaymentCycleMethod']; ?></td>
									<td><?php echo $order['DaysofWeek']; ?></td>
								<td><?php echo $order['DueDate']; ?></td>
									
									
									
                                         <td><a href="<?php echo base_url().'order/addOrderDetails/'.$order['OrderId']; ?>">Add</a> | 
                                        <a href="javascript:" onclick="delete_chef('<?php echo $order['OrderId']; ?>')">Delete</a>| <a href="javascript:" onclick="delete_chef('<?php echo $order['OrderId']; ?>')">Edit</a>        </td>
                                </tr>
                                        <?php
                                    }
                                }
                                ?>
										</tbody>
										</table>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
            <!-- END QUICK SIDEBAR -->
        
			<!-- END CONTAINER -->
		 
			<!-- BEGIN FOOTER -->
			<div class="page-footer">
				<div class="page-footer-inner"> 2016 &copy; CaptainFood
					
				</div>
				<div class="scroll-to-top">
					<i class="icon-arrow-up"></i>
				</div>
			</div>
        </div>
        <?php $this->load->view('admin/includes/footer_js');?>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="<?php echo assets_url()?>adminassets/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
		<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo assets_url()?>adminassets/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo assets_url()?>adminassets/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo assets_url()?>adminassets/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL PLUGINS -->

		<script>
					$(document).ready(function() {
					$('#order_table').dataTable();
					});
		</script>    
		</html>