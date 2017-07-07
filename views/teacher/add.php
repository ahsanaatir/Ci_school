<?php echo form_open('teachers/add');?>
<div class="prices-head">
<h2>Teacher Registration Form</h2>
</div>
<?php echo validation_errors(); ?>
<div class=" col-md-10 chit-chat-layer1-rit">
  <div class="work-progres">
    <div class="chit-chat-heading">
      Teacher Profile 
    </div>
    <!-- Row --></h2>
      <div class="row">
        <div class="col-md-6" input class="form-control" >
          <div class="form-group">
          <label>Employee No:</label>
          <input class="form-control" type="text" placeholder="Enter Your No">
          </div>
           <div class="form-group">
          <label>Name:</label>
          <input class="form-control" type="text" name="tname" placeholder="Enter Your Name">
          </div>
      </div>
      <div class="col-md-6" input class="form-control" >
          <div class="form-group">
          <label>Joining Date:</label>
          <input class="form-control" type="date">
          </div>
           <div class="form-group">
          <label>Pay:</label>
          <input class="form-control" type="text" placeholder="Enter Your Pay">
          </div>
      </div>
      </div>
      <!-- end row -->

  </div>
</div>
<div class=" col-md-2 chit-chat-layer1-rit">
    <div class="work-progres">
        <div class="chit-chat-heading">
            Photo
        </div>
         <div class="form-group" >
           <img src="images/1.jpg" input type="file"  width="100%" height="130px"  align="center" >
         </div>
             </div>
</div>

<div class="clearfix"></div>

<div class="chit-chat-layer1">
  <div class="work-progres">
    <div class="chit-chat-heading">
   Personal Information
    </div>
    <!-- Row -->
      <div class="row">
        <div class="col-md-6" input class="form-control" >
            <div class="form-group">
                         <label>Full Name:</label>
                         <input class="form-control" type="text" placeholder="Enter Your Name">
                       </div>
                       <div class="form-group">
                         <label>DOB:</label>
                         <input class="form-control" type="date">
                       </div>
                       <div class="form-group">
                         <label>Gender:</label>
                         <select name="Gender" id="Gender" class="form-control" >
                           <option value="Male" >Male</option>
                           <option value="Female" >Female</option>
                         </select>
                         </div>
                      <div class="form-group">
                         <label>Status:</label>
                         <select name="Status" id="Status" class="form-control" >
                           <option value="Married" >Married</option>
                           <option value="Unmarried" >Unmarried</option>
                         </select>
                         </div>
                          <div class="form-group">
                         <label>Email ID:</label>
                          <input class="form-control" type="text" placeholder="Enter Your Id">
                       </div>
                        <div class="form-group">
                         <label>Cast:</label>
                          <input class="form-control" type="text" placeholder="Enter Your Cast">
                       </div>
      </div>
      <div class="col-md-6" input class="form-control" >
          <div class="form-group">
                         <label>Father Name:</label>
                          <input class="form-control" type="text" placeholder="Enter Father Name">
                       </div>
                       <div class="form-group">
                         <label>CNIC:</label>
                         <input class="form-control" type="text" placeholder="_____-_______-_">
                       </div>
                       <div class="form-group">
                         <label>Religion:</label>
                         <select name="Religion" id="Religion" class="form-control" >
                           <option value="Muslim" >Muslim</option>
                           <option value="Non Muslim">Non Muslim</option>
                         </select>
                       </div>
                        <div class="form-group">
                         <label>Contact No:</label>
                          <input class="form-control" type="text" placeholder="Enter Your No">
                       </div>
                        <div class="form-group">
                         <label>Address:</label>
                         <textarea class="form-control" rows="5" id="text" placeholder="Enter Your Permanent Address"></textarea>

                       </div>
                      
      </div>
      </div>
      <!-- end row -->

  </div>
</div>
<div class="clearfix"></div>

<div class="chit-chat-layer1">
  <div class="work-progres">
    <div class="chit-chat-heading">
   Qualification 
    </div>
    <!-- Row -->
    <div class="responcive-table">
      <table class="table">
        <thead>
        <td><input type="checkbox" name=""></td>
        <td>Degree Title</td>
        <td>Board</td>
        <td>Year</td>
        <td>Obtain Marks</td>
        <td>Total</td>
        </thead>
        <tbody>
          <td><a href="">Edit</a></td>
        <td>BSCS</td>
        <td>Multan</td>
        <td>2014</td>
        <td>990</td>
        <td>1050</td>
        </tbody>
      </table>
    </div>
     
 <button type="button" class="btn btn-success">Add Qualification</button>

      <!-- end row -->

  </div>
</div>
<div class="clearfix"></div>

<div class="chit-chat-layer1">
  <div class="work-progres">
    <div class="chit-chat-heading">
   Experience
    </div>
    <!-- Row -->
     <div class="form-group">
    <div class="responcive-table">
      <table class="table">
        <thead>
        <td><input type="checkbox" name=""></td>
        <td>Degree Title</td>
        <td>Board</td>
        <td>Year</td>
        <td>Obtain Marks</td>
        <td>Total</td>
        </thead>
        <tbody>
          <td><a href="">Edit</a></td>
        <td>BSCS</td>
        <td>Multan</td>
        <td>2014</td>
        <td>990</td>
        <td>1050</td>
        </tbody>
      </table>
    </div>
                        <button type="button" class="btn btn-success">Add Experience</button>
                       </div>
      <!-- end row -->

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