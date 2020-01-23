 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection = mysql_connect("localhost", "root", "");
	$db = mysql_select_db("carparking", $connection);
	$phone=$_SESSION['phone'];
	$query = mysql_query("select * from zones where pl_booked='YES' AND phone='$phone'", $connection);
	$rows = mysql_num_rows($query);
	//echo $rows;
	$row=mysql_fetch_array($query);
	//if ($rows == 1) {
	mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("carparking") or die(mysql_error());
	$sql = "UPDATE zones SET pl_booked = 'NO' WHERE phone = '$phone'";
	mysql_query($sql);
	$sql = "UPDATE zones SET status = 'UNBOOKED' WHERE phone = '$phone'";
	mysql_query($sql);
	 header("Location: ../success_unbook.php");
	//}
		
}