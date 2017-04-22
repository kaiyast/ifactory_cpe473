<!DOCTYPE html>
<html lang="en">
<head>
	
<?php include('header.php'); ?>
	
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
                          <h3>สมชาย
						        <a href="worker_remove.php" ><button class="btn btn-danger right" ><span class="fa fa-trash" aria-hidden="true"></span> Remove </button></a>
								<a href="worker_edit.php" ><button class="btn btn-warning right" ><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit </button></a>
								
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
                    value: 100,
                    color:"#4ED18F",
                    highlight: "#15BA67",
                    label: "Loggin"
                },
                {
                    value: 250,
                    color: "#15BA67",
                    highlight: "#15BA67",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#5BAABF",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#94D7E9",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#BBE0E9",
                    highlight: "#15BA67",
                    label: "X"
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
</script>
  <!-- end: Javascript -->
  </body>
</html>