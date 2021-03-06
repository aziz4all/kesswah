<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <title>كسوة &middot; اضافة ملابس</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.rtl.css" rel="stylesheet">
    <script src="./assets/js/jqBootstrapValidation.js"></script>
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
        /*background-image: -webkit-linear-gradient(rgba(28,190,212,0.12) 20%, #ffffff 120%)*/
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./assets/ico/favicon.png">

  </head>

  <body>
    <div class="container">

      <div class="masthead">      
            <h1  class="muted"><img id="logo" src="./assets/img/logo.png" /> كسوة عائشة</h1> 
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
				<li><a href="home.php"><i class="icon-home"></i> الصفحة الرئيسية</a></li>
                <li class="active"><a href="#"><i class="icon-plus-sign"></i> إضافة ملابس</a></li>
                <li><a href="addFamily.php"><i class="icon-plus-sign"></i> إضافة أسرة</a></li>
                <li><a href="callUs.php"><i class="icon-envelope"></i> اتصل بنا</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
	  <div id="loginAlert">
	  </div>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>اضافة ملابس</h2>
        <p class="lead"></p>
        <p>
        <form id="addClothesForm">
	        <table class="table table-hover" id="addClothesTable">
              <thead>
                <tr>
                  <th>الجنس</th>
                  <th>العمر</th>
                  <th>نوع الملابس</th>
                  <th>المقاس</th>
                  <th>الكمية</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <select class="input-block-level" required>
						  <option>ذكر</option>
						  <option>أنثى</option>
						</select>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="number" class="input-block-level" id="inputdata" required>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <select class="input-block-level">
						  <option>تي شيرت</option>
						  <option>بنطلون</option>
						  <option>ثوب</option>
						  <option>فستان</option>
						  <option>اخرى</option>
						</select>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="text" class="input-block-level" id="inputdata" required>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
                  	<div class="control-group">
					  <div class="controls">
					    <input type="number"class="input-block-level" id="inputdata" required >
					    <span class="help-inline"></span>
					  </div>
					</div>
				  </td>
                </tr>
              </tbody>
            </table>
            <div class="form-actions">
	            <a class="btn btn-large" id="addClothsBtn" type="submit" >+</a>
	            <a class="btn btn-large" id="removeClothsBtn" type="submit" >-</a>
	            <input class="btn btn-large btn-primary" type="submit" name="submit" id="submit" class="button" value="تسجيل الملابس"/>
			</div>
        </form>
        </p>
      </div>
      <div>
	      <p>

            </p>
      </div>
      <hr>

    <div id="footer">
      <div class="container">
        <p class="muted credit">&copy;جميع الحقوق محفوظة لــ <a href="#">كسوة</a> 2013.</p>
      </div>
    </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="./assets/js/jquery-1.10.1.min.js"></script>
    <script src="./assets/js/custom.js"></script> 
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-carousel.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>
