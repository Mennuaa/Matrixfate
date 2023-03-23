<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix of Fate - Main</title>
    
    <!-- CSS -->
    <link href="/media/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/media/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/media/css/main.css">
    <link rel="stylesheet" href="/media/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


	<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_LIVE_CLIENT_ID')}}"></script>

    <!-- JS -->
    <script src="/media/js/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="media/js/bootstrap.min.js"></script>
    <script src="media/js/jquery-ui.min.js"></script>
    <script src="media/js/all.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    
    .btn-close-mx{
        display:none;
    }
    @media screen and (max-width:675px){
        .btn-close-mx{
        display:block;
    }
    }
</style>
<body class="mx-payment-body">
    <!-- HEADER -->
    <header class="header-matrix-payment display-mobile">
        <div class="container">
            <div class="navbar-mx fixed-top mx-nav">
                <div class="container">
                    <nav class="d-flex flex-wrap justify-content-center py-4">
                        <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                          <div class="logotype"></div>
                        </a>
                    </nav>
                </div>
            </div>
        </div>    
    </header>

   <a onclick="onClickXPayment()" style="position:absolute;top:10px;right:12px;width:30px;height:30px;" href="{{route('freedesc')}}" type="button" class="btn-close-mx btn-close-mobile" ><div onclick="onClickXPayment()" class="close-icon"></div></a>

    <div class="form-payment">
        <div class="auth-container">
            <div class="headline-payment">
                <div class="headline-payment-1">
                    Select
                </div>
    
                <div class="headline-payment-2">
                    Payment Method
                </div>
            </div>
    
            <div class="select-method">
                <label class="payment-select paypal" name="paypal" id="#paypal-method">
                    <div class="select-form">
                        <input class="form-check-input" type="radio" name="paymentSelect" id="paymentSelect" value="paypal">
                    </div>
    
                    <div class="center-payment">
                        <div class="paypal-payment"></div>
                    </div>
                </label>
    
                <label class="payment-select cards active" name="card" id="#cards-method">
                    <div class="select-form">
                        <input class="form-check-input" type="radio" name="paymentSelect" id="paymentSelect" value="cards">
                    </div>
                    
                    <div class="center-payment">
                        <div class="method-line-1">
                            <div class="payment-logo-visa"></div>
                            <div class="payment-logo-mastercard"></div>
                        </div>
    
                        <div class="method-line-2">
                            <div class="payment-logo-americanexpress"></div>
                                <div class="payment-logo-discover"></div>
                        </div>
                    </div>
                </label>
            </div>
    
            <div class="line-payment"></div>
    
            <div class="total-payment">
                <div class="text-payment">
                    Total:
                </div>
    
                <div class="price-payment">
                    $20.00
                </div>
            </div>
    
            <form method="POST" action="{{route('session')}}" id="payment-button" class="payment-button">
            @csrf
          <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <button style="width:100%;" type="submit" class="payment" id="continue">Continue</button>
            </form> 
        </div>
    </div>

    <script src="media/js/main.js"></script>
    <script>

       function onClickXPayment(){
           window.location.href = "https://matrixfate.com/freedesc"
       }
    </script>
</body>
</html>