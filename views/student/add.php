<div class="prices-head">
    <h2>Student Registration Form</h2>
</div>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('students/add_student'); ?>
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
    <div class="col-md-3 chit-chat-layer1-left">
        <div class="work-progres">
            <div class="chit-chat-heading">
                Selection
            </div>
            <div class="form-group">
                <!--                             <label>Session:</label>-->
                <select name="session_id" id="session_id" class="form-control" tabindex="1">
                    <option value="0">Session</option>
                    <?php
                    foreach ($session as $s) {
                        ?>
                        <option value="<?php echo $s['id']; ?>"><?php echo $s['name']; ?></option>
                        <?php
                    } ?>
                </select>

            </div>
            <div class="form-group">
                <!-- <label>Course:</label> -->
                <select name="class_id" id="class_id" class="form-control" tabindex="2">
                    <option value="0">Class</option>
                    <?php
                    foreach ($class as $s) {
                        ?>
                        <option value="<?php echo $s['id']; ?>"><?php echo $s['name']; ?></option>
                        <?php
                    } ?>
                </select>
            </div>

            <div class="form-group">
                <!-- <label>Section:</label> -->
                <select name="section_id" id="section_id" class="form-control" tabindex="3">
                    <option value="0">Section</option>
                    <?php
                    foreach ($section as $s) {
                        ?>
                        <option value="<?php echo $s['id']; ?>"><?php echo $s['name']; ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- <div class="form-group">
            <button type="button" class="btn btn-primary">Submit</button>
          </div> -->

        </div>
    </div>

</div>

<div class="col-md-3 chit-chat-layer1-rit">
    <div class="work-progres">
        <div class="chit-chat-heading">
            Admission Detail
        </div>
        <div class="form-group">
            <input type="text" name="roll_no" class="form-control" required placeholder="Roll no" tabindex="4">
        </div>
        <div class="form-group">
            <input type="text" name="registration_no" class="form-control" required placeholder="Registration No" tabindex="5">
        </div>
        <div class="form-group">
            <input type="date" name="doa" class="form-control" required placeholder="Date of Admission" value="<?php echo date('Y-m-d'); ?>" tabindex="6">
        </div>
    </div>
</div>

<div class="col-md-3 chit-chat-layer1-rit">
    <div class="work-progres">
        <div class="chit-chat-heading">
            Fee Detail
        </div>

        <div class="form-group">
            <!-- <label>Admission Fee</label> -->
            <input type="text" name="admission_fee" id="admission_fee" class="form-control" required placeholder="Admission Fee" tabindex="7">
        </div>
        <div class="form-group">
            <!-- <label>Tution Fee</label> -->
            <input type="text" name="tuition_fee" id="tuition_fee" class="form-control" required placeholder="Tuition Fee" tabindex="8">
        </div>
        <div class="form-group">
            <!-- <label>Total</label> -->
            <input type="text" name="total_fee" id="total_fee" class="form-control" required placeholder="Total Fee">
        </div>
    </div>
</div>

<div class="col-md-3 chit-chat-layer1-rit">
    <div class="work-progres">
        <div class="chit-chat-heading">
            Photo
        </div>

        <div class="form-group" align="center" >
            <img id="image_holder" src="<?php echo base_url(); ?>images/1.jpg" width="100px" height="120px" align="center" >
            <input type="file" name="std_photo" id="std_photo" onchange="readURL(this);" >
        </div>
    </div>
</div>

<div class="clearfix"></div>
<!--main page chit chating end here-->

<div class="chit-chat-layer1">
    <div class="col-md-6 chit-chat-layer1-left">
        <div class="work-progres">
            <div class="chit-chat-heading">
                Student Personal Info
            </div>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" name="student_name" type="text" required
                                   placeholder="Enter Student's Name" tabindex="10">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <select name="gender" id="Gender" class="form-control" required tabindex="11">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <label>DOB:</label>
                            <input class="form-control" type="date" name="dob" required placeholder="Enter Student's DOB" tabindex="12">
                        </div>
                        <div class="form-group">
                            <label>Bay-Form:</label>
                            <input class="form-control" type="text" name="b_form" id="b_form" required
                                   placeholder="_____-_______-_" data-mask="00/00/0000" tabindex="13">
                        </div>
                        <div class="form-group">
                            <label>Prev School:</label>
                            <input class="form-control" name="prev_school" type="text"
                                   placeholder="Enter Previous School Name" tabindex="14">
                        </div>
                        <div class="form-group">
                            <label>Prev Class Name:</label>
                            <input class="form-control" name="prev_class_name" type="text"
                                   placeholder="Enter Previous Class Name" tabindex="15">
                        </div>
                        <div class="form-group">
                            <label>Cast:</label>
                            <input class="form-control" name="cast" type="text"
                                   placeholder="Enter Student's Family Cast" tabindex="16">
                        </div>
                        <div class="form-group">
                            <label>Religion:</label>
                            <select name="religion" id="religion" class="form-control" tabindex="17">
                                <option value="Muslim">Muslim</option>
                                <option value="Non Muslim">Non Muslim</option>
                            </select>
                        </div>





                    </div>
                </div>


        </div>
    </div>


</div>


<div class="col-md-6 chit-chat-layer1-rit">
    <div class="work-progres">
        <div class="chit-chat-heading">
            Student Family Info
        </div>
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Father Name:</label>
                        <input class="form-control" type="text" name="father_name" required tabindex="18"
                               placeholder="Enter Student's Father Name">
                    </div>
                    <div class="form-group">
                        <label>Father CNIC:</label>
                        <input class="form-control" name="father_cnic" id="father_cnic" type="text" required tabindex="19"
                               placeholder="_____-_______-_">
                    </div>
                    <div class="form-group">
                        <label>Father Profession:</label>
                        <input class="form-control" type="text" name="father_prof"  tabindex="20"
                               placeholder="Enter Student's Father Profession">
                    </div>
                    <div class="form-group">
                        <label>Mother Name:</label>
                        <input class="form-control" type="text" name="mother_name" tabindex="21"
                               placeholder="Enter Student's Mother Name">
                    </div>
                    <div class="form-group">
                        <label>Guardian is?</label>
                        <input  type="radio" name="guardian_is" value="father" selected tabindex="22">Father
                        <input  type="radio" name="guardian_is" value="mother" >Mother
                        <input  type="radio" name="guardian_is" value="other">other
                    </div>
                    <div class="form-group">
                        <label>Guardian Name:</label>
                        <input class="form-control" type="text" name="guardian_name"  tabindex="23"
                               placeholder="Enter Student's Guardian Name">
                    </div>
                    <div class="form-group">
                        <label>Guardian CNIC:</label>
                        <input class="form-control" type="text" name="guardian_cnic" tabindex="24"
                               placeholder="Enter Student's Guardian CNIC">
                    </div>
                    <div class="form-group">
                        <label>Contact No:</label>
                        <input class="form-control" name="contact_no" type="text" required tabindex="25"
                               placeholder="Enter Student's  Contact No">
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                            <textarea class="form-control" name="address" rows="5" id="text" required tabindex="26"
                                      placeholder="Enter Student's Permanent Address"></textarea>

                    </div>


                </div>
            </div>


    </div>

</div>
    <div class="clearfix"></div>


<!--main page chit chating end here-->
<div class="form-group" style="float: right">
    <button type="button" class="btn btn-warning">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="">
        <button type="button" class="btn btn-primary">Save and Continue</button>
    </a>
</div>
<?php echo form_close(); ?>

<script type='text/javascript'>


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_holder')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(120);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    //validation and submit handling
    $(document).ready(function()
    {
//        $('#father_cnic').mask("99999-9999999-9");
        //$('#b_form').mask("00000-0000000-0", {placeholder: "_____-_______-_"});

    $("#session_id").change(function(){
        //alert($(this).val());
        $.ajax({
            url: "<?php echo base_url();?>students/get_classDetails_by_session_id",
            data: {session_id: $(this).val()},
            type: "post",
            dataType:'text',
            success: function(response){
                $("#class_id").html(response);
                $("#section_id").html();

            }
            });
    });


        $("#admission_fee").blur(function(){
            $("#total_fee").val(parseInt($("#admission_fee").val()) + parseInt($("#tuition_fee").val()));
        });
        $("#tuition_fee").blur(function(){
            $("#total_fee").val(parseInt($("#admission_fee").val()) + parseInt($("#tuition_fee").val()));
        });


     ///

        $("#class_id").change(function(){
            //alert($(this).val());
            var value = $(this).val();
            if(value == "0")
            {
                $("#admission_fee").val("");
                $("#tuition_fee").val("");
                $("#total_fee").val("");
                $("#section_id").html("<option value='0'>Section</option>");

            }
            else
            {
                $.ajax({
                    url: "<?php echo base_url();?>students/get_sectionDetails_by_class_id",
                    data: {class_id: $(this).val()},
                    type: "post",
                    dataType:'text',
                    success: function(response){
                        $("#section_id").html(response);
                    }
                });
                $.ajax({
    //                alert("get_class_detail");
                    url: "<?php echo base_url();?>students/get_class_detail",
                    data: {class_id: $(this).val()},
                    type: "post",
                    dataType:'text',
                    success: function(response){
                        //alert(response);
                        var result = $.parseJSON(response);
                        //alert(result[0]['tuition_fee']);
                        $("#admission_fee").val(result[0]['admission_fee']);
                        $("#tuition_fee").val(result[0]['tuition_fee']);
                        $("#total_fee").val(parseInt($("#admission_fee").val()) + parseInt($("#tuition_fee").val()));
                    }
                });
            }
        });
    });


</script>
