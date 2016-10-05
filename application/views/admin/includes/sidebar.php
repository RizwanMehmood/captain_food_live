<div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        
                        <li class="nav-item <?php if($this->uri->segment(1)=='admin') echo 'active open'?>">
                            <a href="<?php echo base_url().'admin/dashboard' ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
            
                        </li>
                        
                        <li class="nav-item  <?php if($this->uri->segment(1)=='order') echo 'active open'?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Orders</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class ="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url().'order/addOrder' ?>" class="nav-link ">
                                        <span class="title">Add New Order</span>
                                    </a>
                                </li>
								<li class="nav-item  ">
                                    <a href="<?php echo base_url().'order/orderList' ?>" class="nav-link ">
                                        <span class="title">Order List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  <?php if($this->uri->segment(1)=='chef') echo 'active open'?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Chefs</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="components_knob_dials.html" class="nav-link ">
                                    <a href="<?php echo base_url().'chef/addChef' ?>" class="nav-link ">
                                        <span class="title">Add Chef</span>
                                    </a>
                                </li>
								<li class="nav-item  ">
                                    <a href="components_knob_dials.html" class="nav-link ">
                                    <a href="<?php echo base_url().'chef/chefList' ?>" class="nav-link ">
                                        <span class="title">Chefs List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  <?php if($this->uri->segment(1)=='rider') echo 'active open'?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Riders</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url().'rider/addRider' ?>" class="nav-link ">
                                        <span class="title">Add Rider</span>
                                    </a>
                                </li>
								<li class="nav-item  ">
                                    <a href="<?php echo base_url().'rider/riderList' ?>" class="nav-link ">
                                        <span class="title">Riders List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-item  <?php if($this->uri->segment(1)=='customer') echo 'active open'?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Customers</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo base_url().'customer/addCustomer' ?>" class="nav-link ">
                                        <span class="title">Add Customer</span>
                                    </a>
                                </li>
								<li class="nav-item  ">
                                    <a href="<?php echo base_url().'customer/customerList' ?>" class="nav-link ">
                                        <span class="title">Customer List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->