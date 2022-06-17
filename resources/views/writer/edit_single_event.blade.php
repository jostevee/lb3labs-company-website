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

  <!-- Template for CKEditor4 -->
  <script src="https://cdn.ckeditor.com/4.0.0/standard/ckeditor.js"></script>
</head>

<body>
  <!-- Header -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a class="logo me-auto"><img src="{{ asset ('assets/img/logo_optimus_navbar.webp') }}" width="250" alt="" class="img-fluid"><!-- <h4>Optimus</h4> --></a>

      <nav id="navbar" class="navbar order-last order-lg-0" style="margin-bottom: 0px;">
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

    <!-- Edit Post -->
    <section id="edit_event" class="services general-form">
        <div class="container">
        <!-- container-fluid -->

            <div class="section-title">
              <h2>Edit Event</h2>
            </div>

	        <div class="row">
            <div class="col-lg-12 align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <form method="POST" autocomplete="on" class="php-general-form">
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
                    <div class="form-group mt-4">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}" required>
                    </div>
                    <div class="form-group mt-4">
                      <label for="content">Content</label>
                      <textarea type="text" name="content" id="content" class="form-control" rows="6" required>{{$data->content}}</textarea>
                    </div>
                    <div class="form-group mt-4">
                      <label for="link">Link for website</label>
                      <input type="text" name="link" id="link" class="form-control" placeholder="Enter your link here (leave blank if empty)">
                    </div>

                    <!--
                    <div class="form-group mt-4">
                    <label for="img_link_update">Choose an image</label>
                          </div> -->
                          <!--
                          <div class="form-group mt-2">
                    <input type="file" name="img_link_update" id="img_link" class="form-control-file">
                    </div> -->
                    <div class="mt-4">
                      <button type="submit">Save</button>
                      <button type="cancel" onclick="window.history.back();">Cancel</button>
                    </div>
                  </form>
                </div>
                    {{--

                  --}}
              </div>
	          </div>
          </div>

        </div>
    </section>

    <script>
      // Replace the <textarea id="editor1"> with a CKEditor 4
      // instance, using default configuration.
      CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
      });
    </script>

  </main>

@include('footer')
