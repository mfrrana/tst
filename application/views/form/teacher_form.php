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
            <h3 class="box-title">Teacher</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/teacher_info" method="post" role="form" enctype="multipart/form-data">        
            <div class="box-body">
                <div class="form-group">
                    <label for="TeacherName">Teacher Name</label>
                    <input type="text" class="form-control" name="teacher_name" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" name="teacher_address" placeholder="Enter Address"></textarea>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="teacher_email" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                    <label for="Mobile">Mobile</label>
                    <input type="text" class="form-control" name="teacher_mobile" placeholder="Enter mobile no">
                </div>
                

                <div class="form-group">
                    <label for="Designation">Designation</label>
                    <select class="form-control" name="teacher_designation">
                        <option style="width: 120px;" value="" >Not Applicable</option>
                        <option style="width: 120px;" value="professor">Professor</option>
                        <option style="width: 120px;" value="associate professor">Associate Professor</option>
                        <option style="width: 120px;" value="lecturer">Lecturer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" name="teacher_status">
                        
                            <option style="width: 120px;" value="active" >Active</option>
                            <option style="width: 120px;" value="inactive" >Inactive</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="file" name="teacher_image">
                    
                </div>
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>