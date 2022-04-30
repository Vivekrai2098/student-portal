<!DOCTYPE html>
<html>
<head>
<body style="background-image: url(6.jpg);">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="re.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<title>this</title>
</head>
<div class="container">
	<div class="row mt-5">
		<div class="col-md-10">
			<!-- this is the form -->
			<div class="main-block">
      <h1>Registration</h1>
      <!-- there is php work -->
      <form action="connect.php" method="post">
        <hr>
        <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
        <input type="text" pattern="[a-zA-Z0-9_\-\.]+[@][a-z]+[\.][a-z]{2,3}" name="email" id="e" placeholder="Email" required/>
        <label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" pattern="[a-z]*" name="name" id="name" placeholder="Name" required/>
        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="password" id="name" placeholder="Password" required/>



        <hr>
        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="#">Privacy Policy for vivek site</a>.</p>
          <button type="submit" href="#">Submit</button>
        </div>
      </form>
    </div>

			<!-- this is form end -->
		</div>

	</div>
</div>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>