<html>
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title></title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#dff7ff;">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
        </div>
         <div class="collapse navbar-collapse navbar-right" id="options">
            <ul class="nav navbar-nav">
               <li><a href="index.php"><b> Home </b></a></li>
               <li><a href="#"><b> Profile </b></a></li>
                <li><a href="#"><b> About </b></a></li>
            </ul>
         </div>
      </div>
    </nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
				        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
				      </div>

				      <div class="item">
				        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
				      </div>

				      <div class="item">
				        <img src="ny.jpg" alt="New york" style="width:100%;">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>
			</div>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/js.js"></script>
	</body>
</html>
