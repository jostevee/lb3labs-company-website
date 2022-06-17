@php
  $userwriter = Auth::guard('web')->user();
  $useradmin = Auth::guard('admin')->user();

  $id = 1;
  function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
      $words = preg_split('/\s/', $text);      
      $output = '';
      $i      = 0;
      while (1) {
        $length = strlen($output)+strlen($words[$i]);
        if ($length > $maxchar) {
          break;
        } else {
          $output .= " " . $words[$i];
          $i++;
        }
      }
      $output .= $end;

    } else {
      $output = $text;
    }

    return $output;
  }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Optimus Consulting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('header')
</head>

<body>

  <!-- Header -->
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
          <!--
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          -->
          <li class="dropdown"><a class="nav-link" href="/our-solutions"><span>Our Solutions</span> <i class="bi bi-chevron-down"></i></a>
          <ul class="nav">
              <li><a class="nav-link" href="/recruitment-services">Recruitment Services</a></li>
              <li><a class="nav-link" href="/online-assessment">Online Assessment</a></li>
              <li><a class="nav-link" href="/hr-technology">HR Technology</a></li>
              <li><a class="nav-link" href="/hr-consultancy">HR Consultancy</a></li>
            </ul>
          </li> <!-- class="nav-link scrollto" -->
          <li><a class="nav-link" href="/events">Events</a></li>
          <li><a class="nav-link scrollto active" href="#articles">Articles</a></li>
          <li><a class="nav-link" href="/jobs">Jobs</a></li>
          <li><a class="nav-link" href="/faq">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="contact-us" class="appointment-btn scrollto">Contact Us</a>
      <!-- <i class="bx bx-envelope"></i> -->
      <!-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> -->

    </div>

  </header>
  <!-- End Header -->


  <section class="d-flex align-items-center"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <section id="articles" class="articles hero">
      <div class="container">

      <div class="row d-flex">
        <div class="col-12 mb-4">
          <div class="gallelry-item">
            <div class="text-center text-md-start card-hover icon-box">
              <img src="/assets/img/article_list/{{$data->img_link}}"  alt="" class="article-img img-fluid" style="border-radius: 10px;"/>  
              <div class="row d-flex align-items-center">
                <div class="col-12 article-title text-center mt-4">
                  <h2>{{ $data->title }}</h2>
                </div>
                <div class="col-12 mt-4 text-justify" style="text-align: justify;">
                  <p> {!! $data->content !!} </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title" style="margin-top: 10vh;">
          <h2>Other Article You Might Like</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        @foreach($other_data as $od)
          <div class="col-12 col-md-4 col-lg-4 mt-4 services">
            <div class="gallelry-item">
            <a href="{{$od->id}}">

              <div class="text-center text-md-start card-hover icon-box">
                <img src="/assets/img/article_list/{{$od->img_link}}"  alt="" class="article-img img-fluid" style="border-radius: 10px;"/>  
                <div class="row d-flex align-items-center">
                  <div class="col-12 article-title text-center mt-4">
                    <h2>{{ $od->title }}</h2>
                  </div>

                  @php
                    $desc = substrwords(strip_tags($od->content, ' '), 200);
                  @endphp

                  <div class="col-12 mt-4 text-justify" style="text-align: justify;">
                    <p> {!! $desc !!} </p>
                  </div>
                </div>
              </div>

            </a>
            </div>
          </div>
        @endforeach

      </div>
    </section>

  </main>

@include('footer')