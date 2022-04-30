<?php
session_start();
// data login connection this way
$conn1=mysqli_connect("localhost","root","","student");
mysqli_select_db($conn1,"student");
$email=$_POST['email'];
$name=$_POST["name"];
$password=$_POST["password"];
$e="SELECT * from student Where email='$email'&& password='$password'";
$re=mysqli_query($conn1,$e);
$count=mysqli_num_rows($re);
if ($count>0){
	$_SESSION['email']=$email
		?>

		<script type="text/javascript">

			window.open("welcome.php")
			// $_SESSION['email']=$email1
			window.close("conn1.php")
		</script>
		<?php
		}
	// .......................................
else{
	?>
	<script type="text/javascript">
		alert("Invalid user name and password")
		window.close("index.php")
	</script>

<?php
}

?>