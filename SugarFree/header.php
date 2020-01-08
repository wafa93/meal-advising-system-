<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


  <style type="text/css">
    .login-form-1 {
      padding: 0;
      font-weight: bold;
      box-shadow: 0px 1px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgb(0, 0, 0);
      background: #ffffffb8;
      margin-left: auto;
      margin-right: auto;
    }
  </style>


</head>

<body>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12  login-form-1">
          <header id="header">

            <div class="slider">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="3333.jpg">

                  </div>
                  
                  <div class="item">
                    <img src="344.jpg">
                  </div>
                  <div class="item">
                    <img src="happy-life2.jpg">
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="fa fa-angle-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="fa fa-angle-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!--slider-->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="img-responsive" src="8-1.png"></a>
                <span class="site-name">مرحبًا <?php echo $login_session; ?></span>
                <span class="site-description">العقل السليم بالجسم السليم</span>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="mainNav">
                <ul class="nav main-menu navbar-nav">
                  <li><a href="welcome.php"><i class="fa fa-home"></i> الصفحة الرئيسية</a></li>
                  <li><a href='categoryRecp.php?Recipes=sugarfree'>وصفات خاليه من السكر</a>
                  <li>
                  <li><a href='categoryRecp.php?Recipes=apple'>وصفات تفاح</a>
                  <li>
                  <li><a href='categoryRecp.php?Recipes=fewcarb'>وصفات قليلة الكربوهيدرات</a>
                  <li>
                  <li> <a href='categoryRecp.php?Recipes=fluids'>وصفات شوربات</a>
                  <li>
                  <li><a href="logout.php"><i class="fa fa-sign-out"></i>تسجيل الخروج</a></li>
				  <li>
				  <li><a href="SiteDescription.html">وصف الموقع</a></li>
				  <li>

				  
                </ul>

                <ul class="nav  navbar-nav navbar-right">

                  <li><a href="https://www.instagram.com/sugar_free2019/"><i class="fa fa-instagram"></i></a></li>
                 
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>

          </header>
          <!--/#HEADER-->
          <script type="text/javascript">

          </script>
</body>

</html>