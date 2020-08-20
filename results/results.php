<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../assets/fonts/icons/css/all.css" rel="stylesheet">
        <link href="styles-r.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="top-bar">
                <p class="main-logo">Hotels</p>
                <div class="primary-menu">
                    <i class="fas fa-home"></i>
                    <a href="index.html" class="Home" target="_blank">
                        Home</a>
                    <div class="Profile">   
                    <i class="fas fa-user"></i></div><a href="" >Profile</a>
                </div>
                </div>
                
                <div class="clear"></div>
            </div>
        </header>
        <main class="perfect find hotel">
            <section class="Perfect-hotels">
                <div class="perfect-find">
                    <p class="findhotel-title">FIND THE PERFECT HOTEL</p>
                </div>
                <form method="POST" action="index.php">
                    <select class="guests-option">
                    <option value="Count of Guests" selected>Count of Guests</option>
                    <option value="1" >&emsp; &emsp; &emsp; 1</option>
                    <option value="2">&emsp; &emsp; &emsp; 2</option>
                    <option value="3">&emsp; &emsp; &emsp; 3</option>
                    
                    </select>   
                    <select class="RoomType">
                        <option value="Room Type" selected>Room Type</option>
                        <option value="Suite">Suite</option>
                        <option value="Deluxe Suite">Deluxe Suite</option>
                    </select>
                    <select class="City">
                        <option value="City" selected>City</option>
                        <option value="Thessaloniki">Thessaloniki</option>
                        <option value="Athens">Athens</option>
                    </select>
                    <div class="price">
                        <p>100€ &nbsp;&nbsp;</p>
                        <p>300€  &nbsp;&nbsp;</p>
                        <p>700€  &nbsp;&nbsp;</p>
                        <p>1000€</p>
                    </div>
                    <div class="price-bar">
                        <input type="range" min="0" max="50">
                    </div>
                    <div class="price-title">
                        <p>PRICE</p>
                    </div>
                    <div class="checkin">
                        <input placeholder="Check-in Date" class="textbox-n" type="text" onfocus="(this.type='date')"
                        onblur="(this.type='text')" />
                    </div>
                    <div class="checkout">
                    <input placeholder="Check-in Date" class="textbox-n" type="text" onfocus="(this.type='date')"
                        onblur="(this.type='text')" />
                    </div>
                    <div class="find-button">
                        <input type="button" class="find-hotel" value="FIND HOTEL">
                    </div>
                </form>
                
            </section>
            <section class="search-results">
            <div class="my-searches"><p>Search Results</p></div>
            <section class="room-1">
                <div class="img-left"></div>
                <div class="border-left-solid">
                <div class="room-infos">
                <p class="room-title">HILTON HOTEL</p>
                <p class="room-location">ATHENS, ZWGRAFOU</p>
                <p class="room-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <input type="button" class="goTO" value="Go to Room Page">
                </div>
            </div>

            </section>

            
            

                
           
            </section>
            


            
        </main>
        <footer>
            <p>© CollegeLink 2020</p>
        </footer>
    </body>


</html>