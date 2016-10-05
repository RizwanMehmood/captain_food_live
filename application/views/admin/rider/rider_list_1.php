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