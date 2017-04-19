<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iFactory</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper" >
	
	<div style="background-color:#f7f7f7;">
		<div class="container" >

			<form action="home.php" class="form-signin">
			  <div  class="panel periodic-login">
				 
				  <div class="panel-body text-center">
					  <h1 class="atomic-symbol">iF</h1>
					  <p class="atomic-mass">Easy</p>
					  <p class="element-name">Optimize</p>

					  <i class="icons icon-arrow-down"></i>
					  <div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="text" class="form-text" required>
						<span class="bar"></span>
						<label>Username</label>
					  </div>
					  <div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="password" class="form-text" required>
						<span class="bar"></span>
						<label>Password</label>
					  </div>
					  <label class="pull-left">
					  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
					  </label>
					  <input type="submit" class="btn col-md-12" value="Login"/>
				  </div>

			  </div>
			</form>

		  </div>


	</div>

        <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
		
	


       });
	   
	   
     </script>
     <!-- end: Javascript -->
   </body>
   </html>