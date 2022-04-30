<?php
$email=$_POST['email'];
$name=$_POST["name"];
$password=$_POST["password"];
// ..................
// data connection this way
$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
	// there is check email is valid or not
	$e="SELECT * from student Where email='$email' ";
	$re=mysqli_query($conn,$e);
	$count=mysqli_num_rows($re);
	if ($count>0) {
		?>
		<script type="text/javascript">
			alert("Email already register !")
			window.close("connect.php")
		</script>
		<?php
	}
	// .......................................
else{
$sql="INSERT INTO student(email,name,password) VALUES('$email','$name','$password')";


$result=mysqli_query($conn,$sql);

	if($result)
	{
		?>
		<script type="text/javascript">
		alert("Successfully ID Created")
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

}

?>