<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Advance <span class="semi-bold">Options</span></h4>
                <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
                <table class="table" id="privilege_master_table" >
                    <thead>
                        <tr>
                            <th>Master Privilege ID</th>
                            <th>Master Privilege</th>
                            <th>Description</th>
                            <th>Options</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($privilege_masters as $privilege_master) {
                            ?> 
                            <tr  id="privilege_master_<?php echo $privilege_master->privilege_master_code; ?>">
                                <td><?php echo $privilege_master->privilege_master_code; ?></td>
                                <td><?php echo $privilege_master->master_privilege; ?></td>
                                <td><?php echo $privilege_master->master_privilege_description; ?></td>
                                <td>
                                    <a href="<?php echo site_url(); ?>/settings/privilege_master_controller/edit_master_privileges_view/<?php echo $privilege_master->privilege_master_code; ?>">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a style="cursor: pointer;"   title="Delete this Master Privilege" onclick="delete_privilege_master(<?php echo $privilege_master->privilege_master_code; ?>)">
                                        <i class="fa fa-times"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>    

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add_privilege_master_modal" tabindex="-1" role="dialog" aria-labelledby="add_privilege_master_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_privilege_master_form" name="add_privilege_master_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <br>
                    <i class="icon-credit-card icon-7x"></i>
                    <h4 id="add_privilege_master_modalLabel" class="semi-bold">We need your billing info.</h4>
                    <p class="no-margin">You'll be charged $29/Month and get immediate access to new plan </p>
                    <br>
                </div>
                <div class="modal-body">
                   
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Master Privilege</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="master_privilege" class="form-control" type="text" name="master_privilege" >                              
                            </div>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Master Privilege Description</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="master_privilege_desc" class="form-control" type="text" name="master_privilege_desc">                              
                            </div>
                        </div>
                    </div>
                </div>
                <div id="add_privilege_master_msg" class="form-row"> </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
