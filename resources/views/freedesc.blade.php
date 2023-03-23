<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body onload="define_snow();">
    <!-- HEADER -->
    <header class="header-matrix-pages header-upgrade-pages">
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

            <div class="matrix-content-page">
                <div class="matrix-text">
                    <div class="star-header"></div>
                    <div class="matrix-title matrix-title-desc"><span style="font-style: italic;">Your</span> Matrix of Fate <span style="font-style: italic;">is ready</span></div>
                    <div class="matrix-desc">
                        Each energy has its positive and negative manifestations. If you see that you are living the energy in the negative, then this is a great chance to fix everything.
                    </div>
                </div>

                <div class="schem-container">
                <div class="title-schem" value="{{ session('data') }}"  id="title-schem">
                    {{ session('name') }} {{ session('data') }}
                 </div>

             <div class="row">
                        <div class="col-md-6">
                            <svg viewBox="0 0 680 600" id="matrix">
                                <g class="cls-1">
                                    <g id="Шаблон_Матриц" data-name="Шабло Мары">
                                        <g>
                                            <rect class="cls-3" x="163.63" y="126.14" width="340.16" height="340.16">
                                            </rect>
                                        </g>
                                        <g>
                                            <rect class="cls-3" x="227.87" y="127.54" width="340.16" height="340.16"
                                                transform="translate(-158.13 367.16) rotate(-45)"></rect>
                                        </g>
                                        <polygon class="cls-4"
                                            points="333.7 12.76 534.14 95.78 617.17 296.22 534.14 496.66 333.7 579.68 133.26 496.66 50.24 296.22 133.26 95.78 333.7 12.76">
                                        </polygon>
                                        <line class="cls-4" x1="333.7" y1="12.76" x2="333.7" y2="579.68"></line>
                                        <line class="cls-4" x1="50.24" y1="296.22" x2="617.17" y2="296.22"></line>
                                        <g>
                                            <line class="cls-5" x1="466.22" y1="428.73" x2="199.02" y2="164.54"></line>
                                        </g>
                                        <g>
                                            <line class="cls-7" x1="464.67" y1="165.25" x2="212.02" y2="417.91"></line>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-10" cx="333.7" cy="41.1" r="28.35"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-13" cx="333.7" cy="89.62" r="18.43"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-15" cx="333.7" cy="124.12" r="14.17"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <line class="cls-17" x1="490.62" y1="296.22" x2="488.85" y2="297.99"></line>
                                            <line class="cls-18" x1="485.28" y1="301.56" x2="337.26" y2="449.58"></line>
                                            <line class="cls-17" x1="335.47" y1="451.37" x2="333.7" y2="453.14"></line>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-19" cx="397.95" cy="552.74" r="28.35"
                                                    transform="translate(-338.53 441.89) rotate(-45)">
                                                </circle>
                                            </g>
                                        </g>
                                        <circle class="cls-21" cx="397.94" cy="504.22" r="18.43"
                                            transform="translate(-304.22 427.67) rotate(-45)">
                                        </circle>
                                        <g>
                                            <g>
                                                <circle class="cls-22" cx="397.59" cy="469.72" r="14.17"
                                                    transform="translate(-279.93 417.32) rotate(-45)">
                                                </circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-10" cx="78.59" cy="296.22" r="28.35"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-13" cx="127.11" cy="295.86" r="18.43"></circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-15" cx="161.61" cy="296.22" r="14.17"></circle>
                                            </g>
                                        </g>
                                        <circle class="cls-21" cx="604.54" cy="297.62" r="18.43"
                                            transform="translate(-97.62 513.25) rotate(-45)">
                                        </circle>
                                        <g>
                                            <g>
                                                <circle class="cls-22" cx="570.04" cy="297.62" r="14.17"
                                                    transform="translate(-107.73 488.85) rotate(-45)">
                                                </circle>
                                            </g>
                                        </g>
                                        <g>
                                            <circle class="cls-24" cx="217.55" cy="117.22" r="28.35"
                                                transform="translate(-83.41 186.77) rotate(-45)">
                                            </circle>
                                        </g>
                                        <circle class="cls-24" cx="514.1" cy="476.62" r="28.35"></circle>
                                        <g>
                                            <g>
                                                <circle class="cls-25" cx="397.94" cy="297.62" r="28.35"
                                                    transform="translate(-158.13 367.16) rotate(-45)">
                                                </circle>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <circle class="cls-19" cx="653.13" cy="297.62" r="28.35"
                                                    transform="translate(-83.39 547.61) rotate(-45)">
                                                </circle>
                                            </g>
                                        </g>
                                        <circle class="cls-21" cx="413.18" cy="375.69" r="14.17"></circle>
                                        <circle class="cls-21" cx="518.18" cy="367.04" r="14.17"
                                            transform="translate(-172.01 440.52) rotate(-45)">
                                        </circle>
                                        <circle class="cls-21" cx="467.37" cy="417.85" r="14.17"
                                            transform="translate(-252 450) rotate(-45)">
                                        </circle>
                                        <text x="-64.24" y="-1.4"></text>
                                        <g>
                                            <circle class="cls-24" cx="217.55" cy="478.01" r="28.35"
                                                transform="translate(-338.53 292.44) rotate(-45)">
                                            </circle>
                                        </g>
                                        <circle class="cls-24" cx="514.1" cy="115.82" r="28.35"></circle>
                                        <g>
                                            <g>
                                                <line class="cls-10" x1="26.31" y1="296.87" x2="37.65" y2="296.87">
                                                </line>
                                            </g>
                                        </g>
                                        <g>
                                            <text class="cls-48" transform="translate(289.01 359.29)">
                                                <tspan class="cls-45"></tspan>
                                                <tspan x="5.93" y="0"></tspan>
                                                <tspan class="cls-45" x="30.38" y="0">К</tspan>
                                                <tspan x="36.09" y="0">О</tspan>
                                                <tspan class="cls-45" x="43.87" y="0">М</tspan>
                                                <tspan x="52.08" y="0">ФО</tspan>
                                                <tspan class="cls-49" x="67.47" y="0">Р</tspan>
                                                <tspan class="cls-50" x="73.69" y="0">Т</tspan>
                                                <tspan x="79.46" y="0"></tspan>
                                            </text>
                                            <text class="cls-33" transform="translate(289.01 359.29)">
                                                <tspan class="cls-45">З</tspan>
                                                <tspan x="5.93" y="0">ОНА</tspan>
                                                <tspan class="cls-45" x="30.38" y="0">К</tspan>
                                                <tspan x="36.09" y="0"></tspan>
                                                <tspan class="cls-45" x="43.87" y="0"></tspan>
                                                <tspan x="52.08" y="0">ФО</tspan>
                                                <tspan class="cls-49" x="67.47" y="0"></tspan>
                                                <tspan class="cls-50" x="73.69" y="0">Т</tspan>
                                                <tspan x="79.46" y="0">А</tspan>
                                            </text>
                                        </g>
                                        <text x="-64.24" y="-1.4"></text>
                                        <path class="cls-52" transform="translate(412.01 315.52)" d="M14.0519 14.5182C13.9233 16.0928 13.7671 15.7226 13.5838 15.4082C13.4005 15.0935 13.138 14.7865 12.7958 14.4862C12.4541 14.1861 12.1466 13.9444 11.874 13.7607C11.6015 13.5768 11.2272 13.3712 10.7514 13.1436C10.2759 12.9161 9.89919 12.7468 9.62189 12.6354C9.34421 12.5242 8.94255 12.3718 8.41715 12.1783C7.95132 12.0042 7.60449 11.8711 7.37629 11.7792C7.14835 11.6872 6.8486 11.5567 6.47688 11.3872C6.10531 11.218 5.82775 11.0679 5.64433 10.9374C5.46097 10.8068 5.26527 10.6472 5.05707 10.4585C4.84886 10.2698 4.70268 10.069 4.61837 9.8561C4.53427 9.64318 4.49209 9.41088 4.49209 9.15927C4.49209 8.50137 4.78934 7.96413 5.38405 7.54814C5.97882 7.13215 6.7471 6.92406 7.6888 6.92406C8.1049 6.92406 8.52911 6.97963 8.95999 7.09102C9.39087 7.20241 9.76015 7.32789 10.0675 7.46832C10.375 7.60874 10.6648 7.76361 10.9375 7.93286C11.2101 8.10226 11.4033 8.23039 11.5174 8.31748C11.6314 8.40462 11.7036 8.46263 11.7331 8.49171C11.8621 8.58847 11.9956 8.62228 12.1344 8.59335C12.283 8.58369 12.3971 8.50615 12.4766 8.36115L13.6811 6.24186C13.8 6.04841 13.7754 5.86451 13.6068 5.69023C13.5472 5.63216 13.4732 5.56449 13.3833 5.48701C13.2944 5.40953 13.101 5.26925 12.8034 5.06594C12.5061 4.86277 12.1914 4.68132 11.8596 4.52162C11.5274 4.36208 11.0961 4.1999 10.5657 4.03548C10.0357 3.8708 9.48789 3.75961 8.92276 3.7016V1.14674C8.92276 1.01135 8.87823 0.900007 8.78929 0.812864C8.70013 0.725924 8.58608 0.682251 8.44709 0.682251H6.43975C6.31091 0.682251 6.19942 0.728161 6.10526 0.820134C6.01111 0.912107 5.96403 1.02091 5.96403 1.14674V3.75956C4.40777 4.04976 3.14398 4.69815 2.1726 5.70456C1.20132 6.71103 0.715496 7.88176 0.715496 9.21733C0.715496 9.61405 0.757783 9.99145 0.842043 10.3493C0.926198 10.7075 1.03035 11.0293 1.15429 11.3147C1.27813 11.6003 1.45415 11.8809 1.68209 12.1568C1.91003 12.4325 2.12568 12.6696 2.32883 12.8679C2.53208 13.0662 2.79726 13.2719 3.12424 13.4847C3.45144 13.6977 3.73146 13.8696 3.96445 14.0002C4.19749 14.1303 4.50719 14.2808 4.89365 14.4498C5.28021 14.6192 5.58512 14.7473 5.80817 14.8346C6.03121 14.9216 6.33596 15.0427 6.72268 15.1972C7.25787 15.4004 7.65443 15.5577 7.91211 15.6691C8.16999 15.7804 8.49698 15.9352 8.8937 16.1336C9.29005 16.3318 9.57986 16.5133 9.76338 16.6779C9.94674 16.8424 10.1127 17.0457 10.2615 17.2875C10.4103 17.5294 10.4848 17.7858 10.4848 18.0569C10.4848 18.8214 10.18 19.4116 9.57023 19.8274C8.96072 20.2436 8.25425 20.4517 7.45149 20.4517C7.08508 20.4517 6.71805 20.4132 6.35143 20.3358C5.06285 20.0839 3.85858 19.479 2.73851 18.5211L2.70878 18.4921C2.61952 18.3859 2.50052 18.3423 2.352 18.3617C2.19338 18.3811 2.07933 18.4392 2.01001 18.5361L0.478548 20.4956C0.329817 20.6891 0.339868 20.8874 0.508336 21.0906C0.557965 21.1487 0.644672 21.236 0.76851 21.352C0.892661 21.4683 1.12315 21.6495 1.45998 21.8967C1.79692 22.1436 2.16369 22.3756 2.56026 22.5936C2.95677 22.8112 3.45972 23.0264 4.06943 23.2394C4.67915 23.452 5.31089 23.602 5.96512 23.689V26.2292C5.96512 26.3552 6.01225 26.464 6.10636 26.556C6.20056 26.6481 6.312 26.6938 6.44084 26.6938H8.44818C8.58718 26.6938 8.70123 26.6503 8.79033 26.5634C8.87943 26.4764 8.9238 26.365 8.9238 26.2293V23.6891C10.5001 23.4375 11.7812 22.777 12.7674 21.7076C13.7536 20.6383 14.2469 19.3633 14.2469 17.8829C14.2463 17.3991 14.182 16.9443 14.0519 16.5182Z" fill="#7BAD1F"/>
                                        <path class="cls-53" transform="translate(365.01 365.52)" d="M12.5538 21.5143C12.3189 21.5143 12.1202 21.433 11.9577 21.2704L3.50391 13.1147C3.41359 13.0425 3.28941 12.925 3.13135 12.7625C2.97329 12.5999 2.72266 12.3041 2.37945 11.8751C2.03625 11.4461 1.72916 11.0058 1.45821 10.5542C1.18726 10.1026 0.945657 9.55619 0.73341 8.91493C0.521163 8.27368 0.415039 7.65048 0.415039 7.04535C0.415039 5.05836 0.988558 3.50489 2.1356 2.38495C3.28263 1.265 4.86771 0.705034 6.89083 0.705034C7.45081 0.705034 8.02207 0.802126 8.60462 0.996309C9.18717 1.19049 9.72908 1.45241 10.2303 1.78207C10.7316 2.11174 11.1629 2.42107 11.5241 2.71009C11.8854 2.99911 12.2286 3.30619 12.5538 3.63133C12.8789 3.30619 13.2221 2.99911 13.5834 2.71009C13.9447 2.42107 14.3759 2.11174 14.8772 1.78207C15.3785 1.45241 15.9204 1.19049 16.5029 0.996309C17.0855 0.802126 17.6567 0.705034 18.2167 0.705034C20.2398 0.705034 21.8249 1.265 22.9719 2.38495C24.119 3.50489 24.6925 5.05836 24.6925 7.04535C24.6925 9.04138 23.6584 11.0735 21.5901 13.1418L13.1499 21.2704C12.9873 21.433 12.7886 21.5143 12.5538 21.5143Z" fill="#FF2171"/>
                                        <text x="-64.24" y="-1.4"></text>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="397.9" cy="195.1" r="14.2" transform="translate(-85.6 337.1) rotate(-45)"
                                                style="fill:#7BAD1F">
                                            </circle>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="295.5" cy="297.6" r="14.2" transform="translate(-188.1 294.7) rotate(-45)"
                                                style="fill:#7BAD1F">
                                            </circle>
                                        </g>
                                    </g>
                                    <g id="points-basic-mode">
                                        <text class="cls-56 matrix-value-point" id="point-01" transform="translate(76.34 299.89)">19</text>
                                        <text class="cls-54 matrix-value-point" value="" id="point-02" transform="translate(331.46 44.83)">12</text>
                                        <text class="cls-54 matrix-value-point" id="point-03" transform="translate(586.58 299.89)">6</text>
                                        <text class="cls-54 matrix-value-point" id="point-04" transform="translate(331.46 555.39)">10</text>
                                        <text class="cls-55 matrix-value-point" id="point-05" transform="translate(331.46 299.89)">11</text>
                                        <text class="cls-55 matrix-value-point" id="point-06" transform="translate(151.06 120.42)">4</text>
                                        <text class="cls-55 matrix-value-point" id="point-07" transform="translate(511.85 120.42)">18</text>
                                        <text class="cls-55 matrix-value-point" id="point-08" transform="translate(511.85 479.72)">16</text>
                                        <text class="cls-55 matrix-value-point" id="point-09" transform="translate(151.06 479.72)">11</text>
                                        <text class="cls-57 matrix-value-point" id="point-10" transform="translate(333.69 470.62)">21</text>
                                        <text class="cls-57 matrix-value-point" id="point-11" transform="translate(505.79 297.56)">17</text>
                                        <text class="cls-58 matrix-value-point" id="point-12" transform="translate(413.17 377.27)">11</text>
                                        <text class="cls-58 matrix-value-point" id="point-13" transform="translate(374 417)">5</text>
                                        <text class="cls-58 matrix-value-point" id="point-14" transform="translate(453 335)">10</text>
                                        <text class="cls-57 matrix-value-point" id="point-15" transform="translate(161.59 297.56)">3</text>
                                        <text class="cls-57 matrix-value-point" id="point-16" transform="translate(333.69 126.71)">5</text>
                                        <text class="cls-59 matrix-value-point" id="point-17" transform="translate(126.2 299.56)">22</text>
                                        <text class="cls-59 matrix-value-point" id="point-18" transform="translate(334.8 93.24)">17</text>
                                        <text class="cls-60 matrix-value-point" id="point-19" transform="translate(334.81 505.91)">4</text>
                                        <text class="cls-60 matrix-value-point" id="point-20" transform="translate(539.4 299.56)">5</text>
                                        <text class="cls-57 matrix-value-point" id="point-21" transform="translate(231.26 297.56)">14</text>
                                        <text class="cls-57 matrix-value-point" id="point-22" transform="translate(333.7 195.1)">16</text>
                                    </g>
                                    <g id="points-extended-mode">
                                        <circle class="cls-21" cx="276.25" cy="175.93" r="14.17"
                                            transform="translate(-107.73 245.47) rotate(-45)">
                                        </circle>
                                        <text class="cls-58 matrix-value-point" id="point-23" transform="translate(212 175.83)">17</text>
                                        <circle class="cls-21" cx="251.86" cy="151.53" r="18.43"
                                            transform="translate(-97.62 221.08) rotate(-45)">
                                        </circle>
                                        <text class="cls-60 matrix-value-point" id="point-24" transform="translate(186.71 153.27)">21</text>
                                        <circle class="cls-21" cx="455.4" cy="174.53" r="14.17"></circle>
                                        <text class="cls-58 matrix-value-point" id="point-25" transform="translate(455.38 175.83)">4</text>
                                        <circle class="cls-21" cx="479.79" cy="150.13" r="18.43"></circle>
                                        <text class="cls-60 matrix-value-point" id="point-26" transform="translate(477.89 153.77)">22</text>
                                        <circle class="cls-21" cx="455.4" cy="417.91" r="14.17"></circle>
                                        <text class="cls-58 matrix-value-point" id="point-27" transform="translate(455.39 420.05)">11</text>
                                        <circle class="cls-21" cx="479.79" cy="442.31" r="18.43"></circle>
                                        <text class="cls-60 matrix-value-point" id="point-28" transform="translate(480.89 445.41)">9</text>
                                        <circle class="cls-21" cx="276.25" cy="419.31" r="14.17"
                                            transform="translate(-279.83 316.76) rotate(-45)">
                                        </circle>
                                        <text class="cls-58 matrix-value-point" id="point-29" transform="translate(212 419.06)">6</text>
                                        <circle class="cls-21" cx="251.86" cy="443.7" r="18.43"
                                            transform="translate(-304.22 306.65) rotate(-45)">
                                        </circle>
                                        <text class="cls-60 matrix-value-point" id="point-30" transform="translate(188.71 445.41)">17</text>
                                        <text class="cls-33" id="point-31" transform="translate(50.9 254.94)">7</text>
                                        <text class="cls-33" id="point-32" transform="translate(58.5 236.19)">6</text>
                                        <text class="cls-33" id="point-33" transform="translate(66.22 216.83)">11</text>
                                        <text class="cls-43" id="point-34" transform="translate(70.26 198.39)">5</text>
                                        <text class="cls-33" id="point-35" transform="translate(81.28 180.83)">14</text>
                                        <text class="cls-33" id="point-36" transform="translate(89.13 161.62)">9</text>
                                        <text class="cls-33" id="point-37" transform="translate(96.7 143.39)">13</text>
                                        <text class="cls-33" id="point-38" transform="translate(159.66 77.79)">6</text>
                                        <text class="cls-33" id="point-39" transform="translate(177.74 70.14)">20</text>
                                        <text class="cls-33" id="point-40" transform="translate(196.73 62.48)">9</text>
                                        <text class="cls-43" id="point-41" transform="translate(211.32 54.83)">16</text>
                                        <text class="cls-33" id="point-42" transform="translate(232.77 47.17)">8</text>
                                        <text class="cls-33" id="point-43" transform="translate(251.53 39.52)">10</text>
                                        <text class="cls-33" id="point-44" transform="translate(269.81 31.87)">22</text>
                                        <text class="cls-33" id="point-45" transform="translate(385.66 31.87)">9</text>
                                        <text class="cls-33" id="point-46" transform="translate(404.94 39.52)">15</text>
                                        <text class="cls-33" id="point-47" transform="translate(422.7 47.17)">18</text>
                                        <text class="cls-43" id="point-48" transform="translate(443.15 54.83)">3</text>
                                        <text class="cls-33" id="point-49" transform="translate(459.73 62.48)">6</text>
                                        <text class="cls-33" id="point-51" transform="translate(478.72 70.14)">21</text>
                                        <text class="cls-33" id="point-52" transform="translate(496.81 77.79)">12</text>
                                        <text class="cls-33" id="point-53" transform="translate(558.77 143.39)">6</text>
                                        <text class="cls-33" id="point-54" transform="translate(566.4 161.62)">6</text>
                                        <text class="cls-33" id="point-55" transform="translate(574.09 180.83)">12</text>
                                        <text class="cls-43" id="point-56" transform="translate(583.4 198.39)">6</text>
                                        <text class="cls-33" id="point-57" transform="translate(588.82 216.83)">18</text>
                                        <text class="cls-33" id="point-58" transform="translate(597.53 236.19)">12</text>
                                        <text class="cls-33" id="point-59" transform="translate(604.7 254.94)">18</text>
                                        <text class="cls-33" id="point-60" transform="translate(604.7 344.84)">16</text>
                                        <text class="cls-33" id="point-61" transform="translate(597.13 363.64)">10</text>
                                        <text class="cls-33" id="point-62" transform="translate(589.28 382.27)">5</text>
                                        <text class="cls-43" id="point-63" transform="translate(583.26 401.19)">22</text>
                                        <text class="cls-33" id="point-64" transform="translate(574.09 418.92)">6</text>
                                        <text class="cls-33" id="point-65" transform="translate(566.5 437.58)">11</text>
                                        <text class="cls-33" id="point-66" transform="translate(558.77 455.95)">9</text>
                                        <text class="cls-33" id="point-67" transform="translate(496.81 522.12)">22</text>
                                        <text class="cls-33" id="point-68" transform="translate(478.03 529.89)">6</text>
                                        <text class="cls-33" id="point-69" transform="translate(459.6 537.53)">14</text>
                                        <text class="cls-43" id="point-70" transform="translate(442.39 546.37)">8</text>
                                        <text class="cls-33" id="point-71" transform="translate(422.7 552.81)">8</text>
                                        <text class="cls-33" id="point-72" transform="translate(404.14 560.35)">18</text>
                                        <text class="cls-33" id="point-73" transform="translate(385.66 568.11)">10</text>
                                        <text class="cls-33" id="point-74" transform="translate(270.81 568.11)">14</text>
                                        <text class="cls-33" id="point-75" transform="translate(252.33 560.35)">4</text>
                                        <text class="cls-33" id="point-76" transform="translate(233.77 552.81)">7</text>
                                        <text class="cls-43" id="point-77" transform="translate(212.08 546.37)">21</text>
                                        <text class="cls-33" id="point-78" transform="translate(196.69 537.53)">8</text>
                                        <text class="cls-33" id="point-79" transform="translate(178.26 529.89)">5</text>
                                        <text class="cls-33" id="point-80" transform="translate(161.48 522.12)">16</text>
                                        <text class="cls-33" id="point-81" transform="translate(97.7 455.95)">7</text>
                                        <text class="cls-33" id="point-82" transform="translate(89.98 437.58)">14</text>
                                        <text class="cls-33" id="point-83" transform="translate(82.39 418.92)">17</text>
                                        <text class="cls-43" id="point-84" transform="translate(71.22 401.19)">3</text>
                                        <text class="cls-33" id="point-85" transform="translate(67.2 382.27)">7</text>
                                        <text class="cls-33" id="point-86" transform="translate(59.34 363.64)">22</text>
                                        <text class="cls-33" id="point-87" transform="translate(51.77 344.83)">5</text>
                                    </g>
                                    <g id="о_года" data-name="По годам">
                                        
                                        <g>
                                            <line class="cls-63" x1="155.1" y1="505.93" x2="310.36" y2="570.25"></line>
                                            <g>
                                                <circle class="cls-63" cx="296.97" cy="539.49" r="2.83"
                                                    transform="translate(-362.44 696.23) rotate(-76.05)"></circle>
                                                <circle class="cls-64" cx="296.97" cy="539.49" r="2.83"
                                                    transform="translate(-362.44 696.23) rotate(-76.05)"></circle>
                                                <circle class="cls-65" cx="296.97" cy="539.49" r="2.83"
                                                    transform="translate(-362.44 696.23) rotate(-76.05)"></circle>
                                            </g>
                                            <circle class="cls-63" cx="241.54" cy="516.52" r="1.42"
                                                transform="translate(-382.23 625) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="260.02" cy="524.18" r="1.42"
                                                transform="translate(-375.63 648.75) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="278.49" cy="531.83" r="1.42"
                                                transform="translate(-369.04 672.49) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="352.4" cy="562.45" r="1.42"
                                                transform="translate(-342.66 767.45) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="333.93" cy="554.79" r="1.42"
                                                transform="translate(-349.25 743.71) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="315.45" cy="547.14" r="1.42"
                                                transform="translate(-355.85 719.97) rotate(-76.05)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="124.22" y1="475.12" x2="59.91" y2="319.85"></line>
                                            <g>
                                                <circle class="cls-63" cx="156.31" cy="398.88" r="2.83"
                                                    transform="translate(-247.58 136.37) rotate(-31.05)"></circle>
                                                <circle class="cls-64" cx="156.31" cy="398.88" r="2.83"
                                                    transform="translate(-247.58 136.37) rotate(-31.05)"></circle>
                                                <circle class="cls-65" cx="156.31" cy="398.88" r="2.83"
                                                    transform="translate(-247.58 136.37) rotate(-31.05)"></circle>
                                            </g>
                                            <circle class="cls-63" cx="179.27" cy="454.32" r="1.42"
                                                transform="translate(-272.88 156.15) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="171.61" cy="435.84" r="1.42"
                                                transform="translate(-264.44 149.56) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="163.96" cy="417.36" r="1.42"
                                                transform="translate(-256.01 142.96) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="133.35" cy="343.45" r="1.42"
                                                transform="translate(-222.27 116.58) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="141" cy="361.93" r="1.42"
                                                transform="translate(-230.71 123.18) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="148.65" cy="380.41" r="1.42"
                                                transform="translate(-239.14 129.77) rotate(-31.05)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="123.82" y1="118.09" x2="59.51" y2="273.36"></line>
                                            <g>
                                                <circle class="cls-63" cx="155.9" cy="197.12" r="2.83"
                                                    transform="translate(-137.24 299.51) rotate(-76.05)">
                                                </circle>
                                                <circle class="cls-64" cx="155.9" cy="197.12" r="2.83"
                                                    transform="translate(-137.24 299.51) rotate(-76.05)">
                                                </circle>
                                                <circle class="cls-65" cx="155.9" cy="197.12" r="2.83"
                                                    transform="translate(-137.24 299.51) rotate(-76.05)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="178.87" cy="141.69" r="1.42"
                                                transform="translate(-66.01 279.72) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="171.21" cy="160.17" r="1.42"
                                                transform="translate(-89.75 286.32) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="163.56" cy="178.65" r="1.42"
                                                transform="translate(-113.49 292.91) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="132.94" cy="252.56" r="1.42"
                                                transform="translate(-208.46 319.29) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="140.6" cy="234.08" r="1.42"
                                                transform="translate(-184.72 312.69) rotate(-76.05)">
                                            </circle>
                                            <circle class="cls-63" cx="148.25" cy="215.6" r="1.42"
                                                transform="translate(-160.98 306.1) rotate(-76.05)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="310.03" y1="22.91" x2="154.77" y2="87.22"></line>
                                            <g>
                                                <circle class="cls-63" cx="296.64" cy="56.46" r="2.83"
                                                    transform="translate(-50.86 159.69) rotate(-31.05)">
                                                </circle>
                                                <circle class="cls-64" cx="296.64" cy="56.46" r="2.83"
                                                    transform="translate(-50.86 159.69) rotate(-31.05)">
                                                </circle>
                                                <circle class="cls-65" cx="296.64" cy="56.46" r="2.83"
                                                    transform="translate(-50.86 159.69) rotate(-31.05)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="352.08" cy="33.5" r="1.42"
                                                transform="translate(-31.08 184.99) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="333.6" cy="41.16" r="1.42"
                                                transform="translate(-37.67 176.56) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="315.12" cy="48.81" r="1.42"
                                                transform="translate(-44.27 168.12) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="241.21" cy="79.42" r="1.42"
                                                transform="translate(-70.65 134.39) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="259.69" cy="71.77" r="1.42"
                                                transform="translate(-64.05 142.82) rotate(-31.05)">
                                            </circle>
                                            <circle class="cls-63" cx="278.17" cy="64.12" r="1.42"
                                                transform="translate(-57.46 151.25) rotate(-31.05)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="512.31" y1="505.69" x2="357.04" y2="570.01"></line>
                                            <g>
                                                <circle class="cls-63" cx="498.92" cy="539.25" r="2.83"
                                                    transform="translate(-179.54 134.8) rotate(-13.95)">
                                                </circle>
                                                <circle class="cls-64" cx="498.92" cy="539.25" r="2.83"
                                                    transform="translate(-179.54 134.8) rotate(-13.95)">
                                                </circle>
                                                <circle class="cls-65" cx="498.92" cy="539.25" r="2.83"
                                                    transform="translate(-179.54 134.8) rotate(-13.95)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="554.35" cy="516.29" r="1.42"
                                                transform="translate(-172.37 147.49) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="535.87" cy="523.94" r="1.42"
                                                transform="translate(-174.76 143.26) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="517.4" cy="531.59" r="1.42"
                                                transform="translate(-177.15 139.03) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="443.49" cy="562.21" r="1.42"
                                                transform="translate(-186.71 122.12) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="461.96" cy="554.55" r="1.42"
                                                transform="translate(-184.32 126.34) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="480.44" cy="546.9" r="1.42"
                                                transform="translate(-181.93 130.57) rotate(-13.95)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="543.18" y1="474.88" x2="607.5" y2="319.61"></line>
                                            <g>
                                                <circle class="cls-63" cx="639.58" cy="398.64" r="2.83"
                                                    transform="translate(-96.06 739.59) rotate(-58.95)">
                                                </circle>
                                                <circle class="cls-64" cx="639.58" cy="398.64" r="2.83"
                                                    transform="translate(-96.06 739.59) rotate(-58.95)">
                                                </circle>
                                                <circle class="cls-65" cx="639.58" cy="398.64" r="2.83"
                                                    transform="translate(-96.06 739.59) rotate(-58.95)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="616.62" cy="454.08" r="1.42"
                                                transform="translate(-154.67 746.77) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="624.28" cy="435.6" r="1.42"
                                                transform="translate(-135.13 744.38) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="631.93" cy="417.12" r="1.42"
                                                transform="translate(-115.6 741.99) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="662.54" cy="343.21" r="1.42"
                                                transform="translate(-37.45 732.42) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="654.89" cy="361.69" r="1.42"
                                                transform="translate(-56.99 734.81) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="647.24" cy="380.17" r="1.42"
                                                transform="translate(-76.53 737.2) rotate(-58.95)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="543.59" y1="117.86" x2="607.9" y2="273.12"></line>
                                            <g>
                                                <circle class="cls-63" cx="639.99" cy="196.89" r="2.83"
                                                    transform="translate(-92.83 158.71) rotate(-13.95)">
                                                </circle>
                                                <circle class="cls-64" cx="639.99" cy="196.89" r="2.83"
                                                    transform="translate(-92.83 158.71) rotate(-13.95)">
                                                </circle>
                                                <circle class="cls-65" cx="639.99" cy="196.89" r="2.83"
                                                    transform="translate(-92.83 158.71) rotate(-13.95)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="617.02" cy="141.45" r="1.42"
                                                transform="translate(-80.14 151.54) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="624.68" cy="159.93" r="1.42"
                                                transform="translate(-84.37 153.93) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="632.33" cy="178.41" r="1.42"
                                                transform="translate(-88.6 156.32) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="662.95" cy="252.32" r="1.42"
                                                transform="translate(-105.52 165.89) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="655.29" cy="233.84" r="1.42"
                                                transform="translate(-101.29 163.5) rotate(-13.95)">
                                            </circle>
                                            <circle class="cls-63" cx="647.64" cy="215.36" r="1.42"
                                                transform="translate(-97.06 161.11) rotate(-13.95)">
                                            </circle>
                                        </g>
                                        <g>
                                            <line class="cls-63" x1="357.37" y1="22.67" x2="512.64" y2="86.99"></line>
                                            <g>
                                                <circle class="cls-63" cx="499.25" cy="56.23" r="2.83"
                                                    transform="translate(129.34 453.55) rotate(-58.95)">
                                                </circle>
                                                <circle class="cls-64" cx="499.25" cy="56.23" r="2.83"
                                                    transform="translate(129.34 453.55) rotate(-58.95)">
                                                </circle>
                                                <circle class="cls-65" cx="499.25" cy="56.23" r="2.83"
                                                    transform="translate(129.34 453.55) rotate(-58.95)">
                                                </circle>
                                            </g>
                                            <circle class="cls-63" cx="443.81" cy="33.26" r="1.42"
                                                transform="translate(122.17 394.94) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="462.29" cy="40.92" r="1.42"
                                                transform="translate(124.56 414.48) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="480.77" cy="48.57" r="1.42"
                                                transform="translate(126.95 434.01) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="554.68" cy="79.19" r="1.42"
                                                transform="translate(136.52 512.16) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="536.2" cy="71.53" r="1.42"
                                                transform="translate(134.13 492.62) rotate(-58.95)">
                                            </circle>
                                            <circle class="cls-63" cx="517.72" cy="63.88" r="1.42"
                                                transform="translate(131.73 473.09) rotate(-58.95)">
                                            </circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="col-md-6">
                            <div class="column-center">
                                <svg width="344" height="538" viewBox="0 0 344 538" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M87.72 25H95.112V24.856L92.448 24.376V17.536L94.584 17.512C95.496 17.44 100.92 17.008 100.896 12.136C100.896 9.4 98.688 8.104 95.28 8.176L87.96 8.2V8.344L90.048 8.824V24.376L87.72 24.856V25ZM92.448 16.6V8.92C92.664 8.728 94.272 8.632 94.68 8.608C97.464 8.632 98.712 10.456 98.712 12.64C98.712 15.496 97.488 16.984 95.112 16.984C94.392 16.984 93.408 16.864 92.448 16.6ZM109.681 22.24C109.081 22.912 107.953 23.776 106.585 23.776C103.753 23.776 102.217 21.544 102.169 18.736L109.825 18.688C109.777 15.04 108.769 13.336 105.385 13.432C102.265 14.104 100.225 16.432 100.225 19.552C100.225 22.84 102.025 25.216 105.001 25.216C105.433 25.216 105.793 25.192 106.225 25.072C107.665 24.352 108.913 23.512 109.945 22.48L109.681 22.24ZM104.833 14.104C106.369 14.056 107.617 15.4 107.617 17.92C107.617 18.016 107.569 18.16 107.521 18.28L102.169 18.52C102.169 15.832 102.625 14.176 104.833 14.104ZM110.489 25H115.913V24.88L114.233 24.616V16.312C115.169 15.16 116.033 15.28 116.633 15.496C116.993 15.64 117.353 15.832 117.737 16.264L119.177 14.488C118.745 14.056 118.025 13.6 116.969 13.552C116.513 13.696 115.073 14.848 114.041 16.144H113.945L114.161 13.768L113.873 13.72H110.945V13.864L112.097 14.152V24.616L110.489 24.88V25ZM119.43 23.872C119.838 24.28 121.734 25.336 123.006 25.336C125.55 24.904 127.302 23.8 127.302 21.544C127.35 18.544 120.942 17.824 120.942 15.64C120.942 14.68 121.446 14.008 122.622 13.936C123.774 13.96 124.566 14.392 125.238 15.064L126.702 16.768H126.87L126.366 14.296C125.238 13.864 123.942 13.456 123.294 13.432C120.942 13.864 119.43 15.304 119.43 16.96C119.43 20.008 125.526 20.32 125.526 22.576C125.526 24.28 124.638 24.88 123.606 24.88C122.694 24.856 121.494 24.184 120.774 23.536L119.646 21.064L119.478 21.088L119.43 23.872ZM139.56 19.144C139.56 15.616 137.736 13.504 134.208 13.432C132.768 13.552 128.256 16.048 128.256 19.528C128.256 23.056 130.008 25.312 133.536 25.312C134.64 25.192 139.56 23.344 139.56 19.144ZM134.352 24.52C132.744 24.52 130.464 22.408 130.464 18.856C130.464 16.552 131.088 14.368 133.392 14.368C135.168 14.368 137.352 16.744 137.352 20.056C137.352 21.64 136.656 24.52 134.352 24.52ZM140.02 13.864L141.652 14.272V24.616L140.044 24.88V25H145.42V24.88L143.788 24.616V16.312C144.988 15.16 146.38 15.088 146.98 15.088C148.036 15.088 148.924 15.76 148.924 18.232V24.616L147.292 24.88V25H152.668V24.88L151.06 24.616V17.848C151.06 15.112 150.052 13.576 147.316 13.432C146.86 13.456 144.892 14.848 143.596 16.144H143.5L143.716 13.768L143.428 13.72H140.02V13.864ZM153.146 19.672C153.146 23.464 154.946 25.312 157.442 25.312C158.45 24.904 159.962 23.32 161.042 22H161.162L161.114 25H164.69V24.88L163.082 24.616L163.106 14.536C162.506 14.008 161.21 13.432 158.906 13.432C157.298 13.936 153.146 15.928 153.146 19.672ZM155.186 18.808C155.186 15.808 156.098 14.44 158.354 14.44C159.386 14.44 160.226 14.992 160.946 15.88L160.898 21.856C160.034 22.84 159.026 23.584 158.162 23.584C156.77 23.584 155.186 21.76 155.186 18.808ZM165.075 25H170.403V24.88L168.819 24.616V7.024L168.531 7L165.075 7.24V7.384L166.683 7.552V24.616L165.075 24.88V25ZM177.04 25H184.432V24.856L181.768 24.376V17.536L183.904 17.512C184.816 17.44 190.24 17.008 190.216 12.136C190.216 9.4 188.008 8.104 184.6 8.176L177.28 8.2V8.344L179.368 8.824V24.376L177.04 24.856V25ZM181.768 16.6V8.92C181.984 8.728 183.592 8.632 184 8.608C186.784 8.632 188.032 10.456 188.032 12.64C188.032 15.496 186.808 16.984 184.432 16.984C183.712 16.984 182.728 16.864 181.768 16.6ZM190.669 14.248L192.373 14.392V20.944C192.373 23.68 193.381 25.144 196.117 25.288C196.573 25.264 198.781 23.728 199.837 22.408H199.933L199.717 24.952L200.005 25H203.413V24.856L201.781 24.448V13.72H197.989V13.84L199.645 14.104V22.24C198.685 23.392 197.053 23.632 196.453 23.632C195.397 23.632 194.509 22.984 194.509 20.512V13.72L190.669 14.128V14.248ZM212.242 31H218.266L218.242 30.832L216.37 30.4V25.072C216.97 25.24 217.69 25.336 218.578 25.336C220.186 24.832 224.41 22.696 224.41 18.952C224.41 15.16 222.538 13.432 220.042 13.432C218.938 13.864 217.258 15.952 216.154 17.368H216.082L216.37 13.72H212.65V13.84L214.258 14.128L214.234 21.04V30.376L212.242 30.832V31ZM203.794 25H209.218V24.88L207.538 24.616V16.312C208.474 15.16 209.338 15.28 209.938 15.496C210.298 15.64 210.658 15.832 211.042 16.264L212.482 14.488C212.05 14.056 211.33 13.6 210.274 13.552C209.818 13.696 208.378 14.848 207.346 16.144H207.25L207.466 13.768L207.178 13.72H204.25V13.864L205.402 14.152V24.616L203.794 24.88V25ZM216.37 22.384V17.416C217.282 16.264 218.338 15.088 219.274 15.088C220.666 15.088 222.37 16.984 222.37 19.936C222.37 22.936 221.386 24.28 219.13 24.28C218.074 24.28 216.37 23.224 216.37 22.384ZM236.498 19.144C236.498 15.616 234.674 13.504 231.146 13.432C229.706 13.552 225.194 16.048 225.194 19.528C225.194 23.056 226.946 25.312 230.474 25.312C231.578 25.192 236.498 23.344 236.498 19.144ZM231.29 24.52C229.682 24.52 227.402 22.408 227.402 18.856C227.402 16.552 228.026 14.368 230.33 14.368C232.106 14.368 234.29 16.744 234.29 20.056C234.29 21.64 233.594 24.52 231.29 24.52ZM237.462 23.872C237.87 24.28 239.766 25.336 241.038 25.336C243.582 24.904 245.334 23.8 245.334 21.544C245.382 18.544 238.974 17.824 238.974 15.64C238.974 14.68 239.478 14.008 240.654 13.936C241.806 13.96 242.598 14.392 243.27 15.064L244.734 16.768H244.902L244.398 14.296C243.27 13.864 241.974 13.456 241.326 13.432C238.974 13.864 237.462 15.304 237.462 16.96C237.462 20.008 243.558 20.32 243.558 22.576C243.558 24.28 242.67 24.88 241.638 24.88C240.726 24.856 239.526 24.184 238.806 23.536L237.678 21.064L237.51 21.088L237.462 23.872ZM255.743 22.24C255.143 22.912 254.015 23.776 252.647 23.776C249.815 23.776 248.279 21.544 248.231 18.736L255.887 18.688C255.839 15.04 254.831 13.336 251.447 13.432C248.327 14.104 246.287 16.432 246.287 19.552C246.287 22.84 248.087 25.216 251.063 25.216C251.495 25.216 251.855 25.192 252.287 25.072C253.727 24.352 254.975 23.512 256.007 22.48L255.743 22.24ZM250.895 14.104C252.431 14.056 253.679 15.4 253.679 17.92C253.679 18.016 253.631 18.16 253.583 18.28L248.231 18.52C248.231 15.832 248.687 14.176 250.895 14.104Z" fill="white"/>
                                    <path d="M312 58.75C299.159 58.75 288.75 69.1594 288.75 82C288.75 94.8406 299.159 105.25 312 105.25C324.841 105.25 335.25 94.8406 335.25 82C335.25 69.1594 324.841 58.75 312 58.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M22.526 88.108C21.59 88.108 20.69 87.958 19.826 87.658C18.974 87.358 18.314 86.962 17.846 86.47L18.368 85.444C18.824 85.9 19.43 86.272 20.186 86.56C20.942 86.836 21.722 86.974 22.526 86.974C23.654 86.974 24.5 86.77 25.064 86.362C25.628 85.942 25.91 85.402 25.91 84.742C25.91 84.238 25.754 83.836 25.442 83.536C25.142 83.236 24.77 83.008 24.326 82.852C23.882 82.684 23.264 82.504 22.472 82.312C21.524 82.072 20.768 81.844 20.204 81.628C19.64 81.4 19.154 81.058 18.746 80.602C18.35 80.146 18.152 79.528 18.152 78.748C18.152 78.112 18.32 77.536 18.656 77.02C18.992 76.492 19.508 76.072 20.204 75.76C20.9 75.448 21.764 75.292 22.796 75.292C23.516 75.292 24.218 75.394 24.902 75.598C25.598 75.79 26.198 76.06 26.702 76.408L26.252 77.47C25.724 77.122 25.16 76.864 24.56 76.696C23.96 76.516 23.372 76.426 22.796 76.426C21.692 76.426 20.858 76.642 20.294 77.074C19.742 77.494 19.466 78.04 19.466 78.712C19.466 79.216 19.616 79.624 19.916 79.936C20.228 80.236 20.612 80.47 21.068 80.638C21.536 80.794 22.16 80.968 22.94 81.16C23.864 81.388 24.608 81.616 25.172 81.844C25.748 82.06 26.234 82.396 26.63 82.852C27.026 83.296 27.224 83.902 27.224 84.67C27.224 85.306 27.05 85.888 26.702 86.416C26.366 86.932 25.844 87.346 25.136 87.658C24.428 87.958 23.558 88.108 22.526 88.108ZM33.3662 83.248L31.1342 85.3V88H29.8562V74.644H31.1342V83.698L36.7862 78.532H38.3702L34.3202 82.402L38.7482 88H37.1822L33.3662 83.248ZM48.1306 78.532L43.3966 89.134C43.0126 90.022 42.5686 90.652 42.0646 91.024C41.5606 91.396 40.9546 91.582 40.2466 91.582C39.7906 91.582 39.3646 91.51 38.9686 91.366C38.5726 91.222 38.2306 91.006 37.9426 90.718L38.5366 89.764C39.0166 90.244 39.5926 90.484 40.2646 90.484C40.6966 90.484 41.0626 90.364 41.3626 90.124C41.6746 89.884 41.9626 89.476 42.2266 88.9L42.6406 87.982L38.4106 78.532H39.7426L43.3066 86.578L46.8706 78.532H48.1306Z" fill="white"/>
                                    <path d="M81 58.75C68.1594 58.75 57.75 69.1594 57.75 82C57.75 94.8406 68.1594 105.25 81 105.25C93.8406 105.25 104.25 94.8406 104.25 82C104.25 69.1594 93.8406 58.75 81 58.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M158.962 86.848V88H150.052V75.4H158.692V76.552H151.384V81.034H157.9V82.168H151.384V86.848H158.962ZM164.994 78.46C166.23 78.46 167.178 78.772 167.838 79.396C168.498 80.008 168.828 80.92 168.828 82.132V88H167.604V86.524C167.316 87.016 166.89 87.4 166.326 87.676C165.774 87.952 165.114 88.09 164.346 88.09C163.29 88.09 162.45 87.838 161.826 87.334C161.202 86.83 160.89 86.164 160.89 85.336C160.89 84.532 161.178 83.884 161.754 83.392C162.342 82.9 163.272 82.654 164.544 82.654H167.55V82.078C167.55 81.262 167.322 80.644 166.866 80.224C166.41 79.792 165.744 79.576 164.868 79.576C164.268 79.576 163.692 79.678 163.14 79.882C162.588 80.074 162.114 80.344 161.718 80.692L161.142 79.738C161.622 79.33 162.198 79.018 162.87 78.802C163.542 78.574 164.25 78.46 164.994 78.46ZM164.544 87.082C165.264 87.082 165.882 86.92 166.398 86.596C166.914 86.26 167.298 85.78 167.55 85.156V83.608H164.58C162.96 83.608 162.15 84.172 162.15 85.3C162.15 85.852 162.36 86.29 162.78 86.614C163.2 86.926 163.788 87.082 164.544 87.082ZM173.524 80.386C173.824 79.75 174.268 79.27 174.856 78.946C175.456 78.622 176.194 78.46 177.07 78.46V79.702L176.764 79.684C175.768 79.684 174.988 79.99 174.424 80.602C173.86 81.214 173.578 82.072 173.578 83.176V88H172.3V78.532H173.524V80.386ZM184.774 87.424C184.534 87.64 184.234 87.808 183.874 87.928C183.526 88.036 183.16 88.09 182.776 88.09C181.888 88.09 181.204 87.85 180.724 87.37C180.244 86.89 180.004 86.212 180.004 85.336V79.612H178.312V78.532H180.004V76.462H181.282V78.532H184.162V79.612H181.282V85.264C181.282 85.828 181.42 86.26 181.696 86.56C181.984 86.848 182.392 86.992 182.92 86.992C183.184 86.992 183.436 86.95 183.676 86.866C183.928 86.782 184.144 86.662 184.324 86.506L184.774 87.424ZM191.924 78.46C193.112 78.46 194.054 78.808 194.75 79.504C195.458 80.188 195.812 81.19 195.812 82.51V88H194.534V82.636C194.534 81.652 194.288 80.902 193.796 80.386C193.304 79.87 192.602 79.612 191.69 79.612C190.67 79.612 189.86 79.918 189.26 80.53C188.672 81.13 188.378 81.964 188.378 83.032V88H187.1V74.644H188.378V80.188C188.726 79.636 189.206 79.21 189.818 78.91C190.43 78.61 191.132 78.46 191.924 78.46Z" fill="white"/>
                                    <path d="M230 58.75C217.159 58.75 206.75 69.1594 206.75 82C206.75 94.8406 217.159 105.25 230 105.25C242.841 105.25 253.25 94.8406 253.25 82C253.25 69.1594 242.841 58.75 230 58.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M197 162L63 162C61.8954 162 61 161.105 61 160L61 122" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M121 106L121 120C121 121.105 120.105 122 119 122L3 122C1.89543 122 0.999999 121.105 0.999999 120L1 106" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M261 106L261 120C261 121.105 260.105 122 259 122L143 122C141.895 122 141 121.105 141 120L141 106" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M343 106L343 120C343 121.105 342.105 122 341 122L283 122C281.895 122 281 121.105 281 120L281 106" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M312 122L312 160C312 161.105 311.105 162 310 162L193 162" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M201 122V162" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M100.604 233.176C101.204 233.776 104.228 235.336 106.076 235.336C109.82 234.712 112.076 233.08 112.076 229.768C112.076 226.096 102.716 224.776 102.716 220.84C102.716 219.424 104.276 218.512 105.284 218.512C106.964 218.536 108.908 219.52 109.364 220.264L111.212 222.736H111.476L110.78 219.04C109.796 218.536 107.012 217.888 106.268 217.888C102.812 218.512 100.724 220.12 100.724 222.568C100.724 226.552 109.628 227.968 109.628 231.28C109.628 233.776 108.236 234.736 106.724 234.736C104.972 234.712 103.46 233.92 102.74 233.008L100.844 229.096H100.58L100.604 233.176ZM124.709 229.144C124.709 225.616 122.885 223.504 119.357 223.432C117.917 223.552 113.405 226.048 113.405 229.528C113.405 233.056 115.157 235.312 118.685 235.312C119.789 235.192 124.709 233.344 124.709 229.144ZM119.501 234.52C117.893 234.52 115.613 232.408 115.613 228.856C115.613 226.552 116.237 224.368 118.541 224.368C120.317 224.368 122.501 226.744 122.501 230.056C122.501 231.64 121.805 234.52 119.501 234.52ZM125.616 229.768C125.616 233.248 127.872 235.288 131.304 235.312C132.552 234.712 134.544 232.6 134.928 232.024L134.592 231.832C134.208 232.408 133.104 233.824 131.976 233.824C129.312 233.824 127.872 231.52 127.872 228.592C127.872 226.288 128.88 223.816 130.848 223.816C131.784 223.816 132.48 225.856 133.032 226.648C133.848 226.72 134.328 226.672 134.952 226.408C134.904 224.632 133.2 223.432 131.304 223.432C128.184 223.912 125.616 226.648 125.616 229.768ZM138.123 219.952C138.819 219.952 139.371 219.4 139.371 218.68C139.371 217.984 138.819 217.432 138.123 217.432C137.427 217.432 136.875 217.984 136.875 218.68C136.875 219.4 137.427 219.952 138.123 219.952ZM135.387 235H140.715V234.88L139.131 234.616V223.768L138.843 223.72H135.627V223.864L136.995 224.128V234.616L135.387 234.88V235ZM141.154 229.672C141.154 233.464 142.954 235.312 145.45 235.312C146.458 234.904 147.97 233.32 149.05 232H149.17L149.122 235H152.698V234.88L151.09 234.616L151.114 224.536C150.514 224.008 149.218 223.432 146.914 223.432C145.306 223.936 141.154 225.928 141.154 229.672ZM143.194 228.808C143.194 225.808 144.106 224.44 146.362 224.44C147.394 224.44 148.234 224.992 148.954 225.88L148.906 231.856C148.042 232.84 147.034 233.584 146.17 233.584C144.778 233.584 143.194 231.76 143.194 228.808ZM153.083 235H158.411V234.88L156.827 234.616V217.024L156.539 217L153.083 217.24V217.384L154.691 217.552V234.616L153.083 234.88V235ZM165.048 235H172.44V234.856L169.776 234.376V227.536L171.912 227.512C172.824 227.44 178.248 227.008 178.224 222.136C178.224 219.4 176.016 218.104 172.608 218.176L165.288 218.2V218.344L167.376 218.824V234.376L165.048 234.856V235ZM169.776 226.6V218.92C169.992 218.728 171.6 218.632 172.008 218.608C174.792 218.632 176.04 220.456 176.04 222.64C176.04 225.496 174.816 226.984 172.44 226.984C171.72 226.984 170.736 226.864 169.776 226.6ZM178.676 224.248L180.38 224.392V230.944C180.38 233.68 181.388 235.144 184.124 235.288C184.58 235.264 186.788 233.728 187.844 232.408H187.94L187.724 234.952L188.012 235H191.42V234.856L189.788 234.448V223.72H185.996V223.84L187.652 224.104V232.24C186.692 233.392 185.06 233.632 184.46 233.632C183.404 233.632 182.516 232.984 182.516 230.512V223.72L178.676 224.128V224.248ZM200.249 241H206.273L206.249 240.832L204.377 240.4V235.072C204.977 235.24 205.697 235.336 206.585 235.336C208.193 234.832 212.417 232.696 212.417 228.952C212.417 225.16 210.545 223.432 208.049 223.432C206.945 223.864 205.265 225.952 204.161 227.368H204.089L204.377 223.72H200.657V223.84L202.265 224.128L202.241 231.04V240.376L200.249 240.832V241ZM191.801 235H197.225V234.88L195.545 234.616V226.312C196.481 225.16 197.345 225.28 197.945 225.496C198.305 225.64 198.665 225.832 199.049 226.264L200.489 224.488C200.057 224.056 199.337 223.6 198.281 223.552C197.825 223.696 196.385 224.848 195.353 226.144H195.257L195.473 223.768L195.185 223.72H192.257V223.864L193.409 224.152V234.616L191.801 234.88V235ZM204.377 232.384V227.416C205.289 226.264 206.345 225.088 207.281 225.088C208.673 225.088 210.377 226.984 210.377 229.936C210.377 232.936 209.393 234.28 207.137 234.28C206.081 234.28 204.377 233.224 204.377 232.384ZM224.506 229.144C224.506 225.616 222.682 223.504 219.154 223.432C217.714 223.552 213.202 226.048 213.202 229.528C213.202 233.056 214.954 235.312 218.482 235.312C219.586 235.192 224.506 233.344 224.506 229.144ZM219.298 234.52C217.69 234.52 215.41 232.408 215.41 228.856C215.41 226.552 216.034 224.368 218.338 224.368C220.114 224.368 222.298 226.744 222.298 230.056C222.298 231.64 221.602 234.52 219.298 234.52ZM225.469 233.872C225.877 234.28 227.773 235.336 229.045 235.336C231.589 234.904 233.341 233.8 233.341 231.544C233.389 228.544 226.981 227.824 226.981 225.64C226.981 224.68 227.485 224.008 228.661 223.936C229.813 223.96 230.605 224.392 231.277 225.064L232.741 226.768H232.909L232.405 224.296C231.277 223.864 229.981 223.456 229.333 223.432C226.981 223.864 225.469 225.304 225.469 226.96C225.469 230.008 231.565 230.32 231.565 232.576C231.565 234.28 230.677 234.88 229.645 234.88C228.733 234.856 227.533 234.184 226.813 233.536L225.685 231.064L225.517 231.088L225.469 233.872ZM243.751 232.24C243.151 232.912 242.023 233.776 240.655 233.776C237.823 233.776 236.287 231.544 236.239 228.736L243.895 228.688C243.847 225.04 242.839 223.336 239.455 223.432C236.335 224.104 234.295 226.432 234.295 229.552C234.295 232.84 236.095 235.216 239.071 235.216C239.503 235.216 239.863 235.192 240.295 235.072C241.735 234.352 242.983 233.512 244.015 232.48L243.751 232.24ZM238.903 224.104C240.439 224.056 241.687 225.4 241.687 227.92C241.687 228.016 241.639 228.16 241.591 228.28L236.239 228.52C236.239 225.832 236.695 224.176 238.903 224.104Z" fill="white"/>
                                    <path d="M312 268.75C299.159 268.75 288.75 279.159 288.75 292C288.75 304.841 299.159 315.25 312 315.25C324.841 315.25 335.25 304.841 335.25 292C335.25 279.159 324.841 268.75 312 268.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M39.138 285.4V298H37.86V287.92L32.91 296.398H32.28L27.33 287.974V298H26.052V285.4H27.15L32.622 294.742L38.04 285.4H39.138Z" fill="white"/>
                                    <path d="M74 268.75C61.1594 268.75 50.75 279.159 50.75 292C50.75 304.841 61.1594 315.25 74 315.25C86.8406 315.25 97.25 304.841 97.25 292C97.25 279.159 86.8406 268.75 74 268.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M170.384 286.552V291.502H176.9V292.654H170.384V298H169.052V285.4H177.692V286.552H170.384Z" fill="white"/>
                                    <path d="M211 268.75C198.159 268.75 187.75 279.159 187.75 292C187.75 304.841 198.159 315.25 211 315.25C223.841 315.25 234.25 304.841 234.25 292C234.25 279.159 223.841 268.75 211 268.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M197 372L63 372C61.8954 372 61 371.105 61 370L61 332" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M121 316L121 330C121 331.105 120.105 332 119 332L3 332C1.89543 332 0.999999 331.105 0.999999 330L1 316" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M261 316L261 330C261 331.105 260.105 332 259 332L143 332C141.895 332 141 331.105 141 330L141 316" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M343 316L343 330C343 331.105 342.105 332 341 332L283 332C281.895 332 281 331.105 281 330L281 316" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M312 332L312 370C312 371.105 311.105 372 310 372L193 372" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M201 332V372" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M45.6587 441.176C46.2587 441.776 49.2827 443.336 51.1307 443.336C54.8747 442.712 57.1307 441.08 57.1307 437.768C57.1307 434.096 47.7707 432.776 47.7707 428.84C47.7707 427.424 49.3307 426.512 50.3387 426.512C52.0187 426.536 53.9627 427.52 54.4187 428.264L56.2667 430.736H56.5307L55.8347 427.04C54.8507 426.536 52.0667 425.888 51.3227 425.888C47.8667 426.512 45.7787 428.12 45.7787 430.568C45.7787 434.552 54.6827 435.968 54.6827 439.28C54.6827 441.776 53.2907 442.736 51.7787 442.736C50.0267 442.712 48.5147 441.92 47.7947 441.008L45.8987 437.096H45.6347L45.6587 441.176ZM58.3873 449H64.4113L64.3873 448.832L62.5153 448.4V443.072C63.1153 443.24 63.8353 443.336 64.7233 443.336C66.3313 442.832 70.5553 440.696 70.5553 436.952C70.5553 433.16 68.6833 431.432 66.1873 431.432C65.0833 431.864 63.4033 433.952 62.2993 435.368H62.2273L62.5153 431.72H58.7953V431.84L60.4033 432.128L60.3793 439.04V448.376L58.3873 448.832V449ZM62.5153 440.384V435.416C63.4273 434.264 64.4833 433.088 65.4193 433.088C66.8113 433.088 68.5153 434.984 68.5153 437.936C68.5153 440.936 67.5313 442.28 65.2753 442.28C64.2193 442.28 62.5153 441.224 62.5153 440.384ZM74.0139 427.952C74.7099 427.952 75.2619 427.4 75.2619 426.68C75.2619 425.984 74.7099 425.432 74.0139 425.432C73.3179 425.432 72.7659 425.984 72.7659 426.68C72.7659 427.4 73.3179 427.952 74.0139 427.952ZM71.2779 443H76.6059V442.88L75.0219 442.616V431.768L74.7339 431.72H71.5179V431.864L72.8859 432.128V442.616L71.2779 442.88V443ZM88.1807 427.952C88.8767 427.952 89.4287 427.4 89.4287 426.68C89.4287 425.984 88.8767 425.432 88.1807 425.432C87.4847 425.432 86.9327 425.984 86.9327 426.68C86.9327 427.4 87.4847 427.952 88.1807 427.952ZM76.9967 443H82.4207V442.88L80.7407 442.616V434.312C81.6767 433.16 82.5407 433.28 83.1407 433.496C83.5007 433.64 83.8607 433.832 84.2447 434.264L85.6847 432.488C85.2527 432.056 84.5327 431.6 83.4767 431.552C83.0207 431.696 81.5807 432.848 80.5487 434.144H80.4527L80.6687 431.768L80.3807 431.72H77.4527V431.864L78.6047 432.152V442.616L76.9967 442.88V443ZM85.4447 443H90.7727V442.88L89.1887 442.616V431.768L88.9007 431.72H85.6847V431.864L87.0527 432.128V442.616L85.4447 442.88V443ZM91.0809 432.416L92.6889 432.464H92.7609L92.8569 440.456C93.0249 442.208 93.8649 443.168 95.7129 443.312C96.9129 442.568 97.5369 442.088 98.7849 441.08L98.6409 440.936C97.4889 441.728 97.0089 441.92 96.2409 441.92C95.5449 441.896 94.9209 441.224 94.9449 439.976L94.8969 432.512L97.7289 432.584L98.6409 432.464V431.768H94.7769L94.8729 428.744L94.5849 428.72L92.9769 431.384L91.0809 432.176V432.416ZM98.8639 432.248L100.568 432.392V438.944C100.568 441.68 101.576 443.144 104.312 443.288C104.768 443.264 106.976 441.728 108.032 440.408H108.128L107.912 442.952L108.2 443H111.608V442.856L109.976 442.448V431.72H106.184V431.84L107.84 432.104V440.24C106.88 441.392 105.248 441.632 104.648 441.632C103.592 441.632 102.704 440.984 102.704 438.512V431.72L98.8639 432.128V432.248ZM112.037 437.672C112.037 441.464 113.837 443.312 116.333 443.312C117.341 442.904 118.853 441.32 119.933 440H120.053L120.005 443H123.581V442.88L121.973 442.616L121.997 432.536C121.397 432.008 120.101 431.432 117.797 431.432C116.189 431.936 112.037 433.928 112.037 437.672ZM114.077 436.808C114.077 433.808 114.989 432.44 117.245 432.44C118.277 432.44 119.117 432.992 119.837 433.88L119.789 439.856C118.925 440.84 117.917 441.584 117.053 441.584C115.661 441.584 114.077 439.76 114.077 436.808ZM123.965 443H129.293V442.88L127.709 442.616V425.024L127.421 425L123.965 425.24V425.384L125.573 425.552V442.616L123.965 442.88V443ZM47.7005 472H55.0925V471.856L52.4285 471.376V464.536L54.5645 464.512C55.4765 464.44 60.9005 464.008 60.8765 459.136C60.8765 456.4 58.6685 455.104 55.2605 455.176L47.9405 455.2V455.344L50.0285 455.824V471.376L47.7005 471.856V472ZM52.4285 463.6V455.92C52.6445 455.728 54.2525 455.632 54.6605 455.608C57.4445 455.632 58.6925 457.456 58.6925 459.64C58.6925 462.496 57.4685 463.984 55.0925 463.984C54.3725 463.984 53.3885 463.864 52.4285 463.6ZM61.3287 461.248L63.0327 461.392V467.944C63.0327 470.68 64.0407 472.144 66.7767 472.288C67.2327 472.264 69.4407 470.728 70.4967 469.408H70.5927L70.3767 471.952L70.6647 472H74.0727V471.856L72.4407 471.448V460.72H68.6487V460.84L70.3047 461.104V469.24C69.3447 470.392 67.7127 470.632 67.1127 470.632C66.0567 470.632 65.1687 469.984 65.1687 467.512V460.72L61.3287 461.128V461.248ZM82.9017 478H88.9257L88.9017 477.832L87.0297 477.4V472.072C87.6297 472.24 88.3497 472.336 89.2377 472.336C90.8457 471.832 95.0697 469.696 95.0697 465.952C95.0697 462.16 93.1977 460.432 90.7017 460.432C89.5977 460.864 87.9177 462.952 86.8137 464.368H86.7417L87.0297 460.72H83.3097V460.84L84.9177 461.128L84.8937 468.04V477.376L82.9017 477.832V478ZM74.4537 472H79.8777V471.88L78.1977 471.616V463.312C79.1337 462.16 79.9977 462.28 80.5977 462.496C80.9577 462.64 81.3177 462.832 81.7017 463.264L83.1417 461.488C82.7097 461.056 81.9897 460.6 80.9337 460.552C80.4777 460.696 79.0377 461.848 78.0057 463.144H77.9097L78.1257 460.768L77.8377 460.72H74.9097V460.864L76.0617 461.152V471.616L74.4537 471.88V472ZM87.0297 469.384V464.416C87.9417 463.264 88.9977 462.088 89.9337 462.088C91.3257 462.088 93.0297 463.984 93.0297 466.936C93.0297 469.936 92.0457 471.28 89.7897 471.28C88.7337 471.28 87.0297 470.224 87.0297 469.384ZM107.158 466.144C107.158 462.616 105.334 460.504 101.806 460.432C100.366 460.552 95.8538 463.048 95.8538 466.528C95.8538 470.056 97.6058 472.312 101.134 472.312C102.238 472.192 107.158 470.344 107.158 466.144ZM101.95 471.52C100.342 471.52 98.0618 469.408 98.0618 465.856C98.0618 463.552 98.6858 461.368 100.99 461.368C102.766 461.368 104.95 463.744 104.95 467.056C104.95 468.64 104.254 471.52 101.95 471.52ZM108.122 470.872C108.53 471.28 110.426 472.336 111.698 472.336C114.242 471.904 115.994 470.8 115.994 468.544C116.042 465.544 109.634 464.824 109.634 462.64C109.634 461.68 110.138 461.008 111.314 460.936C112.466 460.96 113.258 461.392 113.93 462.064L115.394 463.768H115.562L115.058 461.296C113.93 460.864 112.634 460.456 111.986 460.432C109.634 460.864 108.122 462.304 108.122 463.96C108.122 467.008 114.218 467.32 114.218 469.576C114.218 471.28 113.33 471.88 112.298 471.88C111.386 471.856 110.186 471.184 109.466 470.536L108.338 468.064L108.17 468.088L108.122 470.872ZM126.404 469.24C125.804 469.912 124.676 470.776 123.308 470.776C120.476 470.776 118.94 468.544 118.892 465.736L126.548 465.688C126.5 462.04 125.492 460.336 122.108 460.432C118.988 461.104 116.948 463.432 116.948 466.552C116.948 469.84 118.748 472.216 121.724 472.216C122.156 472.216 122.516 472.192 122.948 472.072C124.388 471.352 125.636 470.512 126.668 469.48L126.404 469.24ZM121.556 461.104C123.092 461.056 124.34 462.4 124.34 464.92C124.34 465.016 124.292 465.16 124.244 465.28L118.892 465.52C118.892 462.832 119.348 461.176 121.556 461.104Z" fill="white"/>
                                    <path d="M87 490.75C74.1594 490.75 63.75 501.159 63.75 514C63.75 526.841 74.1594 537.25 87 537.25C99.8406 537.25 110.25 526.841 110.25 514C110.25 501.159 99.8406 490.75 87 490.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                    <path d="M209.884 443H217.276V442.856L214.612 442.376V435.536L216.748 435.512C217.66 435.44 223.084 435.008 223.06 430.136C223.06 427.4 220.852 426.104 217.444 426.176L210.124 426.2V426.344L212.212 426.824V442.376L209.884 442.856V443ZM214.612 434.6V426.92C214.828 426.728 216.436 426.632 216.844 426.608C219.628 426.632 220.876 428.456 220.876 430.64C220.876 433.496 219.652 434.984 217.276 434.984C216.556 434.984 215.572 434.864 214.612 434.6ZM223.512 443H228.84V442.88L227.256 442.616V425.024L226.968 425L223.512 425.24V425.384L225.12 425.552V442.616L223.512 442.88V443ZM229.232 437.672C229.232 441.464 231.032 443.312 233.528 443.312C234.536 442.904 236.048 441.32 237.128 440H237.248L237.2 443H240.776V442.88L239.168 442.616L239.192 432.536C238.592 432.008 237.296 431.432 234.992 431.432C233.384 431.936 229.232 433.928 229.232 437.672ZM231.272 436.808C231.272 433.808 232.184 432.44 234.44 432.44C235.472 432.44 236.312 432.992 237.032 433.88L236.984 439.856C236.12 440.84 235.112 441.584 234.248 441.584C232.856 441.584 231.272 439.76 231.272 436.808ZM241.161 431.864L242.793 432.272V442.616L241.185 442.88V443H246.561V442.88L244.929 442.616V434.312C246.129 433.16 247.521 433.088 248.121 433.088C249.177 433.088 250.065 433.76 250.065 436.232V442.616L248.433 442.88V443H253.809V442.88L252.201 442.616V435.848C252.201 433.112 251.193 431.576 248.457 431.432C248.001 431.456 246.033 432.848 244.737 434.144H244.641L244.857 431.768L244.569 431.72H241.161V431.864ZM263.767 440.24C263.167 440.912 262.039 441.776 260.671 441.776C257.839 441.776 256.303 439.544 256.255 436.736L263.911 436.688C263.863 433.04 262.855 431.336 259.471 431.432C256.351 432.104 254.311 434.432 254.311 437.552C254.311 440.84 256.111 443.216 259.087 443.216C259.519 443.216 259.879 443.192 260.311 443.072C261.751 442.352 262.999 441.512 264.031 440.48L263.767 440.24ZM258.919 432.104C260.455 432.056 261.703 433.4 261.703 435.92C261.703 436.016 261.655 436.16 261.607 436.28L256.255 436.52C256.255 433.832 256.711 432.176 258.919 432.104ZM264.503 432.416L266.111 432.464H266.183L266.279 440.456C266.447 442.208 267.287 443.168 269.135 443.312C270.335 442.568 270.959 442.088 272.207 441.08L272.063 440.936C270.911 441.728 270.431 441.92 269.663 441.92C268.967 441.896 268.343 441.224 268.367 439.976L268.319 432.512L271.151 432.584L272.063 432.464V431.768H268.199L268.295 428.744L268.007 428.72L266.399 431.384L264.503 432.176V432.416ZM272.334 437.672C272.334 441.464 274.134 443.312 276.63 443.312C277.638 442.904 279.15 441.32 280.23 440H280.35L280.302 443H283.878V442.88L282.27 442.616L282.294 432.536C281.694 432.008 280.398 431.432 278.094 431.432C276.486 431.936 272.334 433.928 272.334 437.672ZM274.374 436.808C274.374 433.808 275.286 432.44 277.542 432.44C278.574 432.44 279.414 432.992 280.134 433.88L280.086 439.856C279.222 440.84 278.214 441.584 277.35 441.584C275.958 441.584 274.374 439.76 274.374 436.808ZM284.262 443H289.686V442.88L288.006 442.616V434.312C288.942 433.16 289.806 433.28 290.406 433.496C290.766 433.64 291.126 433.832 291.51 434.264L292.95 432.488C292.518 432.056 291.798 431.6 290.742 431.552C290.286 431.696 288.846 432.848 287.814 434.144H287.718L287.934 431.768L287.646 431.72H284.718V431.864L285.87 432.152V442.616L284.262 442.88V443ZM292.998 431.84L294.102 432.008L298.35 442.568L300.006 442.304L298.326 446.648C297.942 447.608 297.414 447.704 296.934 447.704C296.574 447.704 295.782 447.32 295.014 446.768L293.91 448.544C294.51 448.856 295.326 449.288 295.71 449.288C296.43 449.096 298.398 448.16 298.782 446.672L303.75 432.272L305.79 431.864V431.72H301.518V431.864L303.174 432.248L300.222 441.56L300.198 441.608L300.222 441.224L296.454 432.032L297.606 431.816V431.72H292.998V431.84ZM217.7 472H225.092V471.856L222.428 471.376V464.536L224.564 464.512C225.476 464.44 230.9 464.008 230.876 459.136C230.876 456.4 228.668 455.104 225.26 455.176L217.94 455.2V455.344L220.028 455.824V471.376L217.7 471.856V472ZM222.428 463.6V455.92C222.644 455.728 224.252 455.632 224.66 455.608C227.444 455.632 228.692 457.456 228.692 459.64C228.692 462.496 227.468 463.984 225.092 463.984C224.372 463.984 223.388 463.864 222.428 463.6ZM231.329 461.248L233.033 461.392V467.944C233.033 470.68 234.041 472.144 236.777 472.288C237.233 472.264 239.441 470.728 240.497 469.408H240.593L240.377 471.952L240.665 472H244.073V471.856L242.441 471.448V460.72H238.649V460.84L240.305 461.104V469.24C239.345 470.392 237.713 470.632 237.113 470.632C236.057 470.632 235.169 469.984 235.169 467.512V460.72L231.329 461.128V461.248ZM252.902 478H258.926L258.902 477.832L257.03 477.4V472.072C257.63 472.24 258.35 472.336 259.238 472.336C260.846 471.832 265.07 469.696 265.07 465.952C265.07 462.16 263.198 460.432 260.702 460.432C259.598 460.864 257.918 462.952 256.814 464.368H256.742L257.03 460.72H253.31V460.84L254.918 461.128L254.894 468.04V477.376L252.902 477.832V478ZM244.454 472H249.878V471.88L248.198 471.616V463.312C249.134 462.16 249.998 462.28 250.598 462.496C250.958 462.64 251.318 462.832 251.702 463.264L253.142 461.488C252.71 461.056 251.99 460.6 250.934 460.552C250.478 460.696 249.038 461.848 248.006 463.144H247.91L248.126 460.768L247.838 460.72H244.91V460.864L246.062 461.152V471.616L244.454 471.88V472ZM257.03 469.384V464.416C257.942 463.264 258.998 462.088 259.934 462.088C261.326 462.088 263.03 463.984 263.03 466.936C263.03 469.936 262.046 471.28 259.79 471.28C258.734 471.28 257.03 470.224 257.03 469.384ZM277.158 466.144C277.158 462.616 275.334 460.504 271.806 460.432C270.366 460.552 265.854 463.048 265.854 466.528C265.854 470.056 267.606 472.312 271.134 472.312C272.238 472.192 277.158 470.344 277.158 466.144ZM271.95 471.52C270.342 471.52 268.062 469.408 268.062 465.856C268.062 463.552 268.686 461.368 270.99 461.368C272.766 461.368 274.95 463.744 274.95 467.056C274.95 468.64 274.254 471.52 271.95 471.52ZM278.122 470.872C278.53 471.28 280.426 472.336 281.698 472.336C284.242 471.904 285.994 470.8 285.994 468.544C286.042 465.544 279.634 464.824 279.634 462.64C279.634 461.68 280.138 461.008 281.314 460.936C282.466 460.96 283.258 461.392 283.93 462.064L285.394 463.768H285.562L285.058 461.296C283.93 460.864 282.634 460.456 281.986 460.432C279.634 460.864 278.122 462.304 278.122 463.96C278.122 467.008 284.218 467.32 284.218 469.576C284.218 471.28 283.33 471.88 282.298 471.88C281.386 471.856 280.186 471.184 279.466 470.536L278.338 468.064L278.17 468.088L278.122 470.872ZM296.404 469.24C295.804 469.912 294.676 470.776 293.308 470.776C290.476 470.776 288.94 468.544 288.892 465.736L296.548 465.688C296.5 462.04 295.492 460.336 292.108 460.432C288.988 461.104 286.948 463.432 286.948 466.552C286.948 469.84 288.748 472.216 291.724 472.216C292.156 472.216 292.516 472.192 292.948 472.072C294.388 471.352 295.636 470.512 296.668 469.48L296.404 469.24ZM291.556 461.104C293.092 461.056 294.34 462.4 294.34 464.92C294.34 465.016 294.292 465.16 294.244 465.28L288.892 465.52C288.892 462.832 289.348 461.176 291.556 461.104Z" fill="white"/>
                                    <path d="M257 490.75C244.159 490.75 233.75 501.159 233.75 514C233.75 526.841 244.159 537.25 257 537.25C269.841 537.25 280.25 526.841 280.25 514C280.25 501.159 269.841 490.75 257 490.75Z" fill="#161616" stroke="#646464" stroke-width="1.5"/>
                                  
                                    <g id="points-basic-mode">
                                      <text class="count-matrix" id="nebo1" transform="translate(80 85)">19</text>
                                      <text class="count-matrix" id="zemlia1" transform="translate(228 85)">12</text>
                                      <text class="count-matrix" id="for_self1" transform="translate(312 85)">6</text>
                                      <text class="count-matrix" id="male1" transform="translate(73 294)">10</text>
                                      <text class="count-matrix" id="female1" transform="translate(210 294)">11</text>
                                      <text class="count-matrix" id="socium1" transform="translate(311 294)">4</text>
                                      <text class="count-matrix" id="duhovnoe1" transform="translate(86 516)">18</text>
                                      <text class="count-matrix" id="planetarnoe1" transform="translate(256 516)">16</text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <div class="content-web mx-desc-body">
        <div class="content-central-view">
            <!-- SECTIONS-->
            <section class="page page-width">
                <div class="container container-width">
                    <div class="row">
                        <div class="accordion" id="accordionFlushExample">
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    personal qualities
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-1">
                                        Two energies - The main set of qualities, personality traits from birth, how other people perceive you. Energies that help fulfill your destiny.
                                    </div>
                                    
                                    <div class="text-line"></div>

                                    <div class="matrix-content-desc">
                                        <div class="text-title">
                                            <div class="text-star text-star-fix" id="point-011"></div>
                                            <div class="text-title-content" id="text-title-content-freedesc">
                                                Energy of Service and New Vision
                                                
                                            </div>
                                        </div>
            
                                        <div class="text-2" id="text-2-freedesc">
                                            It manifests itself as the energy of service, when a person wants to bring good to other people, to give not from sacrifice, 
                                            but from fullness. 12 energy people always look at the world differently. It is this view of the world that is needed by those whom they help. 
                                            These are spiritually developing people, capable of serving others, not only at the level of matter, but also at the spiritual level.</br>
                                            </br>
                                            Such a person is distinguished by a creative and unusual view of things, a developed fantasy and imagination. 
                                            He may be considered strange, as if not from this world. 12 people are innovators and creators. 
                                            Usually they are engaged in art and science: musicians, artists, scientists, researchers.
                                        </div>
            
                                        <div class="headline-text" id="headline-011-freedesc">
                                            What you need to work on, what prevents you from achieving the desired result in life in any area:
                                        </div>
            
                                        <div class="list-text">
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-1">
                                                    
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-2">
                                                    The inability to say "no".
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-3">
                                                    Inability to name the price of their services.
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-4">
                                                    He sacrifices his life and his interests to another person.
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-5">
                                                    Obsession and unwillingness to start new life cycles.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-line"></div>

                                    <div class="matrix-content-desc">
                                        <div class="text-title">
                                            <div class="text-star" id="point-022">2</div>
                                            <div class="text-title-content" id="text-title-content-022-freedesc">
                                                Energy of Service and New Vision
                                            </div>
                                        </div>
            
                                        <div class="text-2" id = "text-2-022-freedesc">
                                            These are gray cardinals, actors in life. Observant, mysterious, enigmatic and cautious. They have the ability to persuade, calm, relieve pain. They know how to regulate conflicts, stroke sharp corners and extinguish negative outbursts of emotions.</br>
                                            </br>
                                            They do not rush to leadership positions, most often showing themselves for neutrality. Vanity is not for them. They deeply understand the emotions of others.
                                        </div>
            
                                        <div class="headline-text" id = "headline-2-022-freedesc">
                                            What you need to work on, what prevents you from achieving the desired result in life in any area:
                                        </div>
            
                                        <div class="list-text">
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-6">
                                                   blaalla
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-7">
                                                    The inability to say "no".
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-8">
                                                    Inability to name the price of their services.
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-9">
                                                    He sacrifices his life and his interests to another person.
                                                </div>
                                            </div>
            
                                            <div class="list-text-content">
                                                <div class="desc-star"></div>
                                                <div class="list-text2" id="list-text2-freedesc-10">
                                                    Obsession and unwillingness to start new life cycles.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="matrix-content-button">
                                        <a class="button-standart button-desktop" data-bs-toggle="modal" data-bs-target="#popup">Read Full Description</a>
                                        <a class="button-standart button-mobile" data-bs-toggle="modal" data-bs-target="#popup-mobile">Read Full Description</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Destiny
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-1">
                                        Find out your personal, social, spiritual and planetary purpose and start living in harmony.
                                    </div>

                                    <div class="text-line"></div>

                                    <div class="matrix-content-button">
                                        <a class="button-standart button-desktop" data-bs-toggle="modal" data-bs-target="#popup">Read About Destiny</a>
                                        <a class="button-standart button-mobile" data-bs-toggle="modal" data-bs-target="#popup-mobile">Read Full Description</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Karma of the past
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-1">
                                        These are the tasks that your soul did not have time to cope with in the past incarnation. In this life, the primary task of a person is to work out these tasks in order to achieve happiness.
                                    </div>

                                    <div class="text-line"></div>

                                    <div class="matrix-content-button">
                                        <a class="button-standart button-desktop" data-bs-toggle="modal" data-bs-target="#popup">Read About Karma</a>
                                        <a class="button-standart button-mobile" data-bs-toggle="modal" data-bs-target="#popup-mobile">Read About Karma</a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Comfort Point
                                </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-1">
                                        “The point of mental comfort is the circumstance under which we are filled with a resource. It harmonizes all areas of our lives: finances, health, relationships, creativity and purpose. 
                                    </div>

                                    <div class="text-line"></div>

                                    <div class="matrix-content-button">
                                        <a class="button-standart button-desktop" data-bs-toggle="modal" data-bs-target="#popup">Read About Comfort Point</a>
                                        <a class="button-standart button-mobile" data-bs-toggle="modal" data-bs-target="#popup-mobile">Read About Comfort Point</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Money
                                </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="text-1">
                                            If you have problems with money, most likely one or more energies has gone negative. Carefully read the energy values, be honest with yourself, identify your weaknesses and start working on yourself.
                                        </div>

                                        <div class="text-line"></div>

                                        <div class="matrix-content-button">
                                            <a data-bs-toggle="modal" data-bs-target="#popup" class="button-standart button-desktop">Read About Comfort Point</a>
                                            <a class="button-standart button-mobile" data-bs-toggle="modal" data-bs-target="#popup-mobile">Read About Comfort Point</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-headingSix" aria-expanded="false" aria-controls="flush-headingSix">
                                    Talents
                                </button>
                                </h2>
                                <div id="flush-headingSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="text-1">
                                            Talents are given to us for the realization of life's tasks. You can determine which business or skill - dancing, numbers, letters, healing, etc. - you are predisposed from birth.
                                        </div>

                                        <div class="text-line"></div>

                                        <div class="matrix-content-button">
                                            <a data-bs-toggle="modal" data-bs-target="#popup" class="button-standart button-desktop">Read About Your Talents</a>
                                            <a data-bs-toggle="modal" data-bs-target="#popup-mobile" class="button-standart button-mobile">Read About Your Talents</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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


    <!-- Pop up -->
    <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="popup" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content modal-background">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="popup"></h1>
              <button type="button" class="btn-close-mx" data-bs-dismiss="modal" aria-label="Close"><div class="close-icon"></div></button>
            </div>
            <div class="modal-body">
              <div class="headline-popup">
                Learn More <span style="font-style: normal;">About Yourself</span></br> & Change Your Life Now
              </div>
              <div class="text-popup">
                Read your full descriptions in the categories of Destiny, Talents, Finance, Personality, Comfort Point and Karma and start changing your life for the better right now!
              </div>

              <div class="cost-popup">
                $20.00
              </div>

              <div class="button-content-popup">
                <a href="{{route('checkout')}}" class="button-classic">Calculate Matrix</a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Pop up mobile -->
    <div class="modal modal-mobile fade" id="popup-mobile" tabindex="-1" aria-labelledby="popup-mobile" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable">
          <div class="modal-content modal-background">
            <div class="modal-body">
              <div class="content-modal-mobile">
                    <div class="close-content">
                        <button type="button" class="btn-close-mx" data-bs-dismiss="modal" aria-label="Close"><div class="close-icon"></div></button>
                    </div>

                    <div class="headline-popup-2">
                        Learn More <span style="font-style: normal;"></br> About Yourself</span> & Change Your</br> Life Now
                    </div>

                    <div class="text-popup-2">
                        Read your full descriptions in the categories of Destiny, Talents, Finance, Personality, Comfort Point and Karma and start changing your life for the better right now!
                    </div>
        
                    <div class="cost-popup">
                        $20.00
                    </div>
    
                    <div class="button-content-popup">
                        <a href="{{route('checkout')}}" class="button-classic">Calculate Matrix</a>
                    </div>
    
                    <div class="line-popup"></div>
    
                    <div class="popup-content">
                        <div class="title-popup-mobile">
                            What You Learn
                        </div>
        
                        <div class="content-popup-mobile">
                            <div class="mx-mob-pop">
                                <div class="star-pop"></div>
                                <div class="pop-title">
                                    Destination
                                </div>
                                <div class="pop-desc">
                                    Find your purpose, understand your uniqueness and individuality.
                                </div>
                            </div>
        
                            <div class="mx-mob-pop">
                                <div class="star-pop"></div>
                                <div class="pop-title">
                                    Talents
                                </div>
                                <div class="pop-desc">
                                    You’ll reveal your hidden talents, understand what you are predisposed to and where to start searching for yourself.
                                </div>
                            </div>
        
                            <div class="mx-mob-pop">
                                <div class="star-pop"></div>
                                <div class="pop-title">
                                    Finance
                                </div>
                                <div class="pop-desc">
                                    You’ll learn the areas of self-realization, how to achieve professional and financial success.
                                </div>
                            </div>
        
                            <div class="mx-mob-pop">
                                <div class="star-pop"></div>
                                <div class="pop-title">
                                    Character
                                </div>
                                <div class="pop-desc">
                                    Get to know yourself better, your strengths and weaknesses, understand how others see you and how you interact with the world.
                                </div>
                            </div>
        
                            <div class="mx-mob-pop">
                                <div class="star-pop"></div>
                                <div class="pop-title">
                                    Karma
                                </div>
                                <div class="pop-desc">
                                    You will learn about your past life and the tasks that need to be solved in the current incarnation in order to start living happily.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="matrix-down-mobile"></div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div id="row" style="display:none">
        <div id="table2">
            <p style="margin-bottom:15px;margin-top:10px"><strong>рт здовя</strong></p>
            <table class="table health-map-table">
                <tbody>
                    <tr>
                        <th>ФИЗИА</th>
                        <th>ЭЕРГЯ</th>
                        <th>МОЦИ</th>
                        <th>НАЗНИЕ ЧКРЫ</th>
                    </tr>
                    <tr class="child_2">
                        <td id="purp-1">19</td>
                        <td id="purp-2">12</td>
                        <td id="purp-3">4</td>
                        <td class="td_chakra">7. Сахрара</td>
                    </tr>
                    <tr class="child_3">
                        <td id="blue-1">22</td>
                        <td id="blue-2">17</td>
                        <td id="blue-3">12</td>
                        <td class="td_chakra">6. Аджна</td>
                    </tr>
                    <tr class="child_4">
                        <td id="cyan-1">3</td>
                        <td id="cyan-2">5</td>
                        <td id="cyan-3">8</td>
                        <td class="td_chakra">5. Вшудх</td>
                    </tr>
                    <tr class="child_5">
                        <td id="green-1">14</td>
                        <td id="green-2">16</td>
                        <td id="green-3">3</td>
                        <td class="td_chakra">4. Анахта</td>
                    </tr>
                    <tr class="child_6">
                        <td id="yellow-1">11</td>
                        <td id="yellow-2">11</td>
                        <td id="yellow-3">22</td>
                        <td class="td_chakra">3. Манипра</td>
                    </tr>
                    <tr class="child_7">
                        <td id="orange-1">17</td>
                        <td id="orange-2">21</td>
                        <td id="orange-3">11</td>
                        <td class="td_chakra">2. вадхстана</td>
                    </tr>
                    <tr class="child_8">
                        <td id="red-1">6</td>
                        <td id="red-2">10</td>
                        <td id="red-3">16</td>
                        <td class="td_chakra">1. Мулдхаа</td>
                    </tr>
                    <tr class="child_9">
                        <td id="total-1">11</td>
                        <td id="total-2">11</td>
                        <td id="total-3">13</td>
                        <td class="td_chakra">ИТГО</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="table1">
            <table id="prednazn">
                <tbody>
                    <tr valign="top">
                        <td colspan="4">
                            <h3>Пос се:</h3>
                        </td>
                        <td width="10%"></td>
                        <td colspan="4">
                            <h3>Сиализия:</h3>
                        </td>
                    </tr>
                    <tr style="height:5px">
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            оеинение ужкого и жекоо. Вытривани взимооношений.
                            Спсоноси, навыки,
                            умеи.
                        </td>
                        <td width="6%"></td>
                        <td colspan="4">
                            Социана  родовая сстеы. езульаты и прнние в соиуме.
                        </td>
                    </tr>
                    <tr style="height:5px">
                        <td></td>
                    </tr>
                    <tr style="font-size:140%;position:relative">
                        <td>б: </td>
                        <td>
                            <span id="nebo1">22</span>
                        </td>
                        <td rowspan="2">
                            <img src="data:image/png;base64,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"
                                width="20" height="75">
                        </td>
                        <td rowspan="2">
                            <span id="for_self1">11</span>
                        </td>
                        <td></td>
                        <td>М: </td>
                        <td>
                            <span id="male1">20</span>
                        </td>
                        <td rowspan="2">
                            <img src="data:image/png;base64,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"
                                width="20" height="75">
                        </td>
                        <td rowspan="2">
                            <span id="socium1">4</span>
                        </td>
                    </tr>
                    <tr style="font-size:140%">
                        <td>Земля: </td>
                        <td><span id="zemlia1">7</span></td>
                        <td></td>
                        <td>Ж: </td>
                        <td><span id="female1">11</span></td>
                    </tr>
                    <tr>
                        <td style="height:35px"></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h3>Дуовная&nbsp;гамния:</h3>
                        </td>
                        <td></td>
                        <td colspan="4">
                            <h3>Платарное:</h3>
                        </td>
                    </tr>
                    <tr style="height:5px">
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            Духовый зачет. то я для боа? е бжествеое во мне?
                        </td>
                        <td></td>
                        <td colspan="4">
                            ланетарно преназнчние чела
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9" style="height:10px"></td>
                    </tr>
                    <tr style="font-size:160%">
                        <td colspan="4" style="text-align:center">
                            <span id="duhovnoe1">15</span>
                        </td>
                        <td></td>
                        <td colspan="4" style="text-align:center">
                            <span id="planetarnoe1">19</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="matrixL">
            <b>та ждния: </b><i id="date">&nbsp;19/12/2022</i><br>
            <b>Возрас: </b><i id="age">&nbsp;-1</i><br>
            <b>День недели: </b><i id="weekday">Понеделнк</i><br>
            <b>рочый кд мужскго рда: </b><i id="m3">4, 16, 20</i><br>
            <b>роичый код женкго рда: </b><i id="w3">18, 11, 11</i><br>
            <b>ила род: </b><i id="power_root">13</i><br>
            <b>Код внтреннй слы: </b><i id="power_inner">11, 13, 6</i><br>
        </div>
    </div>
<script>


const yourText = $('.mx-nav').find('a, p');
$(window).on('scroll', function () {
  const headerOffset = $('.mx-nav').offset().top;
  const breakPoint = 10;
  const defaultColor = 'black';
  if (headerOffset > breakPoint) {
    // you scroll down
    $(".mx-nav").css('background', '#000000');
  } else {
    // you are at the top of the page
    $(".mx-nav").css('background', 'transparent');
  }
});

// Payment script
var radios = document.querySelectorAll('input[type=radio][name="paymentSelect"]');
var knopka = document.getElementById('payment-button');
console.log(knopka)
function changeHandler(event) {
   if ( this.value === 'paypal' ) {
    $('.payment-select.paypal').addClass('active');
    
knopka.outerHTML = `<div class="payment-button" id="payment-button">
<a href="/processPaypal" class="payment">Continue</a>
</div>`
    $('.payment-select.cards').removeClass('active');
   } else if ( this.value === 'cards' ) {
    $('.payment-select.paypal').removeClass('active');
    $('.payment-select.cards').addClass('active');
   }  
}

Array.prototype.forEach.call(radios, function(radio) {
   radio.addEventListener('change', changeHandler);
});

function correct(n) {
  if (n < 0) { throw "Negative value" }
  if (n <= 22) { return n }
  else {
    var sum = 0; var number = n
    while (number) { sum += number % 10; number = Math.floor(number / 10); }
  }
  return correct(sum)
}
function count_line(n1, n2) {
  var line = new Array(7).fill(0); line[3] = correct(n1 + n2)
  line[1] = correct(n1 + line[3])
  line[5] = correct(n2 + line[3])
  line[0] = correct(n1 + line[1])
  line[2] = correct(line[1] + line[3])
  line[4] = correct(line[3] + line[5])
  line[6] = correct(n2 + line[5])
  return line
}
function reversing() { document.getElementById("buttons").style.visibility = "visible"; document.getElementById("whole").style.display = "none"; }
function define_snow() {
  var all_array = ["point-03", "point-02", "point-01", "point-04", "point-05", "point-07", "point-06", "point-09", "point-08", "point-10", "point-15", "point-12", "point-13", "point-14", "point-11", "point-16", "point-20", "point-18", "point-19", "point-17", "point-21", "point-22", "point-25", "point-26", "point-23", "point-24", "point-29", "point-30", "point-27", "point-28", "point-31", "point-32", "point-33", "point-34", "point-35", "point-36", "point-37", "point-38", "point-39", "point-40", "point-41", "point-42", "point-43", "point-44", "point-45", "point-46", "point-47", "point-48", "point-49", "point-51", "point-52", "point-53", "point-54", "point-55", "point-56", "point-57", "point-58", "point-59", "point-60", "point-61", "point-62", "point-63", "point-64", "point-65", "point-66", "point-67", "point-68", "point-69", "point-70", "point-71", "point-72", "point-73", "point-74", "point-75", "point-76", "point-77", "point-78", "point-79", "point-80", "point-81", "point-82", "point-83", "point-84", "point-85", "point-86", "point-87",]

  const dateString = document.getElementById('title-schem').getAttribute('value'); // Здесь укаывается дата
  const true_year = parseInt(dateString.split('-')[0]); const true_month = parseInt(dateString.split('-')[1]); const true_day = parseInt(dateString.split('-')[2]); 

  var temp = new Date(dateString); 
  var userTimezoneOffset = temp.getTimezoneOffset() * 60000; 
  const date = new Date(temp.getTime() - userTimezoneOffset); 
  const year = correct(true_year)

  const month = correct(true_month)
  const day = correct(true_day)
  var arr = []; arr.push(day, month, year, correct(day + month + year))
  arr.push(correct(arr[0] + arr[1] + arr[2] + arr[3]))
  arr.push(correct(arr[0] + arr[1]), correct(arr[1] + arr[2]), correct(arr[2] + arr[3]), correct(arr[3] + arr[0]))
  arr.push(correct(arr[3] + arr[4]), correct(arr[2] + arr[4]))
  arr.push(correct(arr[9] + arr[10]))
  arr.push(correct(arr[9] + arr[11]), correct(arr[10] + arr[11]))
  arr.push(correct(arr[0] + arr[4]))
  arr.push(correct(arr[1] + arr[4]))
  arr.push(correct(arr[0] + arr[14]))
  arr.push(correct(arr[1] + arr[15]))
  arr.push(correct(arr[3] + arr[9]))
  arr.push(correct(arr[2] + arr[10]))
  arr.push(correct(arr[4] + arr[14]))
  arr.push(correct(arr[4] + arr[15]))
  arr.push(correct(arr[5] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[5] + arr[22]))
  arr.push(correct(arr[6] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[6] + arr[24]))
  arr.push(correct(arr[7] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[7] + arr[26]))
  arr.push(correct(arr[8] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[8] + arr[28]))
  const final = arr.concat(count_line(arr[0], arr[5]), count_line(arr[5], arr[1]), count_line(arr[1], arr[6]), count_line(arr[6], arr[2]), count_line(arr[2], arr[7]), count_line(arr[7], arr[3]), count_line(arr[3], arr[8]), count_line(arr[8], arr[0]))
  var arrayLength = all_array.length; document.getElementById('purp-1').innerHTML = arr[0]
  document.getElementById('purp-2').innerHTML = arr[1]
  document.getElementById('purp-3').innerHTML = correct(arr[0] + arr[1])
  document.getElementById('blue-1').innerHTML = arr[16]
  document.getElementById('blue-2').innerHTML = arr[17]
  document.getElementById('blue-3').innerHTML = correct(arr[16] + arr[17])
  document.getElementById('cyan-1').innerHTML = arr[14]
  document.getElementById('cyan-2').innerHTML = arr[15]
  document.getElementById('cyan-3').innerHTML = correct(arr[14] + arr[15])
  document.getElementById('green-1').innerHTML = arr[20]
  document.getElementById('green-2').innerHTML = arr[21]
  document.getElementById('green-3').innerHTML = correct(arr[20] + arr[21])
  document.getElementById('yellow-1').innerHTML = arr[4]
  document.getElementById('yellow-2').innerHTML = arr[4]
  document.getElementById('yellow-3').innerHTML = correct(arr[4] + arr[4])
  document.getElementById('orange-1').innerHTML = arr[10]
  document.getElementById('orange-2').innerHTML = arr[9]
  document.getElementById('orange-3').innerHTML = correct(arr[10] + arr[9])
  document.getElementById('red-1').innerHTML = arr[2]
  document.getElementById('red-2').innerHTML = arr[3]
  document.getElementById('red-3').innerHTML = correct(arr[2] + arr[3])
  document.getElementById('total-1').innerHTML = correct(arr[0] + arr[16] + arr[14] + arr[20] + arr[4] + arr[10] + arr[2])
  document.getElementById('total-2').innerHTML = correct(arr[1] + arr[17] + arr[15] + arr[21] + arr[4] + arr[9] + arr[3])
  document.getElementById('total-3').innerHTML = correct(correct(arr[0] + arr[1]) + correct(arr[16] + arr[17]) + correct(arr[14] + arr[15]) + correct(arr[20] + arr[21]) + correct(arr[4] + arr[4]) + correct(arr[10] + arr[9]) + correct(arr[2] + arr[3]))
  document.getElementById('nebo1').innerHTML = correct(arr[1] + arr[3])
  document.getElementById('zemlia1').innerHTML = correct(arr[0] + arr[2])
  document.getElementById('for_self1').innerHTML = correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2]))
  document.getElementById('male1').innerHTML = correct(arr[5] + arr[7])
  document.getElementById('female1').innerHTML = correct(arr[6] + arr[8])
  document.getElementById('socium1').innerHTML = correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))
  document.getElementById('duhovnoe1').innerHTML = correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])))
  document.getElementById('planetarnoe1').innerHTML = correct(correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])) + correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))))
  var today = new Date()
  const weekday = ["Воскресенье", "онедельник", "Втоник", "Среда", "Четерг", "Пятница", "Сббота"]; document.getElementById('date').innerHTML = '&nbsp;' + true_day + '/' + true_month + '/' + true_year
  document.getElementById('age').innerHTML = '&nbsp;' + Math.floor((today - date) / (1000 * 60 * 60 * 24 * 365))
  document.getElementById('weekday').innerHTML = weekday[date.getDay()]; document.getElementById('m3').innerHTML = arr[5] + ', ' + arr[7] + ', ' + correct(arr[5] + arr[7])
  document.getElementById('w3').innerHTML = arr[6] + ', ' + arr[8] + ', ' + correct(arr[6] + arr[8])
  document.getElementById('power_root').innerHTML = correct(arr[5] + arr[6] + arr[7] + arr[8])
  document.getElementById('power_inner').innerHTML = correct(arr[4]) + ', ' + correct(arr[5] + arr[6] + arr[7] + arr[8]) + ', ' + correct(correct(arr[4]) + correct(arr[5] + arr[6] + arr[7] + arr[8]))
  let dataz = [];
  for (var i = 0; i < arrayLength; i++) { 
  }
fetch('https://matrixfate.com/api/matrixes')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    dataz = data;
    for (var i = 0; i < arrayLength; i++) { 

      if(all_array[i] == "point-01"){
        document.getElementById("point-011").innerHTML = final[i]; 
        dataz.matrixes.forEach(element => {
          if(element.number == final[i]){
            let element2 =  element.what_need_to_change.split(".")
            document.getElementById('text-title-content-freedesc').innerHTML = element.energy_name;
            document.getElementById('list-text2-freedesc-1').innerHTML = element2[0]
            document.getElementById('list-text2-freedesc-2').innerHTML = element2[1]
            document.getElementById('list-text2-freedesc-3').innerHTML = element2[2]
            document.getElementById('list-text2-freedesc-4').innerHTML = element2[3]
            document.getElementById('list-text2-freedesc-5').innerHTML = element2[4]
            document.getElementById('text-2-freedesc').innerHTML = element.text
            document.getElementById('headline-011-freedesc').innerHTML = element.name
          }
        });
      }
      if(all_array[i] == "point-02"){
        document.getElementById("point-022").innerHTML = final[i]; 
        dataz.matrixes.forEach(element => {
          if(element.number == final[i]){
  
           let element2 =  element.what_need_to_change.split(".")
           document.getElementById('list-text2-freedesc-6').innerHTML = element2[0]
           document.getElementById('list-text2-freedesc-7').innerHTML = element2[1]
           document.getElementById('list-text2-freedesc-8').innerHTML = element2[2]
           document.getElementById('list-text2-freedesc-9').innerHTML = element2[3]
           document.getElementById('list-text2-freedesc-10').innerHTML = element2[4]
            document.getElementById('text-title-content-022-freedesc').innerHTML = element.energy_name;
            document.getElementById('text-2-022-freedesc').innerHTML = element.text
            document.getElementById('headline-2-022-freedesc').innerHTML = element.name
          }
        });
      }
      
      document.getElementById(all_array[i]).innerHTML = final[i]
      if(all_array[i] == "point-14"){
        document.getElementById(all_array[i]).innerHTML = final[i] + 12
      }
      if(all_array[i] == "point-21"){
        document.getElementById(all_array[i]).innerHTML = final[i] + 3
      }
      if(all_array[i] == "point-13" || all_array[i] == "point-12"){
        document.getElementById(all_array[i]).innerHTML = final[i] -3
      }
     }
  });

  
  return true
};




</script>
</body>
</html>