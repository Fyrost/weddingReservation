<html>
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/datepicker.css">
       	<script src="js/jquery.min.js"></script>
       	<script src="js/bootstrap.min.js"></script>
       	<script src="js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" href="css/bootstrap-iso.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
		<title></title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
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
		<div class="container-fluid" style="padding: 0;">
			<div id="myCarousel" class="carousel slide">
	  	<!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		        <div class="fill" style="background-image:url('img/1.jpg');"></div>
		        <div class="carousel-caption">
		          <h1>Modern Business - A Bootstrap 3 Template</h1>
		        </div>
		      </div>
		      <div class="item">
		        <div class="fill" style="background-image:url('img/2.jpg');"></div>
		        <div class="carousel-caption">
		          <h1>Ready to Style &amp; Add Content</h1>
		        </div>
		      </div>
		      <div class="item">
		        <div class="fill" style="background-image:url('img/3.jpg');"></div>
		        <div class="carousel-caption">
							asd
		        </div>
		      </div>
		    </div>

		    <!-- Controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="icon-prev"></span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="icon-next"></span>
		    </a>
			</div>
		</div>
    <div style="height:1000px;"></div>
    <div class="reservation">
           <div class="col-md-6 col-md-offset-3 text-center " >
		    <div class="vector-w-head"></div>
                     <h2>Reserve a Date?</h2>
			<div class="bootstrap-iso">
                      <div class="container-fluid">
                       <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <form>
                          <div class="form-group ">
                           <label class="control-label " for="name">
                            Name
                           </label>
                           <input class="form-control" id="name" name="name" type="text"/>
                          </div>
                          <div class="form-group ">
                           <label class="control-label requiredField" for="email">
                            Email
                            <span class="asteriskField">
                             *
                            </span>
                           </label>
                           <input class="form-control" id="email" name="email" type="text"/>
                          </div>
                          <div class="form-group ">
                           <label class="control-label " for="number">
                            Number
                           </label>
                           <input class="form-control" id="number" name="number" type="text"/>
                          </div>
<span id="dateWarning"></span>
                          <div class="form-group ">
                           <label class="control-label requiredField" for="date">
                            Date
                            <span class="asteriskField">
                             *
                            </span>
                           </label>
                           <div class="input-group">

                            <div class="input-group-addon">
                             <i class="fa fa-calendar">
                             </i>
                            </div>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                           </div>
                          </div>
                          <div class="form-group">

                           <div>
                            <button class="btn btn-primary " name="submit" type="submit">
                             Submit
                            </button>
                           </div>
                          </div>
                         </form>
                        </div>
                       </div>
                      </div>
                     </div>
			<div class="vector-w-foot"></div>
           </div>
    </div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/js.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(function(){
        var date_input=$('#date'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
               onSelect: function(){
                      var day1 = $("#date").datepicker('getDate');
                      document.getElementById("dateWarning").innerHTML = day1;
               },
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true
        })
    });



</script>
	</body>
</html>
