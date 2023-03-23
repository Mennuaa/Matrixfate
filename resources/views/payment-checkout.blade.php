
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
  crossorigin="anonymous">
<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class='row'>
      <div class='col-md-4'></div>
      <div class='col-md-4'>
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
        <form accept-charset="UTF-8" action="{{route('session')}}" class="require-validation"
          data-cc-on-file="false"
          data-stripe-publishable-key="SET_YOUR_PUBLISHED_KEY_HERE"
          id="payment-form" method="post">
          @csrf
          <input type="hidden" name="_token" value="{{csrf_token()}}" >
          <div class='form-row'>
            <div class='col-xs-12 form-group required'>
              <label class='control-label'>Card Holder Name</label> <input
                class='form-control' size='4' type='text' placeholder="Enter Card Holder Name">
            </div>
          </div>
          <div class='form-row'>
            <div class='col-xs-12 form-group card required'>
              <label class='control-label'>Card Number</label> <input
                autocomplete='off' class='form-control card-number' size='20'
                type='text' placeholder="Enter Card number">
            </div>
          </div>
          <div class='form-row'>
            <div class='col-xs-4 form-group cvc required'>
              <label class='control-label'>CVC</label> <input
                autocomplete='off' class='form-control card-cvc'
                placeholder='CVV'  type='text'>
            </div>
            <div class='col-xs-4 form-group expiration required'>
              <label class='control-label'>Expiration</label> <input
                class='form-control card-expiry-month' placeholder='MM' size='2'
                type='text'>
            </div>
            <div class='col-xs-4 form-group expiration required'>
              <label class='control-label'>YEAR</label> <input
                class='form-control card-expiry-year' placeholder='YYYY'
                type='text'>
            </div>
          </div>
          <!-- <div class='form-row'>
            <div class='col-md-12'>
              <div class='form-control total btn btn-info'>
                Total: <span class='amount'>$300</span>
              </div>
            </div>
          </div> -->
          <div class='form-row'>
            <div class='col-md-12 form-group'>
              <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;">Confirm</button>
            </div>
          </div>
          <div class='form-row'>
            <div class='col-md-12 error form-group hide'>
              <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
            </div>
          </div>
        </form>
        @if ((Session::has('success-message')))
        <div class="alert alert-success col-md-12">{{
          Session::get('success-message') }}</div>
        @endif @if ((Session::has('fail-message')))
        <div class="alert alert-danger col-md-12">{{
          Session::get('fail-message') }}</div>
        @endif
      </div>
      <div class='col-md-4'></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"
    integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
  <script>
    $(function() {
        $('form.require-validation').bind('submit', function(e) {
          var $form         = $(e.target).closest('form'),
              inputSelector = ['input[type=email]', 'input[type=password]',
                               'input[type=text]', 'input[type=file]',
                               'textarea'].join(', '),
              $inputs       = $form.find('.required').find(inputSelector),
              $errorMessage = $form.find('div.error'),
              valid         = true;

          $errorMessage.addClass('hide');
          $('.has-error').removeClass('has-error');
          $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
              $input.parent().addClass('has-error');
              $errorMessage.removeClass('hide');
              e.preventDefault(); // cancel on first error
            }
          });
        });
      });
    </script>
</body>
</html>