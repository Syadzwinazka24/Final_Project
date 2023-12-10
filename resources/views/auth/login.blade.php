<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/login.css">
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">

            <!-- depan -->
            <form action="{{ route('login') }}" method="post" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">
                <p class="social-text">fill in your correct data !</p>
                <!-- <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign in</a></p> -->
            </form>

            <!-- baliknya -->
            <form action="" method="post" class="sign-up-form">
                <h2 class="title">Announcement!!!</h2>
                <h3 class="announce">
                    To enter this dashboard page, only admins and uks officers can log in, while visitors to this website can only see the front page of the website, they cannot enter the dashboard, <br />Thank you.
                </h3>
            </form>

        </div>
        <div class="panels-container">

            <!-- halaman baliknya -->
            <div class="panel left-panel">
                <div class="content">
                    <h3>Hello Friends !!</h3>
                    <p>Thank you for your attention
                        for those concerned please re-login</p>
                    <button class="btn" id="sign-in-btn">Back</button>
                </div>
                <img src="img/dokter.png" alt="" class="image">
            </div>

            <!-- depan -->
            <div class="panel right-panel">
                <div class="content">
                    <h3>Want to log in? </h3>
                    <p>who want to enter the dashboard page, please click the button below to find out the information</p>
                    <button class="btn" id="sign-up-btn">Announcement !</button>
                </div>
                <img src="img/login.png" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>