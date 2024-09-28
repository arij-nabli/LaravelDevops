<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login| Wostin</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Wostin HTML Template for Business">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->

<link rel="stylesheet" href="{{ asset('Assets/Admin/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('Assets/Admin/plugins/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('Assets/Admin/css/feather.css') }}">
<link rel="stylesheet" href="{{ asset('Assets/Admin/css/style.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/custom-animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/jquery.magnific-popup.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/nouislider.pips.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/tiny-slider.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/timePicker.css">
    <link rel="stylesheet" href="css/wostin.css">
    <link rel="stylesheet" href="css/wostin-responsive.css">
    <link rel="shortcut icon" href="{{ asset('Assets/Admin/img/favicon.png') }}">

</head>
<body>
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header-three">
    <nav class="main-menu main-menu-three" style="background-color:#558e4c;">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-wrapper__logo">
            <a href="{{ url('/') }}"><img src="images/logo-2.png" alt="Logo"></a>
            </div>
            <div class="main-menu-three__main-menu">
                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                <ul class="main-menu__list">
                    <li class="dropdown">
                    <a href="{{ url('/') }}">Home</a>
                    </li>
                </ul>
            </div>
            <div class="main-menu-three__right">
                    <li>  <a href="{{ url('/register') }}" class="thp-btn"><img src="images/reg-icon.svg" class="me-1 " alt="icon"> Register</a></li>
                 <li class="main-menu-three__call-number">
                 <a href="{{ url('/login') }}" >
    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.52381 16.9033C1.10476 16.9033 0.746159 16.7542 0.448 16.4561C0.149333 16.1574 0 15.7986 0 15.3795V7.76046C0 7.34142 0.149333 6.98256 0.448 6.68389C0.746159 6.38573 1.10476 6.23665 1.52381 6.23665H2.28571V4.71284C2.28571 3.65888 2.65727 2.76034 3.40038 2.01723C4.14298 1.27462 5.04127 0.90332 6.09524 0.90332C7.14921 0.90332 8.04775 1.27462 8.79086 2.01723C9.53346 2.76034 9.90476 3.65888 9.90476 4.71284V6.23665H10.6667C11.0857 6.23665 11.4446 6.38573 11.7432 6.68389C12.0414 6.98256 12.1905 7.34142 12.1905 7.76046V15.3795C12.1905 15.7986 12.0414 16.1574 11.7432 16.4561C11.4446 16.7542 11.0857 16.9033 10.6667 16.9033H1.52381ZM1.52381 15.3795H10.6667V7.76046H1.52381V15.3795ZM6.09524 13.0938C6.51429 13.0938 6.87314 12.9447 7.17181 12.6466C7.46997 12.3479 7.61905 11.989 7.61905 11.57C7.61905 11.1509 7.46997 10.7921 7.17181 10.4934C6.87314 10.1953 6.51429 10.0462 6.09524 10.0462C5.67619 10.0462 5.31759 10.1953 5.01943 10.4934C4.72076 10.7921 4.57143 11.1509 4.57143 11.57C4.57143 11.989 4.72076 12.3479 5.01943 12.6466C5.31759 12.9447 5.67619 13.0938 6.09524 13.0938ZM3.80952 6.23665H8.38095V4.71284C8.38095 4.07792 8.15873 3.53824 7.71429 3.0938C7.26984 2.64935 6.73016 2.42713 6.09524 2.42713C5.46032 2.42713 4.92064 2.64935 4.47619 3.0938C4.03175 3.53824 3.80952 4.07792 3.80952 4.71284V6.23665ZM1.52381 15.3795V7.76046V15.3795Z" fill="white"/>
</svg>
        Login
    </a>
</li>
                    </div>
        </div>
    </nav>
</header>


        <!-- Main Content -->
        <main>
        <section class="services-two">
       
      
        @section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
        <img class="img-fluid logo-dark mb-2" src="{{ asset('images/loader.png') }}" alt="Logo" width="100"> <!-- Largeur réduite à 150px -->

            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Welcome Back</h1>
                        <p class="account-subtitle">Sign in to stay updated </p>
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group form-focus">
                                <input type="email" class="form-control floating" id="email" name="email">
                                <label class="focus-label">Email</label>
                                @error('email')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating" id="password" name="password">
                                <label class="focus-label">Password</label>
                                @error('password')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            </div>


                            <button class="thm-btn  btn-block btn-lg login-btn" type="submit">Login</button>
                            <div class="login-or">
                                <p>Or login with</p>
                            </div>
                            <div class="row form-row social-login">
    <div class="col-lg-4">
        <a href="#" class="fab fa-twitter" style="font-size: 40px; color: #1DA1F2;"></a>
        <a href="#" class="btn btn-twitter btn-block mb-1"> Twitter</a>
    </div>
    <div class="col-lg-4">
        <a href="#" class="fab fa-facebook-square" style="font-size: 40px; color: #3b5998;"></a>
        <a href="#" class="btn btn-facebook btn-block mb-1"> Facebook</a>
    </div>
    <div class="col-lg-4">
   
                <a href="#" class="fab fa-google" style="font-size: 40px; color: #DB4437;"></a>
                <a href="#" class="btn  btn-block mb-1"> Google</a>
          
    </div>
</div>
       
                          

                            <div class="row form-row login-foot">
                                <div class="col-lg-6 login-forgot">
                                    <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                                </div>
                                <div class="col-lg-6 dont-have ">New to Wostin? <a href="/register">Click
                                        here</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

        </main>

        <!-- Scroll to Top -->
        <a href="#" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</body>
    <!-- Scripts -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/tiny-slider.min.js"></script>
    <script src="js/wNumb.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/countdown.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/timePicker.js"></script>

    @yield('content')


<script src="{{ asset('Assets/Admin/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('Assets/Admin/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('Assets/Admin/js/feather.min.js') }}"></script>

<script src="{{ asset('Assets/Admin/js/script.js') }}"></script>
    <!-- Template JS -->
    <script src="js/wostin.js"></script>
</body>
</html>
