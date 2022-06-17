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

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    <!-- My Article -->
    <section id="my-article" class="bg-light pb-4">
      <div class="container">

        <div class="section-title">
          <h2>My Articles</h2>
        </div>

        <div class="container-fluid">
          <div class="card"> <!-- class="card w-50 m-auto" -->
            <div class="card-header">Category List</div>
            <div class="card-body">
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
              <!-- <a href="/dashboard" class="mb-3 btn btn-primary">Dashboard</a> -->
              <a href="/writer/article/add" class="mb-3 btn btn-outline-info ml-2">Add Article</a>
              <p style="text-align: right;">Articles total =
                {{$article->count()}}
              </p>
              <table class="table table-striped">
                <tr>
                  <th>No.</th>
                  <th width="23%">Article title</th>
                  <th>Article image</th>
                  <!-- <th>Content</th> -->
                  <th>Publish date</th>
                  <!-- <th>Diubah</th> -->
                  <th width="15%"></th>
                </tr>
                @php
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
                        ++$i;
                      }
                    }
                    $output .= $end;
                  } else {
                    $output = $text;
                  }
                  return $output;
                }
                //$content_fix = implode(' ', array_slice(explode(' ', $content), 0, 2));
                @endphp
                @forelse($article as $data)
                  <tr>
                    <td>{{ $id++ }}</td>
                    <td>{{ $data->title }}</td>
                    <td width="30%"><img src="/assets/img/article_list/{{ $data->img_link }}"  alt="" class="img-fluid" style="border-radius: 20px;"/></td> 
                    <!-- <td><i><?php //echo substrwords(strip_tags($data->content, ' '), 20); ?></i></td> -->
                    <td>{{ $data->created_at }}</td>
                    <!-- <td></td> -->
                    <td>
                      <a href="{{ $data->id }}" class="btn btn-success col-12 my-1">Preview</a>
                      <a class="btn btn-warning mb-2 col-12" href="edit/{{ $data->id }}">Edit</a>
                      <form action="delete/{{ $data->id }}" method="POST">@csrf
                        <button class="btn btn-danger col-12" type="submit">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="6" align="center">No data available</td>
                  </tr>
                @endforelse
              </table>
            </div>
          </div>
        </div> 
      </div>
    </section>

  </main>

@include('footer')
