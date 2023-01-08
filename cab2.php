<?php
try
{
	$pdo=new PDO('mysql:host=localhost;dbname=year2project','root','');
}
catch (PDOException $e)
{
	echo "error connecting to database";

}
if (isset($_POST['Amend'])){
	try 
	{
$sql='UPDATE cab SET pick=:picke,time=:timer,jund=:dropee,point=:ppp  WHERE pickid=:id';
$info=$pdo->prepare($sql);
$info->bindvalue(':picke',$_POST['pick']);
$info->bindvalue(':timer',$_POST['time']);
$info->bindvalue(':dropee',$_POST['jund']);
$info->bindvalue(':ppp',$_POST['point']);
$info->bindvalue(':id',$_POST['pickid']);
$info->execute();
}
catch (PDOException)
{
	echo "error updating booking";
}
echo '<script language="javascript">';
echo 'alert("Booking successfully Changed")';
echo '</script>';
echo "<script> location.href='locations2.php';</script>";
}
?>