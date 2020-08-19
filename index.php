<?php

    require 'php/connect.php';
    $sql = 'SELECT DISTINCT city FROM room';
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="UTF-8">
        <meta name="WDA-Hotel" content="HTML/CSS JAVASCRIPT">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/fonts/icons/css/all.css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet"/>
    </head>
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
                <form method="GET" action="index.php">
                <div id="book-form">     
                    <div class="city">
                        <select class="city-room">
                        <?php
                            foreach ($pdo->query($sql) as $row){?>
                            
                        <option value="null" hidden selected>City</option>
                        <option><?php print $row['city']?></option>
                        <!-- <option name="city" value="Thessaloniki">Thessaloniki</option>
                        <option name="city" value="Athens">Athens</option>  -->
                        
                            <?php }?>
                        </select>   
                    </div>
                    <div class="RoomType">
                        <select class="city-room">
                            <option value="null" selected>Room Type</option>
                            <option value="Suite">Suite</option>
                            <option value="Deluxe Suite">Deluxe Suite</option>
                        </select>
                    </div>
                    <div class="check-inout">
                        <input type="text" id="checkin" size="12.9" placeholder="Check-in Date">
                        <input type="text" id="checkout" size="12.9" placeholder="Check-out Date">
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