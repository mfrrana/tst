<div class="col-md-8">  
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">RM Card</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/rm_card_form_data" method="post" role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="ID_No">ID No</label>
                    <input type="text" class="form-control" id="stu_id" placeholder="Enter ID No.">
                </div>
                
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" id="address"  placeholder="Enter Address"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="Card_Number">Card Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Card Number">
                </div>
                
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>