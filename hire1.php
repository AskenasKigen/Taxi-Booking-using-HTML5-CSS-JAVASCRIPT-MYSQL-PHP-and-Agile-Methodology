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
$sql='INSERT INTO rent SET hireid=NULL,name=:nn,car=:cc,hire=:hh';
$f=$pdo->prepare($sql);
$f->bindvalue(':nn',$_POST['name']);
//bind value brings together two values , author is referred to as a container and authorname is the textbox name
$f->bindvalue(':cc',$_POST['car']);
$f->bindvalue(':hh',$_POST['hire']);


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
