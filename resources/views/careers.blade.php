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
          <li><a class="nav-link" href="/articles">Articles</a></li>
          <li><a class="nav-link scrollto" href="#careers">Jobs</a></li>
          <li><a class="nav-link" href="/faq">FAQ</a></li>
          <!--
            <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
            <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          -->
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
      <h1>Welcome to Optimus</h1>
      <h2>Discover the right talent for your business with Optimus</h2>
      <a href="#about" class="btn-get-started scrollto">About Us</a>
    </div>
  </section><!-- End Hero -->

  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <!--
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Optimus Consulting?</h3>
              <p>
                Narrative text here
              </p>
              <div><!-- class="text-center" 
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 align-items-stretch"><!-- d-flex 
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='about-us';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>About Us</h4>
                    <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> 
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='our-solutions';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Our Solutions</h4>
                    <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> 
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch" onclick="location.href='events';" style="cursor: pointer;">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Events</h4>
                    <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> 
                  </div>
                </div>
              </div>
            </div><!-- End .content 
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <!--
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Our Client</h2>
        </div>

        <div class="clients-slider swiper-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="client-wrap">
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-1.png') }}" alt="clients" />
                </div>
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-2.png') }}" alt="clients" />
                </div>
                 <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-3.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="client-wrap">
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-3.png') }}" alt="clients" />
                </div>
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-4.png') }}" alt="clients" />
                </div>
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-5.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="client-wrap">
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-6.png') }}" alt="clients" />
                </div>
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-7.png') }}" alt="clients" />
                </div>
                <div class="client-item">
                  <img src="{{ asset ('assets/img/client-list/client-8.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <!--
            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-7.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-8.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-9.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-10.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Partners Section ======= -->
    <!--
    <section id="partner" class="partners">
      <div class="container">

        <div class="section-title">
          <h2>Our Partner</h2>
        </div>

        <div class="partners-slider swiper-container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ('assets/img/collaborate-list/col-1.png') }}" alt="partners" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ('assets/img/collaborate-list/col-2.png') }}" alt="partners" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ('assets/img/collaborate-list/col-3.png') }}" alt="partners" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ('assets/img/collaborate-list/col-4.png') }}" alt="partners" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide" style="text-align: center;">
              <div class="partner-wrap">
                <div class="partner-item">
                  <img src="{{ asset ('assets/img/collaborate-list/col-5.png') }}" alt="partners" />
                </div>
              </div>
            </div><!-- End testimonial item 

            <!--
            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-7.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-8.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item

            <div class="swiper-slide" style="text-align: center;">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-9.png') }}" alt="clients" />
                  <img class="my-1" src="{{ asset ('assets/img/client-list/client-10.png') }}" alt="clients" />
                </div>
              </div>
            </div><!-- End testimonial item 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Partners Section -->

    <!-- ======= About Section ======= -->
    <!--
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p data-aos="fade-down" data-aos-delay="100" data-aos-duration="700">
            With proper end-to-end recruitment strategy done by our professionals
            and assisted by impressive digital technology support, finding the right
            talent for your business has never been so enjoyable. We are eager to cordially
            assist you to find the perfect match for your business: job fit, culture fit,
            and budget fit. We offer you, both clients and candidates, a flexible yet
            accountable recruitment and HR solutions, tailored to meet the needs of any
            kind of industry.
          </p>
          <a href="about-us" class="btn-get-started scrollto">Learn More <i class="bx bx-chevron-right"></i></a>
        </div>

      </div>
      <!--
      <div class="container-fluid" id="values">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://youtu.be/oBt-nGvTBJM?t=470" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Our Values</h3>
            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-check-shield"></i></div>
              <h4 class="title"><a href="">Trusted</a></h4>
              <p class="description">
                We have proven a good track record in placing qualified talents to numerous kinds of
                industries, namely BUMN, FMCG, and FSI companies. On top of that, we are able to
                preserve our clients’ trust thus able to build a long-lasting relationship with them.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-group"></i></div>
              <h4 class="title"><a href="">Teamwork</a></h4>
              <p class="description">
                Teamwork makes the dream work. We value teamwork the most when it comes to
                delivering our services. Our works are the harmony of youthful, energetic, and
                experienced professionals.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="bx bx-target-lock"></i></div>
              <h4 class="title"><a href="">Committed</a></h4>
              <p class="description">
                We offer our clients a devoted team to provide valuable advice and insights
                that are needed to face every challenge in human capital.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700"> 
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Flexible</a></h4>
              <p class="description">
                We understand the importance of clients’ satisfaction with the service we
                offer. On this account, we put flexibility as the bedrock of our process.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
              <div class="icon"><i class="fa fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Lively</a></h4>
              <p class="description">
                On top of that, we are aspiring to be your partner every step of the way until
                you find your perfect suit and we are planning on doing that enjoyably.
              </p>
            </div>

          </div>
        </div>

      </div>
      <section class="team">
      <div class="container" id="meet-the-team">

        <div class="section-title">
          <h2>Meet the Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6 mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Dien-Natalie-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dien Natalia</h4>
                <span>Founder and Managing Director</span>
                <p style="text-align: justify;">
                <!-- style="text-align: justify;"
                  Dien started Optimus with over a decade of remarkable experience in human capital
                  and...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- IT industries. Her expertise includes recruitment, training, assessment, and
                  outsourcing. Settling the longest period in the field of sales in numbers of
                  national HR companies, she led her teams to meet the needs of her then-happy
                  clients. Her current teammates value her integrity and her habit of cherishing
                  people around her.

          <div class="col-lg-6 mt-4" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
          <!-- mt-lg-0 mt-md-0 
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Raymond-Koh-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Raymond Koh</h4>
                <span>Co-Founder</span>
                <p style="text-align: justify;">
                  Raymond is a young-outgoing co-founder of Optimus. Currently, he also acts as
                  a Client Account Manager...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Always interested in HR and technology, Raymond
                  started his career as a LinkedIn Talent Solution associate and account executive
                  in an HR recruitment company. He then gained some international work experience
                  with his former IT solutions company. He then joined Dien Natalia establishing
                  Optimus Consulting. Until now, he is really into his dynamic work-life at Optimus.

          <div class="col-lg-6 mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Lucie-Supandi-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lucie Supandi</h4>
                <span>Head of Consultant</span>
                <p style="text-align: justify;">
                  Specialized in the end-to-end recruitment process and headhunting,
                  Lucie has been in this industry for more than 15 years...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Living abroad for
                  more than a decade, she started her career in HR with a well-known hotel
                  in the USA. Returning to Jakarta, she was assigned as head consultant and
                  executive search assisted in various industries. Her other exposure was managing
                  Recruitment Process Outsourcing for a leading telecommunication, O/G, banking,
                  startup, FMCG, and property management. In her work, Lucie is driven by her love
                  studying humans and the joy she gets from putting the right person in the right
                  place. Her broad range of clienteles and her national and overseas experiences
                  have shaped her into who she is now.

          <div class="col-lg-6 mt-4" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/team/Toman-Alberto-150.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Toman Alberto</h4>
                <span>Head of PMO and Partnership</span>
                <p style="text-align: justify;">
                  Toman is a relatively newcomer in the human capital industry. Graduated
                  with an engineering degree from ITB, Toman has 10 years’ experience in
                  the oil and gas industry...
                </p>
                <div class="learn-more">
                  <a id="edit" class="more-btn" data-toggle="modal" data-remote="true">Learn More <i class="bx bx-chevron-right"></i></button>
                </div>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!-- In 2017, Toman started his journey in one of the
                  HR-tech startups in Indonesia. This exposure to the “new world” had this
                  eye-opening effect on him: he came to realize that the world is so full of
                  opportunities that need to be explored. His grit and curious traits are what
                  brought him to this far: enjoying the whale of a time in Optimus Consulting. 

        </div>

      </div>
      </section>
      
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!--
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="0.5" class="purecounter"></span>
              <p>Stats 1</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 2</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 3</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Stats 4</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Our Solutions Section ======= -->
    <!--
    <section id="solutions" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Our Solutions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
            <div class="icon-box" onclick="location.href='our-solutions';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-users-cog"></i></div>
              <h4><a>HR Technology</a></h4>
              <p>
                Enhance your day-to-day HR essentials with our latest tech-based solutions.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0">
          <!-- mt-md-0 
            <div class="icon-box" onclick="location.href='our-solutions';" style="cursor: pointer;">
              <div class="icon"><i class="far fa-file-alt"></i></div>
              <h4><a>Online Assessment</a></h4>
              <p>
                Enabling HR practitioners in acquiring the right talents for the right positions
                anytime, anywhere.
              </p>
            </div>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0">
          <!-- mt-4 
            <div class="icon-box" onclick="location.href='our-solutions';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h4><a>Recruitment Services</a></h4>
              <p>
                We deliver the end-to-end recruitment service for all your needs,
                starting from entry-level to executive search.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-md-0 mt-lg-0">
          <!-- mt-4 
            <div class="icon-box" onclick="location.href='our-solutions';" style="cursor: pointer;">
              <div class="icon"><i class="fas fa-chart-line"></i></div>
              <h4><a>HR Consultancy</a></h4>
              <p>
                We provide the best-tailored consultancy to maximize your company’s human resources potential.
              </p>
            </div>
          </div>

          <!--
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Our Solutions Section -->

    <!-- ======= Appointment Section ======= -->
    <!--
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <!--
    <section id="solutions" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Our Solutions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">HR Technology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Online Assessment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Recruitment Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">HR Consultancy</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>HR Technology</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;">
                      Enhance your HR essentials with our latest tech-based solutions. Partnering with
                      the best HR softwares, Optimus Consulting is ready to assist you to plan and
                      manage your day-to-day business.<br>
                      <ol>
                        <li>Payroll System</li>
                        <li>Attendance System</li>
                        <li>Onboarding Platform</li>
                        <li>Learning Management System</li>
                      </ol>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('assets/img/solution-list/hr-tech.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Online Assessment</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;">
                      We understand the need for efficiency and effectiveness. While many
                      neglected the importance of quality over speed, we see the opportunity
                      which betterment technology provides: to enable the HR practitioner in
                      acquiring the right talents for the right positions — anytime, anywhere.
                      Optimus Consulting offers you the perfect tools to be your key partner
                      in this digital era.<br>
                      <ol>
                        <li>Virtual Assessment Centre</li>
                        <li>Psychometric Assessment</li>
                        <li>Sales, Coding and IT Assessment</li>
                        <li>Online BEI</li>
                        <li>Video Interview</li>
                      </ol>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('assets/img/solution-list/online-assessment.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Recruitment Services</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;">
                      Recruiting the right talent for your organization can often be time-consuming.
                      Optimus Consulting delivers the end to end recruitment service for all your
                      needs, starting from entry-level to executive search. Our experience ranges
                      from mass search for brilliant management trainee candidates to excellent
                      professionals across industries.<br>
                      <ol>
                        <li>Mass Hiring</li>
                        <li>Executive Search</li>
                        <li>Recruitment Process Outsourcing</li>
                      </ol>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('assets/img/solution-list/recruit-services.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>HR Consultancy</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;">
                      Consult with our experts who are always there to listen to your HR needs and
                      problems. Optimus’ HR consulting service aims to provide the best-tailored
                      consultancy to maximize your company’s human resources potential.<br>
                      <ol>
                        <li>Compensation and Benefit</li>
                        <li>Workload Analysis</li>
                        <li>Career Transition and Outplacement</li>
                      </ol>
                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('assets/img/solution-list/hr-consultant.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
                  </div>
                </div>
              </div>
              <!--
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset ('assets/img/departments-5.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Meet the Team Section ======= -->
    <!--
    <section id="meet-the-team" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Meet the Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Person 1</h4>
                <span>Job 1</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Person 2</h4>
                <span>Job 2</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Person 3</h4>
                <span>Job 3</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset ('assets/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Person 4</h4>
                <span>Job 4</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Meet the Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="careers" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Job Openings</h2>
          <!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          -->
        </div>

        <div class="faq-list">
          <ul class="faq-list-ul">
          @forelse($category as $category)
            <li class="faq-list-li" data-aos="fade-up"><!-- data-aos-delay="100" -->
              <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-{{ $category->id }}"><!-- data-bs-target="#faq-list-1" --><h4 class="text-center">{{ $category->category }}</h4><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a><!-- <i class='bx bx-info-circle icon-career'></i> -->
              <div id="faq-list-{{ $category->id }}"  class="collapse mx-4" data-bs-parent=".faq-list"><!-- id="faq-list-1" -->
              
              <!-- Setup the numbering -->
              @php
                $id = 1;
              @endphp

              <!-- Put your content per category HERE -->
              @foreach($career as $data)
                @if ($data->id_category == $category->id)
                  <hr>
                  <div class="my-3 row d-flex justify-content-stretch">
                    <div class="col-lg-1 col-2 d-flex justify-content-center">
                      <h5>
                        {{ $id++ }}
                      </h5>
                    </div>
                    <div class="col-lg-7 col-10 d-flex align-items-center row">
                      <h5 class="col-12">
                        {{ $data->title }}
                      </h5>
                      <div class="col-12">
                        <i>{!! nl2br($data->content) !!}</i>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex justify-content-end">
                      <form action="https://{{ $data->link }}" class="php-general-form"> 
                        <button type="submit">Apply <i class='bx bxs-right-arrow-circle'></i></button>
                      </form>
                    </div>
                  </div>
                @endif               
              @endforeach
              <!-- Put your content per category HERE -->

              <!-- If data were empty -->
              @if ($id == 1)
                <p class="text-center">
                  <i>There is no available job in this category...<br>Please look for another category</i>
                </p>
              @endif

              </div>
            </li>
          @empty
            <li class="faq-list-li" data-aos="fade-up" data-aos-delay="100">
              <i class='bx bx-info-circle icon-career'></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Nothing to be found here<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Career data isn't available... yet
                </p>
              </div>
            </li>
          @endforelse

          </ul>
        </div>

        <!-- OLD VERSION -->
        <!--
          <div class="faq-list">
            <ul class="faq-list-ul">
            @forelse($career as $data)
              <li class="faq-list-li" data-aos="fade-up"><!-- data-aos-delay="100"
                <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-{{ $data->id }}"><!-- data-bs-target="#faq-list-1" <h3>{{$data->title}}</h3><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a><!-- <i class='bx bx-info-circle icon-career'></i>
                <div id="faq-list-{{ $data->id }}"  class="collapse mx-4" data-bs-parent=".faq-list"><!-- id="faq-list-1"
                  <div class="mx-1">
                    {!! nl2br($data->content) !!}
                    <form action="https://{{ $data->link }}" class="php-general-form mt-4"> 
                      <button type="submit">Apply <i class='bx bxs-right-arrow-circle'></i></button>
                    </form>
                  </div>
                </div>
              </li>
            @empty
              <li class="faq-list-li" data-aos="fade-up" data-aos-delay="100">
                <i class='bx bx-info-circle icon-career'></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Nothing to be found here<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    Career data isn't available... yet
                  </p>
                </div>
              </li>
            @endforelse

            <!--
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>
            

            </ul>
          </div>
        -->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset ('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item 

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <!--
    <section id="events" class="gallery services">
      <div class="container">

        <div class="section-title">
          <h2>Events</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
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
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
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
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
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
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 mt-lg-0">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/soon" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
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
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <!--
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
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
                      
              </a>
                  
            </div>
            </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
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
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
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
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="gallery-item">
            <div class="text-center text-md-start card-hover">
            <div class="icon-box">
              <a href="/welcome" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/event-list/country-1.png') }}"  alt="" class="img-fluid"/>  
                <div class="d-flex align-items-center"><span class="badge bg-soft-primary text-primary fs--1 fw-light p-3 rounded-1 my-2"><p><span class="fw-medium fs-1">23</span></p><br><p>Dec</p></span>
                    <p class="fw-light text-start ms-3">Macquarie University, Sydney, Australia</p>
                  </div>
                  <p class="fw-light lh-base text-start">Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. </p>
                    <div class="content">
                    <div class="text-center">
                      <p class="more-btn">Learn More <i class="bx bx-chevron-right"></i></p>
                    </div>
                    </div>
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
                      --><!--
              </a>
                  
            </div>
            </div>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> 
        </div>
      </div>

      <!--
      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2834772147994!2d106.8301963143606!3d-6.226305662710575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f03383750f%3A0xed1b28d4a1e935ab!2zTUFSUVVFRSAtIEN5YmVyIOKAi-KAizI!5e0!3m2!1sen!2sid!4v1618022658658!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2834772147994!2d106.8301963143606!3d-6.226305662710575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f03383750f%3A0xed1b28d4a1e935ab!2zTUFSUVVFRSAtIEN5YmVyIOKAi-KAizI!5e0!3m2!1sen!2sid!4v1618022658658!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
            <!--
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Cyber 2 Tower 18th Floor, Jl. H. R. Rasuna Said Blok X-5, Kav. 13, Jakarta Selatan DKI Jakarta 12950</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>hello@consultwithoptimus.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 21 5799 8265</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <strong>Phone:</strong> +62 21 5799 8265<br>
              <strong>Email:</strong> <a href="mailto:hello@consultwithoptimus.id">hello@consultwithoptimus.id</a><br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Sitemap</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about-us">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="our-solutions">Our Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#contact">Contact Us</a></li>
              <!--
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              -->
            </ul>
          </div>

          <!--
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
          -->

          <!--
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
          -->

        </div>
      </div>
    </div>

    @include('footer_client')
