<?php 
try
{
	$pdo=new PDO('mysql:host=localhost;dbname=year2project','root','');
}
catch (PDOException $e)
{
	echo "error connecting to database";

}
try
{
	$sql='DELETE FROM cab WHERE pickid=:id';
	$result=$pdo->prepare($sql);
	$result->bindvalue(':id',$_GET['did']);
	$result->execute();
}
catch (PDOException $e)
{
	echo"error deleting the Author";
}
echo '<script language="javascript">';
echo 'alert("Booking Successfully Cancelled")';
echo '</script>';
echo "<script> location.href='booking.php';</script>";
?>