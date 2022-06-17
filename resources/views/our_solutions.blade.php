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
          <li class="dropdown"><a class="nav-link scrollto" href="#main"><span>Our Solutions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="#recruitment-services">Recruitment Services</a></li>
              <li><a class="nav-link scrollto" href="#online-assessment">Online Assessment</a></li>
              <li><a class="nav-link scrollto" href="#hr-technology">HR Technology</a></li>
              <li><a class="nav-link scrollto" href="#hr-consultancy">HR Consultancy</a></li>
            </ul>
            <!--
            <ul class="nav">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-1">HR Technology</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-2">Online Assessment</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-3">Recruitment Services</a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-4">HR Consultancy</a></li>
            </ul> -->
          </li> <!-- class="nav-link scrollto" -->
          <li><a class="nav-link" href="/events">Events</a></li>
          <li><a class="nav-link" href="/jobs">Jobs</a></li>
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
      <h1 style="color: white;">Welcome to Optimus</h1>
      <h2 style="color: white;">Discover the right talent for your business with Optimus</h2>
      <a href="#about" class="btn-get-started scrollto">About Us</a>
    </div>
  </section><!-- End Hero -->

  <section class="d-flex align-items-center" style="height: 20vh;"> <!-- background: url(assets/img/bg-img.jpeg); -->
  </section>

  <main id="main">

    <!-- ======= Our Solutions (OLD) Section ======= -->
    <!-- style="background-color: #f1f7fd;"
    <section id="solutions" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Our Solutions</h2>
          <!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          
        </div>

        <div class="row">
            <div class="row segments lg-12" id="hr-technology">
              <div class="col-lg-4 text-center" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                <img src="{{ asset ('assets/img/solution-list/online-assessment.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
              </div> 
              <div class="col-lg-8 details icon-boxes" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
                <h3>HR Technology</h3>
                <!-- ITALIC MODE -->
                <!-- <p class="fst-italic"></p>
                <p style="text-align: justify;">
                  Enhance your HR essentials with our latest tech-based solutions. Partnering with
                  the best HR softwares, Optimus Consulting is ready to assist you to plan and
                  manage your day-to-day business.<br>
                  <div class="row col-lg-12 mx-auto mt-4">
                    <div class="row icon-box col-lg-3 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-money-bill"></i></div>
                       <h6 class="title mt-2">Payroll System</h6>
                    </div>
                    <div class="row icon-box col-lg-3 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-id-card"></i></div>
                       <h6 class="title mt-2">Attendance System</h6>
                    </div>
                    <div class="row icon-box col-lg-3 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-desktop"></i></div>
                       <h6 class="title mt-2">Onboarding Platform</h6>
                    </div>
                    <div class="row icon-box col-lg-3 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                       <h6 class="title mt-2">Learning Management System</h6>
                    </div>
                  </div>
                  <!--
                  <ol data-aos="fade-right">
                    <li>Payroll System</li>
                    <li>Attendance System</li>
                    <li>Onboarding Platform</li>
                    <li>Learning Management System</li>
                  </ol>
                </p>
              </div>
            </diV>

            <div class="row segments lg-12" id="online-assessment">
              <div class="col-lg-8 details" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                <h3>Online Assessment</h3>
                <!-- ITALIC MODE -->
                <!-- <p class="fst-italic"></p>
                <p style="text-align: justify;">
                  We understand the need for efficiency and effectiveness. While many
                  neglected the importance of quality over speed, we see the opportunity
                  which betterment technology provides: to enable the HR practitioner in
                  acquiring the right talents for the right positions — anytime, anywhere.
                  Optimus Consulting offers you the perfect tools to be your key partner
                  in this digital era.
                  <div class="row col-lg-12 mx-auto mt-4">
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-money-bill"></i></div>
                       <h6 class="title mt-2">Virtual Assessment Centre</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-id-card"></i></div>
                       <h6 class="title mt-2">Psychometric Assessment</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-desktop"></i></div>
                       <h6 class="title mt-2">Sales, Coding and IT Assessment</h6>
                    </div>
                  </div>
                  <div class="row col-lg-12 mx-auto mt-4">
                    <div class="row icon-box col-lg-6 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-money-bill"></i></div>
                       <h6 class="title mt-2">Online BEI</h6>
                    </div>
                    <div class="row icon-box col-lg-6 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-id-card"></i></div>
                       <h6 class="title mt-2">Video Interview</h6>
                    </div>
                  </div>
                  <!--
                  <ol>
                    <li>Virtual Assessment Centre</li>
                    <li>Psychometric Assessment</li>
                    <li>Sales, Coding and IT Assessment</li>
                    <li>Online BEI</li>
                    <li>Video Interview</li>
                  </ol>
                </p>
              </div>
              <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
                <img src="{{ asset ('assets/img/solution-list/online-assessment.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
              </div> 
            </div>

            <div class="row segments lg-12" id="recruitment-services">
              <div class="col-lg-4 text-center" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                <img src="{{ asset ('assets/img/solution-list/online-assessment.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
              </div> 
              <div class="col-lg-8 details" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
                <h3>Recruitment Services</h3>
                <!-- ITALIC MODE -->
                <!-- <p class="fst-italic"></p>
                <p style="text-align: justify;">
                  Recruiting the right talent for your organization can often be time-consuming.
                  Optimus Consulting delivers the end to end recruitment service for all your
                  needs, starting from entry-level to executive search. Our experience ranges
                  from mass search for brilliant management trainee candidates to excellent
                  professionals across industries.
                  <div class="row col-lg-12 mx-auto mt-4">
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-money-bill"></i></div>
                       <h6 class="title mt-2">Mass Hiring</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-id-card"></i></div>
                       <h6 class="title mt-2">Executive Search</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-desktop"></i></div>
                       <h6 class="title mt-2">Recrutiment Process Outsourcing</h6>
                    </div>
                  </div>
                  <!--
                  <ol>
                    <li>Mass Hiring</li>
                    <li>Executive Search</li>
                    <li>Recruitment Process Outsourcing</li>
                  </ol>
                </p>
              </div>
            </div>

            <div class="row segments lg-12" id="hr-consultancy">
              <div class="col-lg-8 details" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                <h3>HR Consultancy</h3>
                <!-- ITALIC MODE -->
                <!-- <p class="fst-italic"></p>
                <p style="text-align: justify;">
                  Consult with our experts who are always there to listen to your HR needs and
                  problems. Optimus’ HR consulting service aims to provide the best-tailored
                  consultancy to maximize your company’s human resources potential.<br>
                  <div class="row col-lg-12 mx-auto mt-4">
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-money-bill"></i></div>
                       <h6 class="title mt-2">Compensation and Benefit</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-id-card"></i></div>
                       <h6 class="title mt-2">Workload Analysis</h6>
                    </div>
                    <div class="row icon-box col-lg-4 mx-auto d-flex justify-content-center text-center">
                       <div class="icon"><i class="fas fa-desktop"></i></div>
                       <h6 class="title mt-2">Career Transition and Outplacement</h6>
                    </div>
                  </div>
                  <!--
                  <ol>
                    <li>Compensation and Benefit</li>
                    <li>Workload Analysis</li>
                    <li>Career Transition and Outplacement</li>
                  </ol>
                </p>
              </div>
              <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
                <img src="{{ asset ('assets/img/solution-list/online-assessment.jpg') }}" alt="" class="img-fluid" style="box-shadow: 0px 2px 15px rgb(44 73 100 / 50%); border-radius: 30px;">
              </div> 
            </div>
        </div>

        <!--
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
                    <h3 class="mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">HR Technology</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
                      Enhance your HR essentials with our latest tech-based solutions. Partnering with
                      the best HR softwares, Optimus Consulting is ready to assist you to plan and
                      manage your day-to-day business.<br>
                      <ol data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
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
                    <h3 class="mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">Online Assessment</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
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
                    <h3 class="mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">Recruitment Services</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
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
                    <h3 class="mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">HR Consultancy</h3>
                    <!-- ITALIC MODE -->
                    <!-- <p class="fst-italic"></p>
                    <p style="text-align: justify;" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
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
    </section><!-- End Our Solutions (OLD) Section -->

    <!-- ======= Our Solutions (NEW) Section ======= -->
    <section id="solutions" class="departments">

      <div class="container">
        <div class="section-title">
          <h2>Our Solutions</h2>
          <!--
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          -->
        </div>
      </div>

      <section id="hr-lifecycle" class="hr-lifecycle">
      </section>

      <section id="recruitment-services" class="recruitment-services">
      </section>

      <div class="row">
        <img src="{{ asset ('assets/img/our-solution-list/2.png') }}" alt="clients" width="100%" height="100%"/>
      </div>

      <section id="online-assessment" class="online-assessment">
      </section>

      <div class="row">
        <img src="{{ asset ('assets/img/our-solution-list/4.png') }}" alt="clients" width="100%" height="100%"/>
      </div>

      <section id="dev-program" class="dev-program">
      </section>

      <section id="hr-technology" class="hr-technology">
      </section>

      <div class="row">
        <img src="{{ asset ('assets/img/our-solution-list/6.png') }}" alt="clients" width="100%" height="100%"/>
      </div>

      <section id="hr-consultancy" class="hr-consultancy">
      </section>

      <div class="row">
        <img src="{{ asset ('assets/img/our-solution-list/8.png') }}" alt="clients" width="100%" height="100%"/>
      </div>

    </section>
    <!-- End Our Solutions (NEW) Section -->

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
    <!--
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

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
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-1.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-2.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-3.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-4.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-5.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-6.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-7.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset ('assets/img/gallery/gallery-8.jpg') }}" class="galelry-lightbox">
                <img src="{{ asset ('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
              </a>
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
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2834772147994!2d106.8301963143606!3d-6.226305662710575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f03383750f%3A0xed1b28d4a1e935ab!2zTUFSUVVFRSAtIEN5YmVyIOKAi-KAizI!5e0!3m2!1sen!2sid!4v1618022658658!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
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
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about-us">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="scrollto" href="#main">Our Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact-us">Contact Us</a></li>
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
