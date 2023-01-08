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
$sql='INSERT INTO cab SET pickid=NULL,pick=:picke,time=:timer,jund=:dropee,point=:ppp';
$f=$pdo->prepare($sql);
$f->bindvalue(':picke',$_POST['pick']);
//bind value brings together two values , author is referred to as a container and authorname is the textbox name
$f->bindvalue(':timer',$_POST['time']);
$f->bindvalue(':dropee',$_POST['jund']);
$f->bindvalue(':ppp',$_POST['point']);


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
