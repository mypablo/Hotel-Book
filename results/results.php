<?php

        // require '../php/connect.php';
        // require '../php/Room-Search.php';

        
        // use roomSearch\Room;
        // $room = new Room;

        // $city = $_GET['city'];
        // $typeId = $_GET['roomtype'];
        // $checkInDate = $_GET['checkIn'];
        // $checkOutDate = $_GET['checkOut'];

        // $allAvailableRooms = $room->search(new Datetime($checkInDate), new DateTime($checkOutDate),$city, $typeId);

        

        
        
       
        
        
    
    
    
    

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'links.html'?>
        <link href="../assets/fonts/icons/css/all.css" rel="stylesheet">
        <link href="styles-r.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <!--DATEPICKER CALENDAR JS -->
    <script>
             $( function() {
             $( "#datepicker" ).datepicker();
                 } );
                              $( function() {
           $( "#datepicker2" ).datepicker();
                } );
    </script>

    <!-- MIN PRICE MAX PRICE BAR JS -->
    <script>
    $( function() {
        $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 5000,
        values: [ 0, 5000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ] );
        }
        });
        $( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) +
        " - €" + $( "#slider-range" ).slider( "values", 1 ) );
        } );
    </script>
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
                        <div>
                            <p>
                            
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                        
                            <div id="slider-range"></div>
                            <label for="amount">PRICE MIN  PRICE MAX </label>
                        </div>     
                            <div class="checkin">
                            <input placeholder="Check-in Date" id="datepicker" class="textbox-n" type="text" readonly="readyonly"/>
                            </div>
                        
                    <div class="checkout">
                    <input placeholder="Check-in Date" id="datepicker2" class="textbox-n" type="text" readonly="readonly" />
                    </div>
                    <div class="find-button">
                        <input type="button"  class="find-hotel" value="FIND HOTEL">
                    </div>
                </form>
                
            </section>
            <section class="search-results">
            <div class="my-searches"><p>Search Results</p></div>
            <!-- <section class="room-1">
                <div class="img-left" src="../assets/images/room-1.jpg"></div>
                <div class="border-left-solid">
                <div class="room-infos"></div>
                <p class="room-title">HILTON HOTEL</p>
                <p class="room-location">
                
                </p>
                <p class="room-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <input type="button" class="goTO" value="Go to Room Page">
                </div>
                
                  
            

            </section> -->

            
            <?php
                    if (isset($_POST['city'])) {
                        // SEARCH FOR USERS
                        require "../php/search.php";

                        // DISPLAY RESULTS
                        if (count($results) > 0) {
                            foreach ($results as $r) {
                            echo '<section class="room-1">
                                <div class="img-left" ><img src="../assets/images/'.$r['photo_url'].'"width="150" height="150 ></div>
                                <div class="border-left-solid">
                                <div class="room-infos">
                                <p class="room-title">'.$r['name'].'</p>
                             <p class="room-location">'.$r['city'] .'</p>
                             <p class="room-description">'.$r['description_short'].'</p>
                         <input type="button" class="goTO" value="Go to Room Page">
                         </div>
                           
                     </div>
         
                     </section>'  ;
                            // printf("<p class="room-location">[%s] </p>," $r['city']);
                            }
                        } else {
                            echo "No results found";
                        }
                    }
    ?>

                
           
            </section>
            

          
         
            
        </main>
        <footer>
            <p>© CollegeLink 2020</p>
        </footer>
    </body>


</html>