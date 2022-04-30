<!DOCTYPE html>
<html>
<head>
	<?php
	session_start()
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>welcome</title>
	<style type="text/css">
		.navbar-light .navbar-nav .nav-link.active{
			color: black;
			font-weight: bold;
			font-size: 19px;
			margin-left: 28px;
		}
		#an{
			animation-name: nor;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			animation-duration: 1s;

		}
		@keyframes nor{
			0%{color: red;}
			25%{color: green;}
			50%{color: purple;}
			75%{color: yellow;}
			100%{color: black;}

		}
	</style>
</head>
<body>
	<?php //echo $_SESSION['email']; ?> 
	<!-- this is the nav -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #96fff5;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: black;font-weight: bold;font-size: 28px;">Student Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Rank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Feedback</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-danger" onclick="cl()" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
	<!-- this is the end of nav -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
		<h1 style="text-align: center;margin-top:20px;font-weight: bold;">Welcome <?php echo $_SESSION['email']; ?></h1>	
		</div>
	</div>
	<!-- this is the second part -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5" id="p1" style="margin-top: 180px;">
				<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 66%">66%</div>
</div>

<div class="progress mt-4">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 46%">46%</div>
</div>

<div class="progress mt-4">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
</div>

<div class="progress mt-4">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 23%">23%</div>
</div>
			</div>
			<div class="col-md-5" style="margin-top: 180px;padding-left: 89px;">
				<h1 style="font-size: 20px;font-family:sans-serif;font-weight:bold; ">The <span id="an">Achivment</span> of your <?php echo $_SESSION['email']; ?></h1>
			</div>
		</div>
	</div>

<div class="row justify-content-evenly">
	<div class="col-md-10">
		<img src="8.png" class="img-fluid">
	</div>
</div>
<!-- this is the form part -->
<form action="se.php" method="post">
<div class="row justify-content-evenly mt-5">
	<div class="col-md-10" style="background-color:#f6f6f6">
		<!-- this is the form -->
		<div class="mb-3">
			<h1 style="text-align:center;margin-top: 30px;font-weight: bold;">Feedback and Problem solving box </h1>
			<!-- <form action="send.php"method="post"> -->
  <label for="exampleFormControlInput1" class="form-label"><strong>Email address</strong></label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><strong>Your area</strong></label>
  <textarea class="form-control" name="text1" id="exampleFormControlTextarea1" rows="3"></textarea>
  <!-- <button type="button" class="btn btn-warning" style="margin-top:28px;margin-left: 360px;">Submit</button> -->
  <input type="submit" value="submit" class="btn btn-warning"style="margin-top:28px;margin-left: 360px;">
 </div>
</form>
		<!-- this is the end of the form -->
	</div>
</div>


	<!-- this is the end div -->
</div>
<!-- this is the footer -->
<nav class="navbar navbar-expand-lg navbar-light mt-5" style="background-color: #96fff5;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: black;font-weight: bold;font-size: 28px;">Student Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Rank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Feedback</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-danger" onclick="cl()" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<!-- this is the end of the footer -->


<!-- ............. -->
<!-- <form action="se.php" method="post">
<input type="text" name="text1">
<input type="email" name="email">
<input type="submit" value="submit"> -->

<!-- ,,,,,,,,,,,,,,,,,,, -->



<script type="text/javascript">

function cl(){
	alert("thanks for using my web")
	window.close("index.php")
}



</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>