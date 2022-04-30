<?php
$email=$_POST['email'];
$text1=$_POST["text1"];
// ..................
// data connection this way
$conn3=mysqli_connect("localhost","root","","student");
if($conn3)
{
$sql="INSERT INTO info(email,text1)VALUES('$email','$text1')";


$result=mysqli_query($conn3,$sql);

	if($result)
	{
		?>
		<script type="text/javascript">
		alert("Thanks for submit you data")
		window.open("welcome.php")
		window.close("connect.php")

		</script>
		<?php
	}
	else
	{

		?>
		<script type="text/javascript">
		alert("Something wrong")
		</script>
		<?php
		echo "the page error";
	}


}



?>