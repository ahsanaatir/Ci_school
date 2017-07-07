

<script >
  
  $(document).ready(function() { 
    // call the tablesorter plugin 
    $("table").tablesorter(); 
}); 
</script>



<div class="col-md-10">
    <h1>Student Detail List</h1>
</div>
<div class="col-md-2">
    <a href="<?php echo base_url();?>students/add"><button type="button" class="btn btn-primary">Add Student</button> </a>
</div>
<br><br><br><br>
<div class="chit-chat-layer1 row">
  	<div class="col-md-12">
                 <div class="work-progres">
                              <div class="chit-chat-heading">
                                  <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group" >
                                        <!-- <label>Session:</label> -->
                                        <select name="Session" id="Session" class="form-control" >
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
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <!-- <label>Course:</label> -->
                                          <select name="Class" id="Class" class="form-control" >
                                              <option value="" >Class</option>
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
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <!-- <label>Section:</label> -->
                                          <select name="Section" id="Section" class="form-control" >
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
                                  </div>
                              </div>

 

                 </div>
    </div>
</div>
                    <table class= "table table-responsive" id="tab" >
                     <thead>
                         <tr>
                             <th class="header"><input type="checkbox"> <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Student Name<hr style="margin: 0">Father Name <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Roll No<hr style="margin: 0">Registration No <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Date of Birth<i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Gender <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> B-form<hr style="margin: 0">Father CNIC <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Contact No<hr style="margin: 0">Address <i class="icon-sort"></i></th>
                             <th class="header" style="cursor:pointer";> Action <i class="icon-sort"></i></th>
                         </tr>
                        </thead>
                        <tbody class="table-hover">
                         <?php
                         foreach ($students as $std)
                         {
                             //print_r($std);
                             ?>
                             <tr>
                                 <td><input type="checkbox"> </td>
                                 <td> <?php echo $std->full_name;?>  <br> <?php echo $std->father_name;?>  </td>
                                 <td> <?php echo $std->roll_no;?>  <br> <?php echo $std->registration_no;?>  </td>
                                 <td> <?php echo $std->date_of_birth;?>  </td>
                                 <td> <?php echo $std->gender;?>  </td>
                                 <td> <?php echo $std->bay_form;?> <br> <?php echo $std->father_cnic;?> </td>

                                 <td> <?php echo $std->contact_no;?> <br> <?php echo $std->address;?> </td>
                                 <td>
                                     <div class="dropdown">
                                         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Option
                                             <span class="caret"></span></button>
                                         <ul class="dropdown-menu dropdown-menu-right">
                                             <li><a href="">Fee slip</a></li>
                                             <li><a href="#">Promote</a></li>
                                             <li><a href="<?php echo base_url().'students/print_admission_form/'.$std->student_id; ?>">Admission Form</a></li>
                                         </ul>
                                     </div>
                                 </td>
                             </tr>
                         <?php

                         }
                         ?>


</tbody>
                     </table>

