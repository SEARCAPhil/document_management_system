
<div style="margin-top: 4%;">

<!--login form-->
<div class="loginForm ">



	<!--<div class="page-header col col-md-10 row">
		<h2>Supporting Documents for Financial Transaction <small>Management System</small></h2>
	</div>-->

 
<?php echo form_open('home/authentication','class="form-horizontal",action='.$_SERVER['PHP_SELF']); ?>

<style type="text/css">
  input[type="text"],input[type="password"]{
    border: 1px solid #ccc !important;
    border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
    padding:20px;
    box-shadow: none;
  }

  .btn-submit{
    background: rgb(55,164,249);
    color:rgb(255,255,255);
    padding: 10px;
    border-radius: 20px;
  }

  .searca-about,.searca-footer{
    font-size: 9px;
    margin-top: 50px;
  }
  .searca-footer{
    line-height: 0;
    margin-top: 60px;
  }
  .alert-danger{
    background: rgba(255,99,33,0.3);
  }
</style>
  
<div class="col col-lg-4 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">	

        <div class="row">
          <div class="col col-md-2 col-sm-2 col-xs-2" style="min-width: 70px !important;">
            <!--  <img src="<?php echo base_url(); ?>assets/images/logo-new.png" width="100px">-->
            <img src="<?php echo base_url(); ?>assets/images/sample-logo.png" width="70px">
            <h1></h1>
          </div>
          <div class="col col-md-10 col-sm-10 col-xs-10" style="line-height: 0;">
            <h1 style="padding-right: 0px !important;"> Sign In </h1>
            <p><small class="text-muted"><a href="#" style="color:rgb(180,180,180);">Documents Management System</a></b></small></p>
          </div>
        </div>

		  <div class="form-group col col-md-12 has-feedback">
     	  		<input type="text" class="form-control" id="inputUser" placeholder="username" name="username" ng-model="username" required>   	   
   		 		<!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
   		 </div>
   		 <div class="form-group col col-md-12 ">
     	  
     	   <div>
        		<input type="password" class="form-control" placeholder="Password" id="inputPassword" name="password" ng-model="password" required>
     	   </div>
   		 </div>



        <?php if($data){ ?>
          <div class=" col col-md-12 row">
            <div class="alert alert-danger">
              <p>Oopss! Invalid username or password!</p>
              <p class="text-important">Is this your account? <small><a href="<?php echo base_url(); ?>">not my account.</a></small></p>
            </div>
          </div>
        <?php } ?>



       <!--submit-button-->
   		 <div class="form-group col col-md-12 ">
    		<button class="btn btn-block btn-submit">Login</button>
  		 </div>
  	  <!--end submit button-->
<div style="clear: both;"></div>
<div class="searca-about">  
   <center>
        <p>The Southeast Asian Regional Center for Graduate Study and Research in Agriculture (SEARCA) was established by the Southeast Asian Ministers of Education Organization (SEAMEO) in 1966 “to provide to the participating countries high quality graduate study in agriculture; promote, undertake, and coordinate research programs related to the needs and problems of the Southeast Asian region; and disseminate the findings of agricultural research and experimentation.</p>
    </center>
</div>


<footer class="searca-footer"> 
   <center>
      <p>Created By</p>
      <p>Information Technology Services Unit</p>
      <p>&copy;2017 SEAMEO SEARCA</p>
      <p><a href="www.searca.org" style="color:rgb(6,148,66);">www.searca.org</a></p>
      <p><img src="<?php echo base_url(); ?>assets/images/logo-new.png" width="40px"></p>
   </center>
</footer>
     

</div>

<!--end login-form-->


</div>



<!--end content-->
</artice>
