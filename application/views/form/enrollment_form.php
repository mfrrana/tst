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
            <h3 class="box-title">Enrollment</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url(); ?>welcome/enrollment_form_data" method="post" role="form" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="Scroll_No">Scroll No</label>
                    <input type="text" class="form-control" name="scroll_no" placeholder="Scroll No">
                </div>

                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Subject Name">
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" name="address"  placeholder="Enter Address"></textarea>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label for="Mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No.">
                </div>

                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone No.">
                </div>


                <div class="form-group">
                    <label for="Level">Level</label>
                    <select class="form-control" name="level">
                        <option value="">Not Applicable</option>
                        <?php foreach ($all_level as $v_level) { ?>
                            <option value="<?php echo $v_level->level_name ?>"><?php echo $v_level->level_name; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Class">Class</label>
                    <select class="form-control" name="class">
                        <option value="">Not Applicable</option>
                        <?php foreach ($all_class as $v_class) { ?>
                            <option value="<?php echo $v_class->class_name ?>"><?php echo $v_class->class_name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Section">Section</label>
                    <select class="form-control" name="section">
                        <option value="">Not Applicable</option>
                        <?php foreach ($all_section as $v_section) { ?>
                            <option value="<?php echo $v_section->section_name ?>"><?php echo $v_section->section_name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Batch">Batch</label>
                    <select class="form-control" name="batch">
                        <option value="">Not Applicable</option>
                        <?php foreach ($all_batch as $v_batch) { ?>
                            <option value="<?php echo $v_batch->batch_name ?>"><?php echo $v_batch->batch_name ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="Mobile">Admission Fee</label>
                    <input type="text" class="form-control" name="admission_fee" placeholder="Enter Amount">
                </div>

                <div class="form-group">
                    <label for="Phone">Tution Fee</label>
                    <input type="text" class="form-control" name="tution_fee" placeholder="Enter Phone No.">
                </div>
                
                 <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" name="status">
                        
                            <option style="width: 120px;" value="active" >Active</option>
                            <option style="width: 120px;" value="inactive" >Inactive</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="file" name="image">

                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>