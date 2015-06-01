<div class="col-md-8">  
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Student Subject</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/stu_subject_form_data" method="post" role="form">
            <div class="box-body">
                <div class="form-group" >
                    <label for="Student_ID">Student ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Student ID">
                </div>
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>