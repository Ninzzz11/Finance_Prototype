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
    <!-- Sign up page  -->
    <!-- ============================================================== -->
    <div class="main-content1">

        <div class="splash-container1">
            <div class="page-logo"><a href="/"><img class="logo-img" src="../assets/images/FarEastCafe.png" alt="logo"></a></div>
        </div>

        <div class="splash-container2">
            <div class="card1">
            <div class="card-body1">
                <div class="form-group"></div>
                <div><span class="splash-header1">Create an account</span></div>
                <div><span class="splash-description1">Already have an account? <a href="/" class="a-underline">Login</a></span></div>
                <form method="POST" action="/register">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Username" autocomplete="off" :value="old('usename')">
                        @error('username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control form-control-lg" name="email" id="email" type="text" placeholder="example123@gmail.com" autocomplete="off" :value="old('email')">
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
                    <button type="submit" class="btn btn-primary1 btn-lg btn-block btn-radius">Sign up</button>
                </form>
                <div class="form-group2">
                    <div class="splash-description mb text-center">or sign up with</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end sign up page  -->
    <!-- ============================================================== -->
</body>

</html>
