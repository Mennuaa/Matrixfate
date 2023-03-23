<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 

    <title>Matrix of Fate - Main</title>
    
    <!-- CSS -->
    <link href="media/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="media/css/jquery-ui.min.css">
    <link rel="stylesheet" href="media/css/main.css">
    <link rel="stylesheet" href="media/css/all.min.css">

    <!-- JS -->
    <script src="media/js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="media/js/bootstrap.min.js"></script>
    <script src="media/js/jquery-ui.min.js"></script>
    <script src="media/js/all.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    
    .nav-link{
        
    color:white;
    }
</style>
<body class="mx-payment-body">
    <!-- HEADER -->
    <header class="header-matrix-profile border-bottom">
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
                                                    {{$user->name}}
                                                </div>
    
                                                <div class="firstname-email">
                                                     {{$user->email}}
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
                                                    <div class="name-nav">{{$user->name}}</div>
                                                    <div class="email-nav">{{$user->email}}</div>
                                                </div>
                                            </div>
                                            <div class="line-profile"></div>

                                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('dashboard')}}">My Profile</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="/">Calculate Matrix</a>
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
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3 display-mobile">
                <div class="d-flex align-items-start nav-profile">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" href="{{route('dashboard')}}">My profile</a>
                      <a class="nav-link" href="/" >Calculate Matrix</a>
                      <a class="nav-link" href="{{route('history')}}">History</a>
                      <a href="{{route('logoutuser')}}" class="nav-link color-red" type="button">Log Out</a>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="tab-content">
                    <div class="content-mx">
                        <form action="/xte-profile/{{$user->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        {{ method_field('PUT') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            @if(session('profileChangeSuccess'))
                            <div class="alert alert-success mt-2" role="alert">
                                      {{  session()->pull('profileChangeSuccess')}}
                                    </div>
                                    <script>
                                    let error = document.querySelector('.alert-danger');
                                    setTimeout(() => {
                                        error.style.display = 'none';
                                    }, 3000);

                                </script>
                            @endif

                            @if(session('notCorrectRePass'))

                            <div class="alert alert-danger mt-2" role="alert">
                                      {{  session()->pull('notCorrectRePass')}}
                                    </div>
                                    <script>
                                    let error = document.querySelector('.alert-danger');
                                    setTimeout(() => {
                                        error.style.display = 'none';
                                    }, 3000);

                                </script>
                            @endif
                            <div class="headline-profile">My Profile</div>

                            <div class="mb-3 control-relative">
                                <input type="text" name="name" value= "{{ $user_name }}" class="form-control form-transparent" placeholder=" ">
                                <label class="form-placeholder">Name</label>
                            </div>

                            <div class="mb-3 control-relative">
                                <input type="text" name="email" value="{{ $user_email }}" class="form-control form-transparent" placeholder=" ">
                                <label class="form-placeholder">email</label>
                            </div>
                            @if(session('emailExist'))

                            <div class="alert alert-danger mt-2" role="alert">
                                      {{  session()->pull('emailExist')}}
                                    </div>
                                    <script>
                                    let error = document.querySelector('.alert-danger');
                                    setTimeout(() => {
                                        error.style.display = 'none';
                                    }, 3000);

                                </script>
                            @endif
                            <div class="mb-3 control-relative">
                                <input type="password" name="password" class="form-control form-transparent" placeholder=" ">
                                <label class="form-placeholder">Password</label>
                            </div>

                            <div class="mb-3 control-relative">
                                <input type="password" name="re_password" class="form-control form-transparent" placeholder=" ">
                                <label class="form-placeholder">confirm new password</label>
                            </div>

                            <div class="mb-3 position-down">
                                <button type="submit" class="click-save">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>c
            </div>
        </div>
    </div>

    <script src="media/js/main.js"></script>
</body>
</html>