<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Optimus Consulting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('header_backend')
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!--
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:hello@consultwithoptimus.id">hello@consultwithoptimus.id</a>
        <i class="bi bi-phone"></i> +62 21 5799 8265
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <!--
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        
        <a href="https://www.instagram.com/optimus_consulting_firm/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/consultwithoptimus/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.webp') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="nav-link">Home</a></li>
          <li><a href="/admin/login" class="nav-link">Admin Page</a></li>
          <li><a class="nav-link active">Writer Page</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="contact-us" class="appointment-btn scrollto"><i class="bi bi-whatsapp"></i></a> -->
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

    <!-- ======= Services Section ======= -->
    <section id="login-admin" class="login-admin hero">
      <div class="container">

        <!--
        <div class="section-title">
          <h2>Welcome!</h2>
          <p>
            Please fill in the forms to continue, thank you!
          </p>
        </div>-->

        <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
           <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="mt-4 mt-xl-0 ">
                    <h2>Welcome!</h2>
                    <p>
                      Please log-in to continue to the Writer's Page
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <form method="POST" class="php-login-form">
                      @csrf
                      @if (session('error'))
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                      @endif
                      @if (session('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div>
                      @endif

                      <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4">
                          <label for="Email">User ID</label>
                        </div>

                        <input type="hidden" class="form-control" name="admin" value="0">

                        <div class="col-xl-8">
                          <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Input your User ID" required>
                        </div>

                        <div class="col-xl-4 mt-4">
                          <label for="Password">Password</label>
                        </div>

                        <div class="col-xl-8 mt-4">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Input your Password"  required>
                        </div>

                        <div class="col-xl-12 mt-4">
                          <div class="mt-4 mt-xl-0">
                            <button type="submit">Sign in</button>
                          </div>
                        </div>

                        <!--
                        @if(request()->segment(1)!='admin')
                          <div class="row pt-2">
                          <div class="col text-center">
                              <h6>Tidak punya akun? <a href="signup"><i>Buat akun</i></a></h6>
                          </div>
                          </div>
                        @endif -->

                      </div>
                    </form>
                  </div>
                </div>

              </div>
           </div><!-- End .content -->
        </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

@include('footer')
