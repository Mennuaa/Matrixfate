<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"> 
    <title>Matrix of Fate - Main</title>
    
    <!-- CSS -->
    <link href="/media/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/media/css/main.css">
    <link rel="stylesheet" href="/media/css/all.min.css">

    <!-- JS -->
    <script src="/media/js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="/media/js/bootstrap.min.js"></script>
    <script src="/media/js/all.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="mx-auth-body">
    <div class="row">
        <div class="col-md-6 display-mobile">
            <div class="auth-left">
                <div class="matrix-full"></div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="logotype-mobile">
                <a href="/" class="logotype adapt-auth"></a>
            </div>
            
            <div class="auth-form">
                <div class="auth-form-width">
                    <div class="title-auth">
                        Welcome to</br>
                        <span style="font-style: normal;">Matrix</span> of <span style="font-style: normal;">Fate!</span>
                    </div>
                    
                    <div class="auth-switcher">
                        <ul class="nav nav-pills nav-justified mb-3 mx-nav-auth" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a @if(session('emailExist')) class="nav-link " @endif class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" @if(session('emailExist'))  aria-selected="false" tabindex="-1" @endif aria-selected="false" >Sign In</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a  @if(session('emailExist')) class="nav-link active" @endif class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" @if(session('emailExist')) aria-selected="true" @endif aria-selected="true" >Sign Up</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div  @if(session('emailExist'))  class="tab-pane fade" @endif  class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <form action="{{ route('login.func') }}" method="post">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="mb-3 control-relative">
                                    <input type="email" name="email" class="form-control form-transparent" placeholder=" ">
                                    @if(session('notCorrectEmail'))

                                    <div class="alert alert-danger mt-2" role="alert">
                                      {{  session()->pull('notCorrectEmail')}}
                                    </div>
                                    <script>
                                    let error = document.querySelector('.alert-danger');
                                    setTimeout(() => {
                                        error.style.display = 'none';
                                    }, 5000);

                                   </script>
                                    @endif
                                    <label class="form-placeholder">Email</label>
                                </div>
    
                                <div class="mb-3 control-relative">
                                    <input type="password" name="password" class="form-control form-transparent" placeholder=" ">
                                    @if(session('notCorrectPass'))

                                        <div class="alert alert-danger mt-2" role="alert">
                                        {{  session()->pull('notCorrectPass')}}
                                        </div>
                                        <script>
                                        let error = document.querySelector('.alert-danger');
                                        setTimeout(() => {
                                            error.style.display = 'none';
                                        }, 5000);

                                        </script>
                                     @endif
                                    <label class="form-placeholder">Password</label>
                                </div>
                                <div class="mb-3">
                                    <button style="border:none;" type="submit" class="button-standart button-standart-width">Sign In</button>
                                </div>
    
                                <div class="line-auth"><span>or</span></div>
    
                                <div class="buttons-group">
                                    <a href="/auth/google/redirect" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-google"></i></div> <div class="text-auth">Sign In with Google</div></a>
                                    <a href="/siwa-login" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-apple"></i></div><div class="text-auth">Sign In with Apple</div></a>
                                    <a href="/auth/facebook/redirect" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-facebook-f"></i></div> <div class="text-auth">Sign In with Facebook</div></a>
                                </div>
                            </form>
                        </div>
    
                        <div @if(session('emailExist'))  class="tab-pane fade active show" @endif class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <form action="{{ route('signup.func') }}" method="POST">
                                @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="mb-3 control-relative">
                                    <input required type="text" name="name" class="form-control form-transparent" placeholder=" ">
                                    <label class="form-placeholder">Name</label>
                                </div>

                                <div class="mb-3 control-relative">
                                    <input required type="email" name="email" class="form-control form-transparent" placeholder=" ">
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
                                    <label  class="form-placeholder ">Email</label>
                                </div>
    
                                <div class="mb-3 control-relative">
                                    <input required type="password" name="password" class="form-control form-transparent" placeholder=" ">
                                    <label class="form-placeholder">Password</label>
                                </div>
                                <div class="mb-3">
                                    <button style="border:none;" type="submit" class="button-standart button-standart-width">Sign up</button>
                                </div>
                                <div class="line-auth"><span>or</span></div>
    
                                <div class="buttons-group">
                                    <a href="/auth/google/redirect" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-google"></i></div> <div class="text-auth">Sign Up with Google</div></a>
                                    <a href="/siwa-login" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-apple"></i></div><div class="text-auth">Sign Up with Apple</div></a>
                                    <a href="/auth/facebook/redirect" class="buttons-auth-social"><div class="icon-auth"><i class="fa-brands fa-facebook-f"></i></div> <div class="text-auth">Sign Up with Facebook</div></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/media/js/main.js"></script>
</body>
</html>