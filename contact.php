<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eventive</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <h1 align="center"><a href="team\team.html" target=_blank>OUR EVENTIVE BOARD-MEMBERS <a></h1>
            <div class="col-md-6 contacts">
                    <h1><b><span><img src="images/my sketch.jpg" height="100px"></span>Ujjwal Chaudhary<b></h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: chaudharyujjwal111@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: https://www.facebook.com/ujjwal.chaudhary.54922<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: +977-9823423854 <br>
                    </p>
                </div>

                <div class="col-md-6 contacts">
                    <h1><b><span><img src="images/pig.JPG" height="100px"></span>Tisa Maharjan<b></h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: bebesatisa@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: https://www.facebook.com/tisa.maharjan.148<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: +977-9813269455 <br>
                    </p>
                </div>

                <div class="col-md-6 contacts">
                    <h1><b><span><img src="images/sikha.JPG" height="100px"></span>Sikha Jayswal<b></h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: sikhajaiswal2062@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: https://www.facebook.com/profile.php?id=100079338462114<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: +977-9810033077 <br>
                    </p>
                </div>
                
                <div class="col-md-6 contacts">
                    <h1><b><span><img src="images/Suyana.jpg" height="100px"></span>Suyana Joshi<b></h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: joshisuyana5@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: https://www.facebook.com/joshisuyana5<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: +977-9834545678 <br>
                    </p>
                </div>
                
                <div class="col-md-6">
                    <form align="center">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
