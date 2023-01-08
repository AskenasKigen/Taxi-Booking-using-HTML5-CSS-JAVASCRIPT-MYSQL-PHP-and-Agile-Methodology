<?php
try
{
$pdo=new PDO('mysql:host=localhost;dbname=year2project','root','');
//the above code connects php to my sql database
}
catch(PDOException $e)
//returns the message in echo if php fails to connect to the sql database
{
echo "error in connecting to the database";
exit;
}
if(isset($_POST['book']))
	//acknowledges whether the button has been clicked or not 
{
try
{
$sql='INSERT INTO airport SET hotelid=NULL,hotel=:hotelname,airport=:port,doa=:d,time=:ti';
$f=$pdo->prepare($sql);
$f->bindvalue(':hotelname',$_POST['hotel']);
//bind value brings together two values , author is referred to as a container and authorname is the textbox name
$f->bindvalue(':port',$_POST['airport']);
$f->bindvalue(':d',$_POST['doa']);
$f->bindvalue(':ti',$_POST['time']);

$f->execute();
}
catch (PDOException $e)
{
	echo "Details Not Saved,Try Again";

}
echo '<script language="javascript">';
echo 'alert("Successfully Booked")';
echo '</script>';
echo "<script> location.href='events2.php';</script>";
}
?>
