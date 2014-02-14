
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Bootstrap Learning Site - Brewtroller Setup</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--include external highcharts for logging charts and volume display-->
	  <!--<script type="text/javascript" src="JS/Plugins/highcharts.js"></script>-->
    
  </head>

  <body>

         <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brewtroller Web App</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Global</a></li>
                  <li><a href="#">HLT</a></li>
                  <li><a href="#">MLT</a></li>
                  <li><a href="#">Kettle</a></li>
                </ul>
              </li>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <img style="padding-top: 10px;" class="img-responsive" src="../images/logo.png">
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
            <a data-toggle="collapse" data-target="#collapseMonitor" class="collapsed">
            Monitor
            </a>
            </h3>
          </div>
          <div id="collapseMonitor" class="panel-collapse collapse">
          <div class="panel-body">          
          <div class="row">
            <div class="col-md-4">
              <h2>HLT</h2>
              <div id="HLT">
						<div class="temperatureWrapper">
							<p><span>---.-</span><span>&#186F</span></p>
							<p><span class="editableField" contenteditable="true">---</span><span>&#186F</span></p>
							<p>OFF</p>
						</div>
						<div class="volumeWrapper">
							<div id="HLTChart" class="volChart"></div>
							<p><span>--</span><span>G</span></p>
							<p><span>--.--</span><span>G</span></p>
						</div>
					</div>
              
            </div>
            <div class="col-md-4">
              <h2>MLT</h2>
              <div id="MLT">
						<div class="temperatureWrapper">
							<p><span>---.-</span><span>&#186F</span></p>
							<p><span class="editableField" contenteditable="true">---</span><span>&#186F</span></p>
							<p>OFF</p>
						</div>
						<div class="volumeWrapper">
							<div id="MLTChart" class="volChart"></div>
							<p><span>--</span><span>G</span></p>
							<p><span>--.--</span><span>G</span></p>
						</div>
					</div>
              
            </div>
            <div class="col-md-4">
              <h2>Kettle</h2>
              <div id="KETTLE">
						<div class="temperatureWrapper">
							<p><span>---.-</span><span>&#186F</span></p>
							<p><span class="editableField" contenteditable="true">---</span><span>&#186F</span></p>
							<p>OFF</p>
						</div>
						<div class="volumeWrapper">
							<div id="KETTLEChart" class="volChart"></div>
							<p><span>--.--</span><span>G</span></p>
							<p><span>--.--</span><span>G</span></p>
						</div>
					</div>
              
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
            <a data-toggle="collapse" data-target="#collapsePrograms" class="collapsed">
            Programs
            </a>
            </h3>
          </div>
          <div id="collapsePrograms" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
          </div>
          </div>
      </div>
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
            <a data-toggle="collapse" data-target="#collapseLogging" class="collapsed">
            Logging
            </a>
            </h3>
          </div>
          <div id="collapseLogging" class="panel-collapse collapse">
          <div class="panel-body">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
          </div>
          </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
