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
            <h3 class="box-title">Subject</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url();?>welcome/subject_form_data" method="post" role="form"> 
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject Code</label>
                    <input type="text" class="form-control" name="subject_code" placeholder="Enter Subject Code">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Subject Name</label>
                    <input type="text" class="form-control" name="subject_name" placeholder="Enter Subject Name">
                </div>

                <div class="form-group">
                    <label for="Teacher's Name">Teacher's Name</label>
                    <select class="form-control" name="teacher_name">
                        <option value="" style="width: 150px">Not Applicable</option>
                        <?php
                        foreach ($all_teacher as $a_teacher) {
                            ?>
                            <option value="<?php echo $a_teacher->teacher_id; ?>" style="width: 150px"><?php echo $a_teacher->teacher_name; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>