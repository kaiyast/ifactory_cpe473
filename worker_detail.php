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
$worker_id = $_GET['W_ID'] ;

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
	
    <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
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
                          <h3>
						  <?php
						  echo $worker_name;
						  ?>
						        <a href="worker_remove_code.php?W_ID=<?php echo $worker_id?>" ><button class="btn btn-danger right" ><span class="fa fa-trash" aria-hidden="true"></span> Remove </button></a>
								<a href="worker_edit.php?W_ID=<?php echo $worker_id?>" ><button class="btn btn-warning right" ><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </button></a>
								
						  </h3> 
                      </div>
 		                  <div class="panel-body">

                          <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">

							   <h3>Worker Skills</h3> 
								<div class="col-md-12">
							
										<canvas class="doughnut-chart"></canvas>
									
								  </div>
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
 <script src="asset/js/plugins/jquery.nicescroll.js"></script>
     <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>

<!-- custom -->
<script src="asset/js/main.js"></script>

 <script type="text/javascript">
       (function(jQuery){
 

        var doughnutData = [
                {
                    value: <?php echo $Color ?>,
                    color:"#4ED18F",
                    highlight: "#15BA67",
                    label: "Color"
                },
                {
                    value: <?php echo $Wood ?>,
                    color: "#15BA67",
                    highlight: "#15BA67",
                    label: "Wood"
                },
                {
                    value: <?php echo $Mechanic ?>,
                    color: "#5BAABF",
                    highlight: "#15BA67",
                    label: "Mechanic"
                },
                {
                    value: <?php echo $Decorate ?>,
                    color: "#94D7E9",
                    highlight: "#15BA67",
                    label: "Decorate"
                },
                {
                    value: <?php echo $Packaging ?>,
                    color: "#BBE0E9",
                    highlight: "#15BA67",
                    label: "Packaging"
                }

            ];

             window.onload = function(){
                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

            };
        })(jQuery);
		$(".nav li").on("click", function() {
			//alert($(this).data('value'));
			document.location.href = $(this).data('value');
		});
	
</script>
  <!-- end: Javascript -->
  </body>
</html>