<!DOCTYPE html>
<html lang="en">
<head>
	
<?php include('header.php'); ?>
	
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

                  <h3>Task 
                      <a href="product_add.php">
                      <button class="btn btn-success right" ><span class="fa fa-user-plus" aria-hidden="true"></span> Add</button>
                      </a>    
                    </h3>
                   
                   </div>

									<div class="panel-body">


									<div class="responsive-table">
										<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
										  <thead>
											<tr>
											  <th>Name </th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td>ตัดไม้ <button class="btn-danger right"> Remove</button> </td>
											
											</tr>
											<tr>
											    <td>ทาสี <button class="btn-danger right"> Remove</button> </td>

											</tr>
										  </tbody>
											</table>
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
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


    <!-- custom -->
     <script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
    
	 
	     $(".nav li").on("click", function() {
			//alert($(this).data('value'));
			document.location.href = $(this).data('value');
		});
	
   
</script>
  <!-- end: Javascript -->
  </body>
</html>