
<div class="col-md-10">
    <h1>Student Attendance List</h1>
</div>
<!--<div class="col-md-2">
    <a href="<?php /*echo base_url();*/?>students/add"><button type="button" class="btn btn-primary">Add Student</button> </a>
</div>-->
<br><br><br><br>


<?php echo form_open('students/attendance')?>
<div class="chit-chat-layer1 row">

  	<div class="col-md-12">
                 <div class="work-progres">
                              <div class="chit-chat-heading">
                                  <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group" >
                                        <!-- <label>Session:</label> -->
                                        <select name="session_id" id="Session" class="form-control" >
                                            <option value="" >Session</option>
                                            <?php
                                            foreach ($session as $s)
                                            {
                                                ?>
                                                <option value="<?php echo $s['id'];?>" ><?php echo $s['name'];?></option>
                                                <?php
                                            }?>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <!-- <label>Course:</label> -->
                                          <select name="class_id" id="Class" class="form-control" >
                                              <?php
                                              foreach ($class as $s)
                                              {
                                                  ?>
                                                  <option value="<?php echo $s['id'];?>" ><?php echo $s['name'];?></option>
                                                  <?php
                                              }?>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <div class="form-group">
                                          <!-- <label>Section:</label> -->
                                          <select name="section_id" id="Section" class="form-control" >
                                              <option value="" >Section</option>
                                              <?php
                                              foreach ($section as $s)
                                              {
                                                  ?>
                                                  <option value="<?php echo $s['id'];?>" ><?php echo $s['name'];?></option>
                                                  <?php
                                              }?>
                                          </select>
                                      </div>
                                  </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <!-- <label>Section:</label> -->
                                              <input type="date" class="form-control" name="date">

                                          </div>
                                  </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <!-- <label>Section:</label> -->
                                              <input type="submit" class="btn btn-default" name="submit" value="Search">

                                          </div>
                                      </div>
                              </div>

                                  </form>
                              </div>

                 <div class="table-responsive">
                     <table class="table">
                         <tr >
                             <th class="header"><input type="checkbox"> <i class="icon-sort"></i></th>
                             <th class="header"> Student Name<i class="icon-sort"></i></th>

                             <th class="header"> Status <i class="icon-sort"></i></th>

                         </tr>
                         <tbody>

                             <tr>
                                 <td><input type="checkbox"> </td>
                                 <td> student_name  <br> father_name </td>

                                 <td>
                                     <select name="status" id="status" class="form-control" >
                                         <option value="" >Status</option>

                                         <option value="0" selected>Absent</option>
                                         <option value="1" >Present</option>
                                         <option value="2" >Leave</option>
                                     </select>

                                 </td>

                                 <td>

                                 </td>
                             </tr>

                         </tbody>

                     </table>
</div>
                 </div>
    </div>
</div>
