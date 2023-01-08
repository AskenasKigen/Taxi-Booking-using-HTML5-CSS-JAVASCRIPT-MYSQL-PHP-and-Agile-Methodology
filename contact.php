<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PrivateHireCars</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Enquirys</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span>PrivateHireCars</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: @PrivateHireCarsServices.com<br>
                                                <span class="glyphicon glyphicon-phone"></span> Mobile: 08712345678
                    </p>
                </div>
                <div class="col-md-6">
                    <form action="en.php" method="post">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea name="comment" rows="10" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="send" value="Send Message" ><span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
