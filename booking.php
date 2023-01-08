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
    <table border="1" style="width:400px; margin-left:450px; border: solid; text-align:center; margin-bottom:10px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 
  padding: 10px;">
        <tr><th>PickUp ID</th><th>Pickup Address</th><th>Pickup Time</th><th>Drop off Address</th><th>Number of Passengers</th></tr>
    
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
    $sql='SELECT * FROM cab';
    $queryresult=$pdo->query($sql);
}
catch(PDOException $e)
{
    echo "error querying data from the table";
}
foreach($queryresult as $row) 
{
?>
<tr><td><?php echo $row['pickid'] ?></td>
<td><?php echo $row['pick']?></td>
<td><?php echo $row['time']?></td>
<td><?php echo $row['jund']?></td>
<td><?php echo $row['point']?></td>
<td><button><a href="deletebooking.php?did=<?php echo $row['pickid']?>">Cancel</a></button></td>
<td><button><a href="editbooking.php?id=<?php echo $row['pickid']?>">Amend</a></button></td></tr>
<?php }?>
</table>


        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
