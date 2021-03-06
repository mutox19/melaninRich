<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Menu</title>
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="styles/service-menu.css" media="all">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  #footer
{
    height: 160px;
    color: white;
    
}

.footer {
    width: 100%;
    
    /*background: aqua;*/
    margin: auto;
}
.footerone {
    width: 20%;   
    background: grey;
    float: left;
    margin-left: 30%;
}
.footerone > h2{

  padding-bottom: 20px;
}
.footertwo {
   
     margin-right: 30%;
    background: grey;
}
.footertwo > h2{
  padding-bottom: 20px;
}

.socialicons > a
{
  text-decoration: none;
  color: white;
  padding-right: 10px;
}
</style>
</head>
<div id="container">
    




    <!--header section -->
    <div id="header">
            <nav class="navigation-bar">
        <img class="logo" src="images/Melanin_rich_trans.png"  height="100px;" width="150px">
        <ul>
            <li><a href="contact.php">Get in Touch</a></li>
            <li><a href="gallery.php">Gallery</a></li>
             <li><div class="dropdown">
                <button class="dropbtn">Services 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="service-menu.php">Service Menu</a>
                    <a href="#">Special Offers</a>
                </div>
            </div>
        </li>
            <li><a href="about.php">About</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>        
    </div>






    <!--body section -->
    <div id="body">
        <div id="service"><h2><img class="main_img"  src="images/service_menu.png"  height="150px;" width="750px"></h2></div>

        <div id="main-content" style="margin-bottom: 20px;">
            <div id="cuts">
            <h3>Cuts</h3>
            <p>Womans hair cuts - $20  this includes scalping and hair treatment<br></p>
            <p>mans hair cuts - $20  this includes scalping and hair treatment<br></p>
        </div>
        <div id="dye">
            <h3>Dye</h3>
        </div>
    </div>
</div>






    <!--footer section -->
      <div id="footer">
    
    <section class="footer">
        <div class="footerone">
          <h2 style="color: black;">Contact</h2>
          <p><strong>Call or text</strong>
          <br>500-802-2222</p>
          <p><strong>Have Questions or Comments</strong></p>
          <p>stacy@hotmail.com</p>
        </div>

        <div class="footertwo">
          <h2 style="color: black;">Social Media</h2>
          <div class="socialicons">
            <a href="https://www.hotmail.com" class="fa fa-facebook" style="font-size:28px;"></a>
          <a href="https://www.hotmail.com" class="fa fa-instagram" style="font-size:28px;"></a>
          <a href="https://www.hotmail.com" class="fa fa-twitter" style="font-size:28px;"></a>
          </div>
          
        </div>
    </section>
    
  </div>
</div>
</html>