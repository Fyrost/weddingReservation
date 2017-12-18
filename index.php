<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
			<link href="css/bootstrap.min.css" rel="stylesheet">
    		<link href="css/main.css" rel="stylesheet">
				<link rel="stylesheet" href="css/datepicker.css">
       	<script src="js/bootstrap-datepicker.js"></script>
		<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #ffffff}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}</style>
		<title></title>
	</head>
	<!-- Modal Login -->
	<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" id="luser" name="Username" type="text"/>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" id="lpass" name="Password" type="password"/>
					</div>
					<p id="login_error" style="color: red;"></p>
					<button class="btn btn-primary btn-block" onclick="login_account()">Login</button>
        </div>
      </div>
    </div>
	</div>

	<!-- Modal Register -->
	<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
					<center><h3 id="successReg"></h3></center>
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" id="username" name="Username" onkeyup="user_check(this.value)" type="text"/>
						<p id="user"></p>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" id="password" name="Password" onkeyup="pass_check()" type="password"/>
						<p id="pass"></p>
					</div>
					<div class="form-group">
						<label>Re-type Password</label>
						<input class="form-control" id="password1" name="Password1" onkeyup="pass_check()" type="password"/>
						<p id="pass1"></p>
					</div>
					<button class="btn btn-primary btn-block" id="regist" onclick="submitReg()" disabled>Register</button>
        </div>
      </div>
    </div>
	</div>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#options1">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					</button>
        </div>
        <div class="collapse navbar-collapse navbar-left" id="options">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><b> Home </b></a></li>
						<li><a href="#"><b> About </b></a></li>
						<li><a id="reserve" href="#"><b> Reserve </b></a></li>
					</ul>
        </div>
				<div class="collapse navbar-collapse navbar-right" id="options1">
					<ul class="nav navbar-nav">
						<?php
							include('loginNav.php');
						?>
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
	<div class='photographer'>
		<div class="photographer1">
		</div>
	</div>
    	<div class="reservation">
	<a name="reserve"></a>
	<div class="col-md-6 col-md-offset-3 text-center " >
		<div class="vector-w-head"></div>
		<h2>Reserve a Date?</h2>
		<div class="form-limit">
			<form>
				<div id="name-group" class="form-group ">
					<label class="control-label " for="name">
						Name
					</label>
					<input class="form-control" id="name" name="name" type="text" autocomplete="off"/>
				</div>
				<div id="email-group" class="form-group ">
					<label class="control-label" for="email">
						Email
					</label>
					<input class="form-control" id="email" name="email" type="text" autocomplete="off"/>
				</div>
				<div id="number-group" class="form-group ">
					<label class="control-label " for="number">
						Number
					</label>
					<input class="form-control" id="number" name="number" type="text" autocomplete="off"/>
				</div>
				<div id="photographer-group" class="form-group ">
					<label class="control-label" for="select">
						Select Photographer
					</label>
					<select class="select form-control" id="photographer" name="photographer">
						<option value="First Choice">
							First Choice
						</option>
						<option value="Second Choice">
							Second Choice
						</option>
						<option value="Third Choice">
							Third Choice
						</option>
					</select>
				</div>
				<span id="dateWarning"></span>
				<div id="date-group" class="form-group ">
					<label class="control-label" for="date">
						Date
					</label>
					<div class="input-group">
						<div class="input-group-addon">
				 			<i class="fa fa-calendar"></i>
						</div>
						<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" autocomplete="off"/>
					</div>
				</div>
				<div class="form-group">
					<div>
						<button class="btn btn-primary " name="submit" onclick="">
				 			Submit
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="vector-w-foot"></div>
	</div>
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/register.js"></script>
	<script src="js/login.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>
	<script src="js/main.js"></script>
<script>
$(document).ready(function(){
    $(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true
        })
    });
})
</script>
</body>
</html>
