<!doctype html>
<html lang="en">

<head>

    @include('Layout.head')

    <style>
    html,
    body {
        height: 100%;
    }

    body {
        background-color: #faf7f0;
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
            <div class="card-body1">
                <div class="form-group"></div>
                <div><span class="splash-header1">Login</span></div>
                <div><span class="splash-description1">Doesn't have an account? <a href="/signup" class="a-underline">Sign up</a></span></div>
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control form-control-lg" name="email" id="email" type="text" placeholder="Email" autocomplete="off" :value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group1">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                        <label class="custom-control">
                            <a href="forgot-password.html" class="a-underline"><span>Forgot Password</span></a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary1 btn-lg btn-block btn-radius">Login</button>
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
