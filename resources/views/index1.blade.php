<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h6 class="logo me-auto"><a href="index.html">DBIT,Mampetta</a></h6>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto"><img src="data:image/jpeg;base64,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" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('profile') }}">profile</a></li>
          <li><a class="nav-link scrollto active" href="{{ route('leave') }}">leave</a></li>
          <li><a class="getstarted scrollto" href="#">Login</a></li>
          @yield('search')
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex justify-content-center justify-content-lg-start">            
            @yield('content')
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          
        </div>
      </div>
    </div>

  </section><!-- End Hero --> 

  

  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

  To search patient data from a table using a phone number in Laravel with AJAX and jQuery, you'll need to follow a few steps. I'll outline the general process for you:

Set up the route:
In your web.php file, define a route that will handle the AJAX request. For example:

php
Copy code
Route::get('/search', 'PatientController@search')->name('search');
Create the controller method:
In your PatientController, create a method named search that will handle the search logic. This method will receive the AJAX request and return the search results. Here's an example implementation:

php
Copy code
public function search(Request $request)
{
    $phoneNumber = $request->input('phone_number');

    $patient = Patient::where('phone_number', $phoneNumber)->first();

    return response()->json($patient);
}
Create the search form:
In your HTML view, create a search form that includes an input field for the phone number and a button to trigger the search. Give each element an appropriate ID or class to target them with jQuery. For example:

html
Copy code
<input type="text" id="phone_number_input">
<button id="search_button">Search</button>
<div id="search_results"></div>
Write the JavaScript code:
Include jQuery in your HTML file and write the JavaScript code to handle the AJAX request and update the search results dynamically. Here's an example using jQuery's $.ajax() method:

javascript
Copy code
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search_button').click(function() {
            var phoneNumber = $('#phone').val();

            $.ajax({
                url: '{{ route("search") }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    phone_number: phoneNumber
                },
                success: function(response) {
                    // Update the search results in the DOM
                    if (response) {
                        var resultsHtml = '<p>Name: ' + response.name + '</p>';
                        resultsHtml += '<p>Email: ' + response.email + '</p>';
                        // Add more fields as needed

                        $('#search_results').html(resultsHtml);
                    } else {
                        $('#search_results').html('No results found.');
                    }
                }
            });
        });
    });
</script>
</body>

</html>