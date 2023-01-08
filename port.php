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
                    <h2 style="text-align: center; margin-bottom:50px;">Airport and Hotel Transfers</h2><!--body content title-->
                </div>
            </div>
                <form action="porto.php" method="POST" style="width:400px; margin-left:450px; border: solid; text-align:center; margin-bottom:10px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 
  padding: 10px;">
                    <label>Enter Hotel</label>
                    <input type="text" name="hotel"><br>
                    <label>Enter Airport of Arrival</label>
                    <input type="text" name="airport"><br>
                    <label>Date Of Arrival</label>
                    <input type="Date" name="doa"><br>
                    <label>Time Of Arrival</label>
                    <input type="Time" name="time" style="width:100px;"><br>
                    <input type="submit" name="book" value="Book" style="margin:4px; margin-left:40px">
                </form>



            <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
