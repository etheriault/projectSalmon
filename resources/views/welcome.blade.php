
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schedule Junkie - We find time so you don't waste yours</title>

    <!-- Bootstrap core CSS -->
    <link href= " {{ URL::asset('css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href= " {{ URL::asset('css/all.min.css') }} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href=" {{ URL::asset('css/magnific-popup.css') }} " rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href=" {{ URL::asset('css/freelancer.min.css') }} " rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Get Scheduling</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/Schedule.html">Schedule</a>
                        </li>
                    @guest
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                            
                    @else

                        <li class="nav-item active">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                            
                    @endguest
                  </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-white text-primary text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="{{ URL::asset('schedule_junkie.png') }} " alt="">
        <h3 class="text-uppercase mb-3">We Find Time So You Don't Waste Yours</h3>
        <hr class="star-primary">
        <h3 class="font-weight-light mb-3">Scheduling - Meetings - Planning</h3>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Pricing</h2>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Five Calendars</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Integrated to Major Mail Servers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can Check Available Schedules</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Event Scheduling</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Single Day Viewing</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Scheduling Kept Private</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$1<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Calendars</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Integrated to Major Mail Servers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can Check Available Schedules</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Event Scheduling</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Single Day Viewing</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Scheduling Kept Private</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$2<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Calendars</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>SMS Meeting Notifications</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Email Meeting Notifications</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Integrated to Major Mail Servers</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Event Scheduling</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Multiday Viewing</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Developer API Access</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>
      <!-- Entreprise Tier -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Entreprise</h5>
            <h6 class="card-price text-center">$5<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Calendars</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Whitelabeling</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Custom Integration</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dashboard & Analytics</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Developer API Access</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Schedule Junkie was started in a startup weekend in 2018 from an idea presented by Bijan. The group of computer programmers, engineers, and sales rallied around Bijan to create something new in the marketplace that could make an impact for decades to come. </p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this product is the perfect starting point!</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fas fa-download mr-2"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Queen Street
              <br>Charlottetown, PEI</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Schedule Junkie</h4>
            <p class="lead mb-0">Schedule Junkie is a free to use scheduling software.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>












