<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="server.php" class="register-form" id="register-form">
                            <input type="hidden" name="action" value="register">
                            <div class="form-group">
                            <?php 
                           if (isset($_SESSION['name_error'])) {
                               print($_SESSION['name_error']);
                               unset($_SESSION['name_error']);

                           }

                             ?>
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value='<?php if(isset($_SESSION['name_value'])){print($_SESSION['name_value']);} ?>' name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <input type="hidden" name="action" value="register">
                            <div class="form-group">
                                 <?php 
                           if (isset($_SESSION['email_error'])) {
                               print($_SESSION['email_error']);
                               unset($_SESSION['email_error']);

                           }else if(isset($_SESSION["email_error2"])){
                                    print($_SESSION["email_error2"]);
                                    unset($_SESSION["email_error2"]);
                           }else if(isset($_SESSION["email_error3"])){
                                    print($_SESSION["email_error3"]);
                                    unset($_SESSION["email_error3"]);
                           }

                             ?>
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text"  value='<?php if(isset($_SESSION['email_value'])){print($_SESSION['email_value']);} ?>' name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                 <?php 
                           if (isset($_SESSION['pass_error'])) {
                               print($_SESSION['pass_error']);
                               unset($_SESSION['pass_error']);

                           } else if (isset($_SESSION['pass_error1'])) {
                               print($_SESSION['pass_error1']);
                               unset($_SESSION['pass_error1']);

                           } 

                             ?>
                            <input type="hidden" name="action" value="register">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <input type="hidden" name="action" value="register">          
                            <div class="form-group">
                                  <?php 
                           if (isset($_SESSION['re_pass_error'])) {
                               print($_SESSION['re_pass_error']);
                               unset($_SESSION['re_pass_error']);

                           }

                           if(isset($_SESSION["re_pass_error2"])){
                              print($_SESSION["re_pass_error2"]);
                              unset($_SESSION["re_pass_error2"]);
                             }

                             ?>
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="image/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php 
session_destroy();
 ?>