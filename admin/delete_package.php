<?php // Create connection
   include("../includes/config.php");
    $conn = mysqli_connect(DBSERVER, DBUSER, DBPASSW, DBNAME);
    // Check connection
        if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
        }
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="DELETE from package WHERE package_id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("Location:view_package.php");
	}else{
		header("Location:view_package.php");
	}
}
?>