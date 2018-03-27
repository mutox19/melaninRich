<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Melanin</title>
    <link rel="stylesheet" type="text/css" href="styles/home_styles.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: grey;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div id="main-container">
	<nav class="navigation-bar">
		<img class="logo" src="images/Melanin_rich_trans.png"  height="100px;" width="150px">
		<ul>
			<li><a href="#">Get in Touch</a></li>
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






