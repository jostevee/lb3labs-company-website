@include('header')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.webp') }}" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li class="dropdown"><a class="nav-link" href="/about-us"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link" href="/our-values">Our Values</a></li>
              <li><a class="nav-link" href="/meet-the-team">Meet the Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link" href="/our-solutions"><span>Our Solutions</span> <i class="bi bi-chevron-down"></i></a>
          <ul class="nav">
              <li><a class="nav-link" href="/recruitment-services">Recruitment Services</a></li>
              <li><a class="nav-link" href="/online-assessment">Online Assessment</a></li>
              <li><a class="nav-link" href="/hr-technology">HR Technology</a></li>
              <li><a class="nav-link" href="/hr-consultancy">HR Consultancy</a></li>
            </ul>
          </li> <!-- class="nav-link scrollto" -->
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link" href="/articles">Articles</a></li>
          <li><a class="nav-link" href="/jobs">Jobs</a></li>
          <li><a class="nav-link" href="/faq">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="contact-us" class="appointment-btn scrollto">Contact Us</a>
      <!-- <i class="bx bx-envelope"></i> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="color: white;">Welcome to Optimus</h1>
      <h2 style="color: white;">Discover the right talent for your business with Optimus</h2>
      <a href="#about" class="btn-get-started scrollto">About Us</a>
    </div>
  </section><!-- End Hero -->

  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <!-- ======= Gallery Section ======= -->
    <section id="events" class="gallery services">
      <div class="container">

        <div class="section-title">
          <h2>Events</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
        @forelse($event as $data)
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-4">
            <div class="gallery-item">
            <a href="event/{{$data->id}}" class="galelry-lightbox">
              <div class="text-center text-md-start card-hover icon-box"style="cursor: pointer;">
                <img src="/assets/img/event_list/{{$data->img_link}}"  alt="" class="img-fluid" style="border-radius: 10px;"/>  
                <!-- <div class="d-flex align-items-center">
                  <span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2">
                    <p><span class="fw-medium fs-1">23</span></p>
                    <br><p>Dec</p>
                  </span>
                  <p class="fw-light text-start ms-3">{{$data->title}}</p>
                </div> -->
                <!-- <p class="fw-light lh-base text-start">{!! nl2br($data->content) !!}</p> -->
      
                    <!--
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
                    -->
                      <!--
                      <div class="d-flex align-items-center"><a class="btn btn-lg ps-0 text-primary fw-light fs--1" href="#" role="button"><p>Learn more</p>
                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                        </svg></a></div>
                      
                      <div class="d-flex align-items-center">
                        <svg class="bi bi-alarm me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"></path>
                          <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"></path>
                        </svg>
                        <p class="mb-0 fw-light text-dark fs--1">10:00 AM - 2:00 PM</p>
                      </div>
                      -->
              </div>
            </a>
            </div>
          </div>
        @empty
          <div class="d-flex justify-content-center">
            No posts about event yet...
          </div>
        @endforelse
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Optimus Consulting</h3>
            <p>
              Cyber 2 Tower 18th Floor, Jl. H. R. Rasuna Said Blok X-5, Kav. 13<br>
              Jakarta Selatan, DKI Jakarta 12950<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Sitemap</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about-us">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/our-solutions">Our Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#main">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact-us">Contact Us</a></li>
              <!--
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              -->
            </ul>
          </div>

        </div>
      </div>
    </div>

    @include('footer_client')
