<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 

    <title>Matrix of Fate - Main</title>
         <!-- CSS -->
    <link rel="stylesheet" href="/media/airdatepicker/air-datepicker.css">
    <link href="media/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="media/css/jquery-ui.min.css">
    <link rel="stylesheet" href="media/css/main.css">
    <link rel="stylesheet" href="media/css/all.min.css">

    <!-- JS -->
    <script src="media/airdatepicker/air-datepicker.js"></script>
        <script src="media/js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="media/js/bootstrap.min.js"></script>
    <script src="media/js/jquery-ui.min.js"></script>
    <script src="media/js/all.min.js"></script>

    <!-- CALENDAR -->

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header class="header-matrix">
        <div class="matrix-left"></div>
        <div class="matrix-mobile"></div>
        <div class="container">
            <div class="navbar-mx fixed-top mx-nav">
                <div class="container">
            @if(Session::get('user_name'))
            <style>
                .mx-nav{
                   height: 95px
                }
                .header-matrix-profile.border-bottom{
                        padding:0;
                    }
            </style>
            <div class="header-matrix-profile border-bottom">
        <div class="container">
            <div class="navbar-mx fixed-top">
                <div class="container">
                    <nav class="d-flex flex-wrap justify-content-center py-4">
                        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                          <div class="logotype"></div>
                        </a>

                        <ul class="nav nav-pills nav-flex">
                            <li class="nav-item">
                                <div class="btn-group">
                                    <button type="button" class="profile-button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-icon"></div> Profile
                                    </button>

                                    <button class="profile-button-mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><div class="user-icon"></div> Profile</button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="container-profile">
                                                <div class="firstname-profile">
                                                    {{Session::get('user_name')}}
                                                </div>
    
                                                <div class="firstname-email">
                                                    {{Session::get('user_email')}}
                                                </div>
                                            
                                            </div>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item mb-2" href="{{route('dashboard')}}">My Profile</a></li>
                                        <li><a class="dropdown-item mb-2" href="/">Calculate Matrix</a></li>
                                        <li><a class="dropdown-item mb-2" href="{{route('history')}}">History</a></li>
                                        <li><a class="dropdown-item color-red" href="{{route('logoutuser')}}">Log Out</a></li>
                                    </ul>

                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                        <div class="offcanvas-header">
                                            <a href="/" class="logotype-nav"></a>
                                            <button type="button" class="btn-close-mx" data-bs-dismiss="offcanvas" aria-label="Close"><div class="close-icon"></div></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div class="content-profile">
                                                <div class="avatar"></div>
                                                <div class="info-profile-nav">
                                                    <div class="name-nav"></div>
                                                    <div class="email-nav"></div>
                                                </div>
                                            </div>
                                            <div class="line-profile"></div>

                                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('dashboard')}}">My Profile</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="/">Calculate Matrix</a></a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('history')}}">History</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link color-red" href="{{route('logoutuser')}}">Log Out</a>
                                                </li>
                                            </ul>

                                            <div class="footer-nav-mobile">
                                                For all questions, contact us by email</br>
                                                info@matrixfate.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>    
    </div>
    @else

    <nav class="d-flex flex-wrap justify-content-center py-4">
                        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                          <div class="logotype"></div>
                        </a>
                  
                        <ul class="nav nav-pills nav-flex">
                          <li class="nav-item"><a href="{{route('signup')}}" class="signin">Sign In</a></li>
                          <li class="nav-item"><a href="{{route('signup')}}" class="signup">Sign Up</a></li>
                        </ul>
                    </nav>
            @endif

                </div>
            </div>

    <div id="red-to-form" class="matrix-main">
                <div class="matrix-content">
                    <div class="matrix-text">
                        <div class="star-header"></div>
                        <div class="matrix-title">Matrix <span style="font-style: oblique;">of</span> Fate</div>
                        <div class="matrix-desc">
                            Find out your destiny, strength side, talents & predispositions and start changing your life for the better!
                        </div>
                    </div>
    
                    <form action="{{route('calculate_matrix')}}" class="main-form">
                        <div class="mb-3 control-relative">
                            <input name="name" autocomplete="off" type="text" class="form-control form-transparent" placeholder=" " autocomplete="off">
                            <label class="form-placeholder">Name</label>
                        </div>
    
                        <div class="mb-3 control-relative">
                            <input  name="email" type="email" class="form-control form-transparent" placeholder=" " autocomplete="off">
                            <label class="form-placeholder">Email</label>
                        </div>
    
                        <div class="mb-3 control-relative">
                            <input name="data" autocomplete="off" id="dateinput" class="form-control form-transparent" placeholder=" " autocomplete="off" readonly>
                            <label class="form-placeholder">Date of Birth</label>
                        </div>

                        <div class="mb-3">
                            <button class="matrix-button">Calculate Matrix</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="matrix-right"></div>    
    </header>

    <div class="content-web mx-main-body">
        <!-- SECTIONS-->
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-mobile-image">
                            <div class="image-about"></div>
                        </div>

                        <div class="title-section">
                            About the method -</br>
                            <span style="font-style: normal;">Matrix of Fate</span>
                        </div>

                        <div class="desc-section">
                            Matrix of Fate it is a system of self-knowledge based on the combination of numerology, astrology and tarot.</br>
                            </br>
                            By studying your Matrix of Fate, you will be able to understand with what potential, qualities and abilities you came to Earth and what tasks need to be implemented.
                            And also, understand your current situation and determine the path for further development. After analyzing this information, it will be much easier for you to move through life.
                        </div>
                    </div>

                    <div class="col-md-6 display-mobile">
                        <div class="content-image-right">
                            <div class="image-about"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="questions">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-image-left content-mobile2-image">
                            <div class="image-questions"></div>
                        </div>
                    </div>

                    <div class="col-md-6 mobile-background">
                        <div class="title-section mobile-title-section">
                            <span style="font-style: normal;">Find Answers</span></br>
                            to Your Questions
                        </div>

                        <div class="list-section">
                            <div class="questions-content">
                                <div class="questions-star"></div>
                                <div class="questions-text">
                                    <div class="questions-label">Destination</div>
                                    <div class="questions-desc">
                                        Find your purpose, understand your uniqueness and individuality.
                                    </div>
                                </div>
                            </div>

                            <div class="questions-content">
                                <div class="questions-star"></div>
                                <div class="questions-text">
                                    <div class="questions-label">Talents</div>
                                    <div class="questions-desc">
                                        Reveal your hidden talents, understand what you are predisposed to and where to start searching for yourself.
                                    </div>
                                </div>
                            </div>

                            <div class="questions-content">
                                <div class="questions-star"></div>
                                <div class="questions-text">
                                    <div class="questions-label">Finance</div>
                                    <div class="questions-desc">
                                        Learn the areas of self-realization, how to achieve professional and financial success.
                                    </div>
                                </div>
                            </div>

                            <div class="questions-content">
                                <div class="questions-star"></div>
                                <div class="questions-text">
                                    <div class="questions-label">Character</div>
                                    <div class="questions-desc">
                                        Get to know yourself better, your strengths and weaknesses, understand how others see you and how you interact with the world.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 button-width">
                                <a href="#red-to-form" style="text-decoration:none" class="matrix-button">Calculate Matrix</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer-matrix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/" class="logotype-footer"></a>
                    <div class="copyright">
                        © 2022. Matrix of Fate.
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="payments-footer">
                        <div class="contact-info">
                            For all questions, contact us by email</br>
                            info@matrixfate.com
                        </div>
    
                        <div class="payment-info">
                            <div class="accept-text">
                                We accept for payment:
                            </div>
    
                            <div class="accept-list">
                                <div class="payment-logo-visa"></div>
                                <div class="payment-logo-mastercard"></div>
                                <div class="payment-logo-paypal"></div>
                                <div class="payment-logo-americanexpress"></div>
                                <div class="payment-logo-discover"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-mobile">
                © 2022. Matrix of Fate.
            </div>
        </div>
    </footer>
              <script>
        new AirDatepicker('#dateinput', {
            isMobile: true,
        });
    </script>
    <script src="media/js/main.js"></script>
</body>
</html>
