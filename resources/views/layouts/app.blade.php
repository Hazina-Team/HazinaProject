
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ !empty($header_title) ? $header_title : '' }} - Ofisi ya Msajili wa Hazina</title>
  <link rel="icon" type="image/png" href="{{ url('public/assets/img/hazinalogo.png')}}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('public/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ url('public/assets/css/components.css')}}">
  <link rel="stylesheet" href="{{ url('public/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  
  <!-- Ionicons CSS -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ url('public/assets/css/custom.css')}}">
  
  <style>
      .banner-img img {
    width: 100%;
    height: 100px; /* Set the desired height */
    object-fit: cover; /* Ensures the image covers the area while maintaining aspect ratio */
    border-radius: 8px; /* Optional: Adds rounded corners to the image */
  }


  .responsive-heading {
    font-size: 2rem; /* Default font size for large screens */
  }

  @media (max-width: 1200px) {
    .responsive-heading {
      font-size: 2.5rem;
    }
  }

  @media (max-width: 992px) {
    .responsive-heading {
      font-size: 2rem;
    }
  }

  @media (max-width: 768px) {
    .responsive-heading {
      font-size: 1.75rem;
    }
  }

  @media (max-width: 576px) {
    .responsive-heading {
      font-size: 1.5rem;
    }
  }

  @media (max-width: 400px) {
    .responsive-heading {
      font-size: 1.25rem;
    }
  }
  </style>
  <!-- Favicon -->
  <link rel='shortcut icon' type='image/x-icon' href="{{ url('public/assets/img/logo.jpeg')}}">
  @yield('style')
</head>


<body>


  <!-- <div class="loader"></div> -->
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')


  <!-- General JS Scripts -->
  <script src="{{ url('public/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ url('public/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ url('public/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ url('public/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{ url('public/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ url('public/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ url('public/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ url('public/assets/js/custom.js')}}"></script>

  <script src="{{ url('public/assets/js/page/datatables.js')}}"></script>

 
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>