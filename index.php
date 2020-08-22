<?php

    require 'php/connect.php';
    $sqlcity = 'SELECT DISTINCT city FROM room';
    $sqlRoomType = 'SELECT title FROM room_type';
    $sqlCheckInOut = 'SELECT check_in_date, check_out_date FROM booking';
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="UTF-8">
        <meta name="WDA-Hotel" content="HTML/CSS JAVASCRIPT">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/fonts/icons/css/all.css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        
    </head>
        <script>
                $( function() {
                $( "#datepicker" ).datepicker();
                     } );
                    
                    $( function() {
                $( "#datepicker2" ).datepicker();
                    } );
        </script>
                
    <body>
    
        <header>
            <div id="top-bar">
                <p class="main-logo">Hotels</p>
                <div class="primary-menu"><i class="fas fa-home"></i>
                    <a href="index.php" target="_blank">
                        Home</a>
                </div>
            </div>
        </header>
        <main class="main-content view_hotel page-home">
            <section class="hero">
                <form method="POST" action="results/results.php">
                <div id="book-form">     
                    <div class="city">
                        <select class="city-room">
                        <?php
                            foreach ($pdo->query($sqlcity) as $row){?>
                            
                        <option value="null" hidden selected>City</option>
                        <option><?php print $row['city']?></option>
                        <!-- <option name="city" value="Thessaloniki">Thessaloniki</option>
                        <option name="city" value="Athens">Athens</option>  -->
                        
                            <?php }?>
                        </select>   
                    </div>
                    <div class="RoomType">
                        <select class="city-room">
                            <option value="null" hidden selected>Room Type</option>
                            <?php 
                                foreach ($pdo->query($sqlRoomType) as $row2){?>
                            <option><?php print $row2 ['title']  ?></option>
                            <!-- <option value="Suite">Suite</option>
                            <option value="Deluxe Suite">Deluxe Suite</option> -->
                            <?php }?>
                        </select>
                    </div>
                    <div class="check-inout">
                        <input type="text" id="datepicker" size="12.9" placeholder="Check-in Date" readonly="readonly">
                        <input type="text" id="datepicker2" size="12.9" placeholder="Check-out Date"readonly="readonly">
                    </div>
                    <div class="Search-Button">
                        <input type="submit" value="Search" id="search-submit">
                    </div>
                </div>
                    
                </form>
            </section>
        </main>
        <footer>
            <p>© CollegeLink 2020</p>
        </footer>
        
    </body>
</html>