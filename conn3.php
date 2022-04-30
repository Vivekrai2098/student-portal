<?php
$email2=$_POST['email'];
$m="admin@gmail.com";
$password2=$_POST['password'];
session_start();
// data login connection this way
$conn1=mysqli_connect("localhost","root","","student");
mysqli_select_db($conn1,"student");

$e="SELECT * from student Where email='$email2'&& password='$password2'";
// $e1="SELECT * from student Where email='$email2'";
// $re2=mysqli_query($conn1,$e1);
$re=mysqli_query($conn1,$e);
$count=mysqli_num_rows($re);
if ($m==$email2){
	

if ($count>0){
	$_SESSION['email']=$email
		?>

		<script type="text/javascript">

			window.open("final.php")
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
}
else{
	?>
	<script type="text/javascript">
		alert("not admin")
		window.open("login.php")
		window.close("conn3.php")
	</script>
	<?php
}
?>