<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="main-content1">

        <div class="splash-container1">
            <div class="page-logo"><a href="/"><img class="logo-img" src="../assets/images/FarEastCafe.png" alt="logo"></a></div>
        </div>

        <div class="splash-container2">
            <div class="card1">
            <div class="card-body">
                <div class="form-group"></div>
                <div><a href="/"></a><span class="splash-header">Login</span></div>
                <div><span class="splash-description">Doesn't have an account? <a href="/signup" class="a-underline">Sign up</a></span></div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control form-control-lg" name="email" id="Email" type="text" placeholder="example123@gmail.com" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Must be 8+ characters">
                    </div>
                    <div class="form-group1">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                        <label class="custom-control">
                            <a href="forgot-password.html" class="a-underline"><span>Forgot Password</span></a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-radius">Login</button>
                </form>
                <div class="form-group2">
                    <div class="splash-description mb text-center">or login with</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
