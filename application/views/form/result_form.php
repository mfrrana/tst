<div class="col-md-8">  
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Result</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form name="form" action="<?php echo base_url(); ?>welcome/result_form_data" method="post" role="form">

            <div class="box-body">
                <div class="form-group">
                    <label for="Subject">Subject</label>
                    <select class="form-control" name="subject_name">
                        <option value=""style="width: 150px">Select Subject</option>
                        <?php foreach ($all_subjects as $v_all_subjects) { ?>
                            <option value="<?php echo $v_all_subjects->subject_name ?>"style="width: 150px"><?php echo $v_all_subjects->subject_name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="Student_ID">Student ID</label>
                    <input type="text" class="form-control" id="stu_id" placeholder="Enter Student ID">
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div><!-- /.box -->
</div>