<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php $this->load->view('admin/includes/header')?>
<link href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo assets_url(); ?>adminassets/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

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
                                <a href="index-2.html">Home</a>
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
				</div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
		 <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue-hoki">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>List of Tables <?php if($this->session->userdata('rest_name')!='') { echo '@ '. $this->session->userdata('rest_name'); } ?>
                        </div>
                        <div style="float:right; margin-top:3px">
						<a href="<?php echo base_url().'table/table_print'; ?>" class="btn btn-default" role="button">Print</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                    <th>
                                        S.No.
                                    </th>
                                    <th>
                                        Table Name
                                    </th>
                                    <th class="hidden-xs">
                                        Table Capacity
                                    </th>
                                    <th class="hidden-xs">
                                       Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($tables) {
                                    $i=0;
                                    foreach ($tables as $table) {
                                        ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $table['table_name']; ?></td>
                                    <td><?php echo $table['table_capacity']; ?> Persons</td>
                                    <td>
                                        <a href="<?php echo base_url().'table/edit_table/'.$table['table_id']; ?>">Edit</a> | 
                                        <a href="javascript:" onclick="delete_table('<?php echo $table['table_id']; ?>')">Delete</a>
                                    </td>
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
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; CaptainFood
                
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
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
		</html>