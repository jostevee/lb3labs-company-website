@include('header')

  <!-- ======= Hero Section ======= -->
  <!--
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="color: white;">Welcome to Optimus</h1>
      <h2 style="color: white;">Discover the right talent for your business with Optimus</h2>
      <a href="#about" class="btn-get-started scrollto">About Us</a>
    </div>
  </section><!-- End Hero

  <section class="d-flex align-items-center" style="height: 20vh; background: url(../assets/img/bg-img.jpeg);">
  </section>
  -->

  <main id="main">

    <section id="events" style="padding: 0px;" class="services hero">
      @if($data->img_link !== null)
        <img src="/assets/img/event_list/{{$data->img_link}}" alt="gambar" width="100%">
      @endif

      <div class="container">
        <div class="section-title mt-4">
          <h2>{{$data->title}}</h2>
          <!-- <p class="mt-3">Writer name: {{$data->writer->name}}<br /> -->
          <small>Kategori: <a href="/kategori/{{$data->id}}">{{$data->category->name}}</a> | Last Update: {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $data->updated_at)->format('d F Y, H:i:s')}}</small> </p>
        </div>
      </div>

      <div class="container">
        <div class="row d-flex justify-content-center text-justify">
          <div class="col-md-10 pb-3">
            {!! $data->content !!}
            
          </div>
        </div>
      </div>
    </section>

  </main>