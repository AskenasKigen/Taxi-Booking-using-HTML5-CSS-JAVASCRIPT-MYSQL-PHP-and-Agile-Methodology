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
                    <h1 style="text-align: center;">Meet & Greet at Airports</h1><!--body content title-->
                </div>
            </div>
               <form action="meeto.php" method="POST" style="width:400px; margin-left:450px; border: solid; text-align:center; margin-bottom:10px;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
 
  padding: 10px;">
                    <label>Airport Name</label>
                    <input type="text" name="air"><br>
                    <label>Airport Gate</label>
                    <input type="text" name="gate"><br>
                    <label>Pickup Date</label>
                    <input type="Date" name="doa"><br>
                    <label>Pickup Time</label>
                    <input type="Time" name="time" style="width:100px;"><br>
                    <input type="submit" name="book" value="Book" style="margin:4px; margin-left:40px">
                </form>





            <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
