<?php
 

session_start();
 
/**
 * Include ircmaxell's password_compat library.
 */
require '../php/password_compat-master/lib/password.php';
 

require '../php/connect.php';
 
 

if(isset($_POST['register'])){
    
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    
    

    $sql = "SELECT COUNT(name) AS num FROM user WHERE name = :username";
    $stmt = $pdo->prepare($sql);
    
    
    $stmt->bindValue(':username', $username);
    
    
    $stmt->execute();
    
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
   
    if($row['num'] > 0){
        die('That username already exists!');
    }
    
    
    $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
    
    
    $sql = "INSERT INTO user (name,email,password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $passwordHash);
 
    
    $result = $stmt->execute();
   
    if($result){
        
        echo 'Thank you for registering with our website.';
    }
    
}
 
?>

 

<!DOCTYPE html>
    <html>
        <head>
            <meta name="UTF-8">
            <meta name="Register-Page" content="html/css/js">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link href="../assets/fonts/icons/css/all.css" rel="stylesheet"/>
            <link href="style.css" type="text/css" rel="stylesheet"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            

        </head>
        <body>
            <header>
                <div id="top-bar">
                    <p class="main-logo">Hotels</p>
                    <div class="primary-menu"><i class="fas fa-home"></i>
                        <a href="../index.html" target="_blank">
                            Home</a>
                    </div>
                </div>
            </header>
            <main class="main content register">
                <section class="hero">
                    <div class="img"></div>
                    <div class="signup-form">	
                        <form action="register-form.php" method="post" autocomplete="off">
                            <h2>Create Account</h2>
                            <p class="lead">It's free and only takes a minute.</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder=" Password" required="required">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                </div>
                            </div>         -->
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                            </div>
                            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                        </form>
                        <div class="text-center">Already have an account? <a href="../login/login.html">Login here</a>.</div>
                    </div>
                </section>
            </main>
            <footer>
                <p>© CollegeLink 2020</p>
            </footer>
        </body>
    </html>