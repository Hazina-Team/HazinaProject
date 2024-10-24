<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forgot Password - OFISI YA MSAJILI WA HAZINA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('public/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ url('public/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ url('public/assets/css/custom.css')}}">
  <link rel="icon" type="image/png" href="{{ url('public/assets/img/hazinalogo.png')}}">

  <style>

  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
  <section class="section vh-100 d-flex align-items-center justify-content-center">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>
              <div class="card-body">
              @include('_massage')
                <form action="" method="post" >
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1"  autofocus>
                    <div class="float-right">
                        <a href="{{ url('login')}}" class="text-small">
                          Login
                        </a>
                      </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Forgot
                    </button>
                  </div>
                </form>
                
              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't your? <a href="auth-register.html">Forget Password</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ url('public/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ url('public/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ url('public/assets/js/custom.js')}}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>    