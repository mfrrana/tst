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
            <h3 class="box-title">Batch</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/batch_form_data" method="post" role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="Batch_Code">Batch Code</label>
                    <input type="text" class="form-control" name="batch_code" placeholder="Enter Batch Code">
                </div>
                
                <div class="form-group">
                    <label for="Batch_Name">Batch Name</label>
                    <input type="text" class="form-control" name="batch_name" placeholder="Enter Batch Name">
                </div>
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>