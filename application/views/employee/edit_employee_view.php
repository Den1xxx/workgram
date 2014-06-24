
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
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <form id="edit_employee_form" name="edit_employee_form">




                            <div class="form-group">
                                <label class="form-label">Employee No</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_no" class="form-control" type="text" name="employee_no" value="<?php echo $employee->employee_no; ?>">                              
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_fname" class="form-control" type="text" name="employee_fname" value="<?php echo $employee->employee_fname; ?>">                              
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_lname" class="form-control" type="text" name="employee_lname" value="<?php echo $employee->employee_lname; ?>">                              
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_password" class="form-control" type="text" name="employee_password" value="<?php echo $employee->employee_password; ?>">                              
                                </div>
                            </div>
                            
                           <div class="form-group">
                                <label class="form-label">Email</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_email" class="form-control" type="text" name="employee_email" value="<?php echo $employee->employee_email; ?>">                              
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="form-label">Type</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="employee_type" id="employee_type" class="select2 form-control"  >
                                        
                                        
                                            <option value="1" <?php if ($this->config->item('ADMIN') == $employee->employee_type) { ?> selected="true" <?php } ?>>Admin</option>
                                            <option value="2" <?php if ($this->config->item('COMPANY_OWNER') == $employee->employee_type) { ?> selected="true" <?php } ?>>Company Owner</option>
                                            <option value="3" <?php if ($this->config->item('EMPLOYEE') == $employee->employee_type) { ?> selected="true" <?php } ?>>Employee</option>
                                            
                                    </select>                               
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="form-label">Birth Day</label>
                                <span style="color: red">*</span><br>

                                <div class="input-with-icon  right input-append primary date  no-padding" id="employee_bday_edit_dpicker">                                       
                                    <i class=""></i>

                                    <input class="form-control" type="text" input-append id="employee_bday" name="employee_bday" readonly="true"  value="<?php echo $employee->employee_bday; ?>">
                                    <span class="add-on">
                                        <span class="arrow"></span>
                                        <i class="fa fa-th"></i>
                                    </span>
                                </div>
                            </div>

                           <div class="form-group">
                                <label class="form-label">Contact No</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_contact" class="form-control" type="text" name="employee_contact" value="<?php echo $employee->employee_contact; ?>">                              
                                </div>
                            </div>
                            
                           <div class="form-group">
                                <label class="form-label">Salary</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_salary" class="form-control" type="text" name="employee_salary" value="<?php echo $employee->employee_salary; ?>">                              
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="form-label">Contract</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="employee_contract" id="employee_contract" class="select2 form-control"  >
                                        
                                           <option value="FULL_TIME" <?php if ($this->config->item('FULL_TIME') == $employee->employee_contract) { ?> selected="true" <?php } ?>>Full Time</option>
                                            <option value="PART_TIME" <?php if ($this->config->item('PART_TIME') == $employee->employee_contract) { ?> selected="true" <?php } ?>>Part Time</option>
                                            
                                    </select>                               
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <label class="form-label">Avatar</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="employee_avatar" class="form-control" type="text" name="employee_avatar" value="<?php echo $employee->employee_avatar; ?>">                              
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Company</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <input id="company_code" class="form-control" type="text" name="company_code" value="<?php echo $employee->company_code; ?>">                              
                                </div>
                            </div>
                            
                              
                               
                            <div id="edit_employee_msg" class="form-row"> </div>

                            <input type="hidden" id="employee_code" name="employee_code" value="<?php echo $employee->employee_code; ?>"/>
                            <div class="form-actions">
                                <div class="pull-right">
                                    <button class="btn btn-primary btn-cons" type="submit">
                                        <i class="icon-ok"></i>
                                        Save
                                    </button>
                                    <button class="btn btn-white btn-cons" type="button">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


