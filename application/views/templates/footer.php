</div>

</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>©  2017 Aatir Sky Tech</p>
</div>
<!--COPY rights end here-->
</div>

<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="<?php echo base_url();?>home"><i class="fa fa-tachometer"></i><span>Home</span></a></li>
		        <li><a href="<?php echo base_url();?>students"><i class="fa fa-user"></i><span>Student</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="<?php echo base_url();?>students/add">Add Student</a></li>
		            <li><a href="<?php echo base_url();?>students/search">View Students</a></li>
					  <li><a href="<?php echo base_url();?>students/attendance">Mark Attendance</a></li>
		          </ul>
		         </li>
				  <li><a href="<?php echo base_url();?>teacher"><i class="fa fa-black-tie"></i><span>Teacher</span><span class="fa fa-angle-right" style="float: right"></span></a>
					  <ul>
						  <li><a href="<?php echo base_url();?>teachers/add">Add Teacher</a></li>
						  <li><a href="<?php echo base_url();?>teachers/search">View Teachers</a></li>
						  <li><a href="<?php echo base_url();?>teachers/attendance">Mark Attendance</a></li>
					  </ul>
				  </li>
				  <li><a href="<?php echo base_url();?>teacher"><i class="fa fa-steam"></i><span>Reports</span><span class="fa fa-angle-right" style="float: right"></span></a>
					  <ul>
						  <li><a href="<?php echo base_url();?>teachers/add">Add Teacher</a></li>
						  <li><a href="<?php echo base_url();?>teachers/search">View Teachers</a></li>
						  <li><a href="<?php echo base_url();?>teachers/attendance">Mark Attendance</a></li>
					  </ul>
				  </li>
				  <li><a href="<?php echo base_url();?>teacher"><i class="fa fa-linux"></i><span>Exam</span><span class="fa fa-angle-right" style="float: right"></span></a>
					  <ul>
						  <li><a href="<?php echo base_url();?>teachers/add">Add Teacher</a></li>
						  <li><a href="<?php echo base_url();?>teachers/search">View Teachers</a></li>
						  <li><a href="<?php echo base_url();?>teachers/attendance">Mark Attendance</a></li>
					  </ul>
				  </li>
<!--		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--		          <ul id="menu-comunicacao-sub" >-->
<!--		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>-->
<!--		            </li>-->
<!--		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>-->
<!--		             <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>-->
<!--		          </ul>-->
<!--		        </li>-->
<!--		          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>-->
<!--		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--		          <ul id="menu-academico-sub" >-->
<!--		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>-->
<!--		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>-->
<!--		          </ul>-->
<!--		        </li>-->
<!---->
<!--		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>-->
<!--		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--		        	 <ul id="menu-academico-sub" >-->
<!--			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>-->
<!--			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>-->
<!--		             </ul>-->
<!--		        </li>-->
<!--		         <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--		         	 <ul id="menu-academico-sub" >-->
<!--			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>-->
<!--			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>-->
<!--		             </ul>-->
<!--		         </li>-->
<!--		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>-->
<!--		         	<ul id="menu-academico-sub" >-->
<!--			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>-->
<!--			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>-->
<!--		             </ul>-->
<!--		         </li>-->


		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
	// alert("sidebar");
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js--
		<script src="<?php echo base_url();?>js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url();?>js/scripts.js"></script>
		<!--//scrolling js-->
		<script src="<?php echo base_url();?>js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
