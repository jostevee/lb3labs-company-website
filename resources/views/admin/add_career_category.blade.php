@php
  $userwriter = Auth::guard('web')->user();
  $useradmin = Auth::guard('admin')->user();
@endphp
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
          <li><a href="/admin" class="nav-link">Home</a></li>
          <li class="dropdown"><a class="nav-link">Event Categories</a>
            <ul>
              <li><a class="nav-link" href="/admin/category/add">Add Category</a></li>
              <li><a class="nav-link" href="/admin/category/list">List Category</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link active">Job Categories</a>
            <ul>
              <li><a class="nav-link" href="/admin/job/category/add">Add Category</a></li>
              <li><a class="nav-link" href="/admin/job/category/list">List Category</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link">Writer</a>
            <ul>
              <li><a class="nav-link" href="/admin/writer/list">List Writer</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/admin/logout" class="appointment-btn scrollto">Sign Out</a>

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

    <!-- Add Category -->
    <section id="add_category" class="bg-light">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Add Category</h2>
        </div>
      </div>
      
      <div class="container-fluid col-lg-8">
        <div class="card"> <!-- class="card w-50 m-auto" -->
          <div class="card-header">Add Category</div>
            <div class="card-body">
              <form method="POST" autocomplete="on" action="">
              @csrf
                <div class="form-group">
                  <label for="category">Category Name</label>
                  <input type="text" name="name" id="category" class="form-control" placeholder="Please input your category name">
                </div>

                <div class="mt-4">
                  <button class="btn btn-success " type="submit">Submit</button>
                  <a class="btn btn-danger" onclick="window.history.back();">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

</main><!-- End #main -->

@include('footer')
