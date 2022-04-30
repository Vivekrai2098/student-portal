<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		#side{
			margin-left: 50px;
		}
	</style>

	<title>welcome</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-evenly" style="background-color: #7ff798;">
			<div class="col-md-5">
				<h1><strong>Welcome Administrator</strong></h1>
			</div>
		</div>



		<div class="row mt-5 justify-content-evenly">
			<div class="col-md-10">
				<h1 style="font-size: 17px; font-weight: bold;">This is Student issue/question/and problem</h1>
			</div>
		</div>
		<!-- .......... -->
		<div class="row mt-5">
			<div class="col-md-10">
				<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"> Student email</th>
      <th scope="col">Student issues</th>
    </tr>
  </thead>
  <tbody>
  	<!-- this is the php -->
  	<?php
$c=mysqli_connect("localhost","root","","student");
$e="SELECT * from info";
$qu=mysqli_query($c,$e);
$nu=mysqli_num_rows($qu);
while($ree=mysqli_fetch_array($qu)){
	?>
	<table>
	<tr>
		<td><?php echo $ree['email'];?></td>
		<td>_____________________________________________________</td>
		<td id="side" style="color: red"><?php echo $ree['text1'];?></td>
	</tr>
</table>
<?php	
}
?>


  	<!-- this is the end of php -->




<!--     <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
 -->  </tbody>
</table>
<!-- <table>
<tr>
	<th>email</th>
	<th>text</th>
</tr>
</table>
 -->			</div>
		</div>





		<!-- this is the last div -->
	</div>
	
<!-- this is the php code -->







	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>