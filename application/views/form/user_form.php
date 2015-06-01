<div><h3 style="color: green">
        <?php
        echo $this->session->flashdata('success_message');
        echo $this->session->flashdata('failure_message');
        ?>
    </h3></div>
<div class="col-md-8">  
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">User</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/user_data" method="post" role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="Username">User Name</label><?php echo form_error('user_name'); ?>
                    <input type="text" class="form-control" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <label for="Password">Password</label><?php echo form_error('user_password'); ?>
                    <input type="password" class="form-control" name="user_password" value="<?php echo set_value('user_password'); ?>"size="20">
                </div>

                <div class="form-group">
                    <label for="Confirm_Password">Confirm Password</label><?php echo form_error('user_confirm_password'); ?>
                    <input type="password" class="form-control" name="user_confirm_password" value="<?php echo set_value('user_confirm_password'); ?>"size="20">
                </div>

                <div class="form-group">
                    <label for="Type">Type</label><?php echo form_error('user_type'); ?>
                    <select class="form-control" name="user_type">
                        <option style="width: 120px;" value="0" >Not Applicable</option>
                        <option style="width: 120px;" value="1">Admin</option>
                        <option style="width: 120px;" value="2">Manager</option>
                        <option style="width: 120px;" value="3">Operator</option>
                    </select>
                </div>

                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>

