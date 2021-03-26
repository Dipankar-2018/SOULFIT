<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | SoulFit</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="images/form-img.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <button class="btn btn-secondary" onclick="location.href = '../index.html';"> <i class="far fa-arrow-alt-circle-left"></i> Back</button>
                    <form action="../admin/backend/login.php" id="booking-form" method="POST">
                        <h2>Login</h2>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" required/>
                            <label for="email" class="form-label">Email</label>
                        </div>                 
                        <div class="form-group form-input">
                            <input type="password" name="password" id="pass" required />
                            <label for="pass" class="form-label">Password</label>
                        </div>
                             
                        <div class="form-submit">
                            <input type="submit" value="Login" class="submit" id="submit" name="submit" />
                            <a href="signup.php" class="vertify-booking">Don't have an account?</a>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>