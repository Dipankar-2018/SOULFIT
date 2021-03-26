<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | SoulFit</title>

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
                    <form id="booking-form" action="../admin/backend/signup.php" method="POST">
                        <h2>Registration Form</h2>
                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required/>
                            <label for="name" class="form-label">Your name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="email" name="email" id="email" value="" required />
                            <label for="email" class="form-label">Your Email</label>
                        </div>
                        <div class="form-group form-input">
                          
                                <select name="gender" required style="background:#111111">
                                    <option value="">Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            
                        <div class="form-group form-input">
                            <input type="password" name="password" id="password" value="" required />
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="password" name="cpassword" id="cpassword" value="" required />
                            <label for="cpassword" class="form-label">Confirm Password</label>
                        </div>              
                        <div class="form-submit">
                            <input type="submit" value="Register Now" class="submit" id="submit" name="submit" />
                            <a href="login.php" class="vertify-booking">Already have an account?</a>                          
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