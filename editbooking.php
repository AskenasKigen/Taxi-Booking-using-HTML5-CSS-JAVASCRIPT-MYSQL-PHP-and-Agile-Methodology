<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehicle System</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
               <!--body content title-->
                </div>
            </div>
			<html>
    <h1 style="text-align:center;">Booking Information</h1>
    
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
$sql='SELECT * FROM cab WHERE pickid=:de';
$value=$pdo->prepare($sql);
$value->bindvalue(':de',$_GET['id']);
$value->execute();
}
catch (PDOException $e)
{
	echo "error querying the booking";
}
foreach($value as $row)
{
	?>

                <form action="cab2.php" method="POST" style="width:400px; margin-left:450px; border: solid; text-align:center; margin-bottom:10px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 
  padding: 10px;">	 <label style="text-align:center;">Pickup ID</label>
  					<input type="text" name="pickid" value="<?php echo $row['pickid'];?>"><br>
                    <label style="text-align:center;">Pickup Address</label>
                    <input type="text" name="pick" value="<?php echo $row['pick'];?>"><br>
                    <label style="text-align:center;">Pickup Time</label>
                    <input type="time" name="time" value="<?php echo $row['time'];?>"><br>
                    <label style="text-align:center;">Drop Off Address</label>
                    <input type="text" name="jund"value="<?php echo $row['jund'];?>"><br>
                    <label style="text-align:center;">Number Of Passengers</label>
                    <input type="number" name="point" step="1" value="<?php echo $row['point'];?>"><br>
                    <input type="submit" name="Amend" value="Amend" style="margin:4px; margin-left:40px">
                </form>
	

</div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
<?php 

}
?>
