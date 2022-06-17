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
  <!-- Header -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.webp') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/writer" class="nav-link">Home</a></li>
          <li class="dropdown"><a class="nav-link active">Events</a>
            <ul>
              <li><a class="nav-link" href="/writer/event/add">Add Event</a></li>
              <li><a class="nav-link" href="/writer/event/list">List Event</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link">Articles</a>
              <ul>
                <li><a class="nav-link" href="/writer/article/add">Add Article</a></li>
                <li><a class="nav-link" href="/writer/article/list">List Article</a></li>
              </ul>
            </li>
          <li class="dropdown"><a class="nav-link">Jobs</a>
            <ul>
              <li><a class="nav-link" href="/writer/job/add">Add Job</a></li>
              <li><a class="nav-link" href="/writer/job/list">List Job</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="nav-link">FAQs</a>
            <ul>
              <li><a class="nav-link" href="/writer/faq/add">Add FAQ</a></li>
              <li><a class="nav-link" href="/writer/faq/list">List FAQ</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="/writer/social-media">Social Media Links</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/logout" class="appointment-btn scrollto">Sign Out</a>

      <!-- <a href="contact-us" class="appointment-btn scrollto"><i class="bi bi-whatsapp"></i></a> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>
  </header>
  <!-- End Header -->


  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <section id="services" class="services hero">
      <div class="container">

        <div class="section-title">
            <h2>{{$data->title}}</h2>
            <!-- <p class="mt-3">Writer name: {{$data->writer->name}}<br /> -->
            <!-- <small>Categori: <a href="/category/"></a> |  -->
            Latest Update: {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at)->format('d F Y, H:i:s')}}</small> </p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 pb-3">
            @if($data->img_link !== null)
              <img src="/assets/img/article_list/{{$data->img_link}}" alt="gambar" width="400px;">
            @endif
          </div>
        </div>

            <div class="col-12 text-justify" style="text-align: justify;">
              {!! $data->content !!}
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

@include('footer')