<!DOCTYPE html>
<html lang="en">
<head>
	
<?php include('header.php'); 
  
$worker_name = "" ;
$Color =0 ;
$Wood = 0;
$Mechanic =0;
$Decorate = 0;
$Packaging = 0;
$worker_id = $_GET['W_ID'];

$sql = "SELECT * FROM Worker WHERE W_ID = '".$worker_id."'" ;
	
	$result = mysqli_query($conn,$sql); 
	while($row = mysqli_fetch_array($result)) 
	{
		$worker_name = $row['W_Name'] ;
	}
	$sql = "SELECT * FROM Skill_of_w WHERE W_ID = '".$worker_id."'" ;
	
	$result = mysqli_query($conn,$sql); 
	while($row = mysqli_fetch_array($result)) 
	{
		if($row['S_ID'] == 1 )$Color = $row['Point'] ;
		else if($row['S_ID'] == 2 )$Wood = $row['Point'] ;
		else if($row['S_ID'] == 3 )$Mechanic = $row['Point'] ;
		else if($row['S_ID'] == 4 )$Decorate = $row['Point'] ;
		else if($row['S_ID'] == 5 )$Packaging = $row['Point'] ;
	}
?>
  
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="home.php" class="navbar-brand"> 
                 <b>iFactory</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>

                </li>
              </ul>


            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
<?php include('bar.php'); ?>

  		
          <!-- start: content -->
            <div id="content">

                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-12 col-sm-12">
                        <h3 class="animated fadeInLeft">Optimize Service</h3>

                    </div>
                  </div>                    
                </div>


                <div class="col-md-12" >

                         <div class="col-md-12 padding-0">
						
							  <div class="col-md-12  padding-0">
									



                  <div class="col-md-12 top-20">                  
                    
                    <div class="panel">
     
		                  <div class="panel-heading">
                          <h3><span class="fa fa-user-plus" aria-hidden="true"></span> <?php echo $worker_name  ?></h3> 
                      </div>
 		                  <div class="panel-body">

                          <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                              <form class="cmxform" id="signupForm" method="POST" action="worker_edit_code.php?W_ID=<?php echo $worker_id?>">
							  
							  

							 <div class="col-md-6">
								  <div class="form-group form-animate-text" style=" !important;">
                                    <input type="text" class="form-text"  name="Color" value="<?php echo $Color?>" required>
                                    <span class="bar"></span>
                                    <label>Color </label>
                                  </div>

							      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text"  name="Wood" value="<?php echo $Wood?>" required>
                                    <span class="bar"></span>
                                    <label>Wood </label>
                                  </div>		
								  
								   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text"  name="Mechanic"  value="<?php echo $Mechanic?>" required>
                                    <span class="bar"></span>
                                    <label>Mechanic </label>
                                  </div>
								  
								  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text"  name="Decorate" value="<?php echo $Decorate?>" required>
                                    <span class="bar"></span>
                                    <label>Decorate </label>
                                  </div>
								  
								  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text"  name="Packaging" value="<?php echo $Packaging?>" required>
                                    <span class="bar"></span>
                                    <label>Packaging </label>
                                  </div>
								  
								  
							  </div>
							
                                <div class="col-md-12 top-20">
								<br>
                                    <input class="submit btn btn-danger " type="submit" value="Submit">
                              </div>                   
                            </form>

                          </div>
                        </div>



                      </div>                     
								  	</div>

								  </div>  
							  </div>
           


		  
						</div>
				</div>
      		</div>
          <!-- end: content -->

    
         
          
      </div>

   

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>

 <script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

  


      $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":0,
       "width":80,
       "max":100,
       "fgColor":"#87CEEB",
       "skin":"tron"
     }
     );


	 
  });

	     $(".nav li").on("click", function() {
			//alert($(this).data('value'));
			document.location.href = $(this).data('value');
		});
	
   
</script>
  <!-- end: Javascript -->
  </body>
</html>