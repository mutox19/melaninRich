<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="styles/about.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
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




<!--Body section  -->
    <div id="body">

        <div id="aboutMel"><h2><img class="main_img"  src="images/about_melanin.png"  height="150px;" width="750px"></h2></div>

            <section class="sidebyside">
                <div class="one"><img class="leftsideimage" src="images/info_melanin.jpg" width="550" height="550" /></div>
                <div class="two" style="font-family: 'Great Vibes';">
                    <p>Melanin Rich has all the fundamentals that melanin hair needs. We have been establishing ourselfs as a top hair hairstylist company for more than 4 years.<br> Melanin Rich employees are positive, easy to work with and have hard working ethics, which has allowed Melanin Rich to become the company it is today. <br>
                    Most employees from Melanin Rich have earn credit hairstyle diploma's from viola hair salon. Some have even worked there and have made their names known to many different clients.<br>
                    Hairstyling is more than a job for employees at Melanin Rich. Its what Melanin Rich loves to do. Melanin Rich believes in constants growth and and knowledge in order to satisfy our clients. We like to make sure our clients leave 100% satisfied. </p>
                    <div id="middle">
                        <button onclick="location.href='gallery.php'" type="button" class="gallerybtn">View Gallery</button>
                        <button onclick="location.href='contact.php'" type="button">Contact Melanin</button>
                    </div>
                </div>
            </section>

            <div class="image123">
                <div class="imgContainer">
                    <img src="images/stacy_smiling.jpg" height="300" width="300"/>
                        <!--<p>This is image 1</p>-->
                </div>
                <div class="imgContainer">
                    <img class="middle-img" src="images/stacy_multipic.jpg"/ height="300" width="300"/>
                    <!--<p>This is image 2</p>-->
                </div>
                <div class="imgContainer">
                    <img src="images/stacy_shorthair.jpg"/ height="300" width="300"/>
                    <!--<p>This is image 3</p>-->
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