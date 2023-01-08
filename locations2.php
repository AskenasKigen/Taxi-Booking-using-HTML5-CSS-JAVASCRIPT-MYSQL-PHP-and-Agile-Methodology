<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gallery</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="text-align: center;margin-bottom:10px;">Mini Cab Booking </h1><!--body content title-->
                </div>
            </div>
			
                <form action="cab.php" method="POST" style="width:400px; margin-left:450px; border: solid; text-align:center; margin-bottom:10px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 
  padding: 10px;">
                    <label style="text-align:center;">Pickup Address</label>
                    <input type="text" name="pick"><br>
                    <label style="text-align:center;">Pickup Time</label>
                    <input type="time" name="time"><br>
                    <label style="text-align:center;">Drop Off Address</label>
                    <input type="text" name="jund"><br>
                    <label style="text-align:center;">Number Of Passengers</label>
                    <input type="number" name="point" step="1"><br>
                    <input type="submit" name="book" value="Book" style="margin:4px; margin-left:40px">
                </form>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
