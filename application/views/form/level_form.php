<div>
    <h3 style="color:green">
        <?php
            echo $this->session->flashdata('success_message');
            echo $this->session->flashdata('failure_message');
        ?>        
    </h3>
</div>
<div class="col-md-8">  
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Level</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/level_form_data" method="post" role="form">
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="Level_Code">Level Code</label>
                    <input type="text" class="form-control" name="level_code" placeholder="Enter Level Code">
                </div>
                
                <div class="form-group">
                    <label for="Level_Name">Level Name</label>
                    <input type="text" class="form-control" name="level_name" placeholder="Enter Level Name">
                </div>
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>