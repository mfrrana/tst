<div id="tabs2">
    <ul>
        <li><a href="#tabs-1" title="">Student Info</a></li>
        <li><a href="#tabs-2" title="">Mother Info</a></li>
        <li><a href="#tabs-3" title="">Father Info</a></li>
        <li><a href="#tabs-4" title="">Attendent Info</a></li>
    </ul>

    <div id="tabs_container">
       <form name="admit_form" action="<?php echo base_url(); ?>welcome/admission_form_data" method="post" enctype="multipart/form-data">
        

            <div id="tabs-1">
                <fieldset>
                    <legend align="center">Student Details</legend>
                    <table>
                        <tr>
                            <td>Student ID.</td>
                            <td>:</td>       
                            <td><input type="text" name="stu_id" size="10"  value="<?php
                                if ($auto_generated_id == NULL) {
                                    echo 1;
                                } else {
                                    echo $auto_generated_id->stu_id + 1;
                                }
                                ?>"></td>       
                        </tr>
                        <tr>
                            <td>RFID ID</td>
                            <td>:</td>       
                            <td><input type="text" name="stu_rfid" size="10"></td>       
                        </tr> 
                        <tr>
                            <td>Name</td>
                            <td>:</td>       
                            <td><input type="text" name="stu_name" size="30" placeholder="Enter Your Name"></td>       
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>       
                            <td>
                                <input type="radio" name="stu_gender" value="Male">Male
                                <input type="radio" name="stu_gender" value="Female">Female
                            </td>       
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>       
                            <td>
                               <input type="text" name="stu_birth_date">
                                 <!--<input type="text" size="12" id="inputField" name="stu_birth_date"/>-->
                            </td>       
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>       
                            <td><textarea name="stu_address" rows="3" cols="35"></textarea></td>       
                        </tr> 
                        <tr>
                            <td>Email</td>
                            <td>:</td>       

                            <td id='TextBoxesGroupStuEmail'>
                                <input type='textbox' name="stu_email" id='stu_email' size="20" >
                                <input type='button' value='+' id='addButtonStuEmail'>
                            </td> 

                        </tr>

                        <tr>
                            <td>Mobile</td>
                            <td>:</td>   

                            <td id='TextBoxesGroupStuMobile'>
                                <input type='textbox' name="stu_mobile" id='stu_mobile' size="20" >
                                <input type='button' value='+' id='addButtonStuMobile'>
                            </td> 
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>   

                            <td id='TextBoxesGroupStuPhone'>
                                <input type='textbox' name="stu_phone" id='stu_phone' size="20" >
                                <input type='button' value='+' id='addButtonStuPhone'>
                            </td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td>:</td>       
                            <td>
                                <select name="stu_level">
                                    <option value="">Not Applicable</option>
                                    <?php foreach ($all_level as $v_level) { ?>
                                        <option value="<?php echo $v_level->level_name ?>"><?php echo $v_level->level_name; ?></option>
                                    <?php } ?>
                                </select>
                            </td>       
                        </tr>

                        <tr>
                            <td>Class</td>
                            <td>:</td>       
                            <td>
                                <select name="stu_class">
                                    <option value="">Not Applicable</option>
                                    <?php foreach ($all_class as $v_class) { ?>
                                        <option value="<?php echo $v_class->class_name ?>"><?php echo $v_class->class_name ?></option>
                                    <?php } ?>
                                </select>
                            </td>       
                        </tr>

                        <tr>
                            <td>Section</td>
                            <td>:</td>       
                            <td>
                                <select name="stu_section">
                                    <option value="">Not Applicable</option>
                                    <?php foreach ($all_section as $v_section) { ?>
                                        <option value="<?php echo $v_section->section_name ?>"><?php echo $v_section->section_name ?></option>
                                    <?php } ?>
                                </select>
                            </td>       
                        </tr>

                        <tr>
                            <td>Batch</td>
                            <td>:</td>       
                            <td>
                                <select name="stu_batch">
                                    <option value="">Not Applicable</option>
                                    <?php foreach ($all_batch as $v_batch) { ?>
                                        <option value="<?php echo $v_batch->batch_name ?>"><?php echo $v_batch->batch_name ?></option>
                                    <?php } ?>
                                </select>
                            </td>       
                        </tr>

                        <tr>
                            <td>Admission Fee</td>
                            <td>:</td>       
                            <td><input type="text" name="admission_fee" size="15" placeholder="Amount in TK."></td>       
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>:</td>       
                            <td>
                                <select name="stu_status">
                                    <option value="">Not Applicable</option>
                                    <option value="A Level">A Level</option>
                                </select>
                            </td>       
                        </tr>

                        <tr>
                            <td>Select Image</td>
                            <td>:</td>       
                            <td><input type="file" name="stu_image"></td>       
                        </tr> 
                    </table>
                </fieldset>
                <h3><a style="float:right;" href="#tabs-2" title="">Next</a></h3>
            </div>

            <div id="tabs-2">
                <!--=====***********************Mother's Details******************************=====-->
                <fieldset>
                    <legend align="center">Mother Details</legend>
                    <table>
                        <tr>
                            <td>Name<td>
                            <td>:<td>       
                            <td><input type="text" name="mother_name" size="30"><td>       
                        </tr>

                        <tr>
                            <td>Profession<td>
                            <td>:<td>       
                            <td>
                                <select name="mother_profession">
                                    <option value="">Select One</option>
                                    <option value="Govt. Service Holder">Govt. Service Holder</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Housewife">Housewife</option>
                                    <option value="Others">Others</option>
                                </select>
                            <td>       
                        </tr>

                        <tr>
                            <td>Address<td>
                            <td>:<td>       
                            <td><textarea name="mother_address" rows="3" cols="35"></textarea><td>       
                        </tr> 

                        <tr>
                            <td>Email<td>
                            <td>:<td> 

                            <td id='TextBoxesGroupMotherEmail'>
                                <input type='textbox' name="mother_email" id='mother_email' size="15" >
                                <input type='button' value='+' id='addButtonMotherEmail'>
                            </td> 

                        </tr>
                        <tr>
                            <td>Mobile<td>
                            <td>:<td>
                            <td id='TextBoxesGroupMotherMobile'>
                                <input type='textbox' name="mother_mobile" id='mother_mobile' size="15" >
                                <input type='button' value='+' id='addButtonMotherMobile'>
                            </td>     
                        </tr>
                        <tr>
                            <td>Phone<td>
                            <td>:<td>
                            <td id='TextBoxesGroupMotherPhone'>
                                <input type='textbox' name="mother_phone" id='mother_phone' size="15" >
                                <input type='button' value='+' id='addButtonMotherPhone'>
                            </td>     
                        </tr>

                        <tr>
                            <td>Select Image<td>
                            <td>:<td>       
                            <td><input type="file" name="mother_image"><td>       
                        </tr>  

                    </table>
                </fieldset>

                <h3 align="right">
                    <a style="float:left;" href="#tabs-1" title="">Back</a>
                    <a style="float:right;" href="#tabs-3" title="">Next</a>
                </h3>
            </div>

            <div id="tabs-3">
                <!--=====***********************Father's Details******************************=====-->
                <fieldset>
                    <legend align="center">Father Details</legend>
                    <table>
                        <tr>
                            <td>Name<td>
                            <td>:<td>       
                            <td><input type="text" name="father_name" size="30"><td>       
                        </tr>

                        <tr>
                            <td>Profession<td>
                            <td>:<td>       
                            <td>
                                <select name="father_profession">
                                    <option value="">Select One</option>
                                    <option value="Govt. Service Holder">Govt. Service Holder</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Others">Others</option>
                                </select>
                            <td>       
                        </tr>

                        <tr>
                            <td>Address<td>
                            <td>:<td>       
                            <td><textarea name="father_address" rows="3" cols="35"></textarea><td>       
                        </tr> 

                        <tr>
                            <td>Email<td>
                            <td>:<td>
                            <td id='TextBoxesGroupFatherEmail'>
                                <input type='textbox' name="father_email" id='father_email' size="15" >
                                <input type='button' value='+' id='addButtonFatherEmail'>
                            </td>     
                        </tr>
                        <tr>
                            <td>Mobile<td>
                            <td>:<td>
                            <td id='TextBoxesGroupFatherMobile'>
                                <input type='textbox' name="father_mobile" id='father_mobile' size="15" >
                                <input type='button' value='+' id='addButtonFatherMobile'>
                            </td>     
                        </tr>
                        <tr>
                            <td>Phone<td>
                            <td>:<td>
                            <td id='TextBoxesGroupFatherPhone'>
                                <input type='textbox' name="father_phone" id='father_phone' size="15" >
                                <input type='button' value='+' id='addButtonFatherPhone'>
                            </td> 
                        </tr>

                        <tr>
                            <td>Select Image<td>
                            <td>:<td>       
                            <td><input type="file" name="father_image"><td>       
                        </tr>  

                    </table>
                </fieldset>

                <h3 align="right">
                    <a style="float:left;" href="#tabs-2" title="">Back</a>
                    <a style="float:right;" href="#tabs-4" title="">Next</a>
                </h3>


            </div>

            <div id="tabs-4">
                <!--=====***********************Attendent's Details******************************=====-->
                <fieldset>
                    <legend align="center">Attendent Details</legend>
                    <table>
                        <tr>
                            <td>Name<td>
                            <td>:<td>       
                            <td><input type="text" name="attendent_name" size="30"><td>       
                        </tr>

                        <tr>
                            <td>Profession<td>
                            <td>:<td>       
                            <td>
                                <select name="attendent_profession">
                                    <option value="">Select One</option>
                                    <option value="Govt. Service Holder">Govt. Service Holder</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Housewife">Housewife</option>
                                    <option value="Others">Others</option>
                                </select>
                            <td>       
                        </tr>

                        <tr>
                            <td>Address<td>
                            <td>:<td>       
                            <td><textarea name="attendent_address" rows="3" cols="35"></textarea><td>       
                        </tr> 

                        <tr>
                            <td>Email<td>
                            <td>:<td>
                            <td id='TextBoxesGroupAttendentEmail'>
                                <input type='textbox' name="attendent_email" id='attendent_email' size="15" >
                                <input type='button' value='+' id='addButtonAttendentEmail'>
                            </td>      
                        </tr>
                        <tr>
                            <td>Mobile<td>
                            <td>:<td>
                            <td id='TextBoxesGroupAttendentMobile'>
                                <input type='textbox' name="attendent_mobile" id='attendent_mobile' size="15" >
                                <input type='button' value='+' id='addButtonAttendentMobile'>
                            </td>   
                        </tr>
                        <tr>
                            <td>Phone<td>
                            <td>:<td>
                            <td id='TextBoxesGroupAttendentPhone'>
                                <input type='textbox' name="attendent_phone" id='attendent_phone' size="15" >
                                <input type='button' value='+' id='addButtonAttendentPhone'>
                            </td>  
                        </tr>

                        <tr>
                            <td>Select Image<td>
                            <td>:<td>       
                            <td><input type="file" name="attendent_image"><td>       
                        </tr>  

                    </table>
                </fieldset>

                <h3>
                    <a style="float:left;" href="#tabs-3" title="">Back</a>
                    <input style="float:right;" type="submit" name="submit" value="SUBMIT FORM">
                </h3>
            </div>

        </form>

    </div><!--End tabs container-->

</div><!--End tabs-->