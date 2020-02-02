<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KISA</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('front/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('front/css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top" style = "background: lightcyan">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: green;">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">kisa</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Vision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <div class="container">
      <div class="intro-text">
          <!-- slider bootstrap -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style ="margin-top:100px;">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="front/img/slider/1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="front/img/slider/2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="front/img/slider/3.jpg" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>

  <!-- Services -->
          <section class="page-section" id="services">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2 class="section-heading text-uppercase">Vision and Mission Statements</h2>
                          <h3 class="section-subheading text-muted">What defines us!</h3>
                      </div>
                  </div>
                  <div class="row text-center">
                      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-low-vision fa-stack-1x fa-inverse"></i>
          </span>
                          <h4 class="service-heading">Vision</h4>
                          <p class="text-muted">The vision of the association shall be to build an International Students Association of excellence
                              to enhance unity and diversity in prosperity
                          </p>
                      </div>
                      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-star fa-stack-1x fa-inverse"></i>
          </span>
                          <h4 class="service-heading">Mission</h4>
                          <p class="text-muted">Our Mission shall be to create an environment that supports the academic and social well being
                              of international students
                          </p>
                      </div>
                      <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-handshake fa-stack-1x fa-inverse"></i>
          </span>
                          <h4 class="service-heading">Our objectives</h4>
                          <p class="text-muted">Our objectives shall among other things be to serve as a medium between students, universities and other
                              authorities of the state and the nation at large
                          </p>
                      </div>
                  </div>
              </div>
          </section>


          <!-- Portfolio Grid -->
  {{--<section class="bg-light page-section" id="portfolio">--}}
    {{--<div class="container">--}}
      {{--<div class="row">--}}
        {{--<div class="col-lg-12 text-center">--}}
          {{--<h2 class="section-heading text-uppercase">Portfolio</h2>--}}
          {{--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="row">--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/01-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Threads</h4>--}}
            {{--<p class="text-muted">Illustration</p>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/02-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Explore</h4>--}}
            {{--<p class="text-muted">Graphic Design</p>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/03-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Finish</h4>--}}
            {{--<p class="text-muted">Identity</p>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/04-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Lines</h4>--}}
            {{--<p class="text-muted">Branding</p>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/05-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Southwest</h4>--}}
            {{--<p class="text-muted">Website Design</p>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-sm-6 portfolio-item">--}}
          {{--<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">--}}
            {{--<div class="portfolio-hover">--}}
              {{--<div class="portfolio-hover-content">--}}
                {{--<i class="fas fa-plus fa-3x"></i>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<img class="img-fluid" src="front/img/portfolio/06-thumbnail.jpg" alt="">--}}
          {{--</a>--}}
          {{--<div class="portfolio-caption">--}}
            {{--<h4>Window</h4>--}}
            {{--<p class="text-muted">Photography</p>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</section>--}}

  <!-- About -->

  <section class="page-section" id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">About Kerala International Students Association, INDIA</h2>
                  <h3 class="section-subheading text-muted">Unity and Progress in diversity</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <ul class="timeline">
                      <li>
                          <div class="timeline-image">
                              <img class="rounded-circle img-fluid" src="front/img/about/think.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>December 2016</h4>
                                  <h4 class="subheading">Our Humble Beginnings</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">The idea of establishing an umbrella organization to bring all international students together from
                                      all districts within the state was conceived by some research scholars including; Ajekwene Kingsley and Jean Gerald
                                  </p>
                              </div>
                          </div>
                      </li>
                      <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="rounded-circle img-fluid" src="front/img/about/born.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>March 2017</h4>
                                  <h4 class="subheading">KISA was born</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">When students assembled for its annual international meet, the conceptual proposition of forming an association
                                      was accepted and decided by the conglomeration of students present at the general forum. The name of the association(KISA) was decided by a
                                      majority vote as well as the motto and logo. During the general assembly in Cochin University of Science & Technology, members uninmously
                                      consented to supported the ascendency of <b>Mr. Kingsley Ajekwene Kema</b> as the first president for KISA
                                  </p>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="timeline-image">
                              <img class="rounded-circle img-fluid" src="front/img/about/meet.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>Further Meeting</h4>
                                  <h4 class="subheading">Structure of KISA</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">The highest structure of KISA is the annual general meeting through which major decisions taken are binding on all
                                      members of the association including the election of new executives. Aside from that major seminars are organized throughout the year
                                  </p>
                              </div>
                          </div>
                      </li>
                      <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="rounded-circle img-fluid" src="front/img/about/diversity.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>Achievements</h4>
                                  <h4 class="subheading">Journey so far</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">The Association has successfully collaborated with iccr and two state Universities; University of Calicut
                                      and Cochin University of Science & Technology to ensure hosting of annual international students events. In January 2018 <b>KISA<b> officially
                                              approved the <b>constitution<b> of the association
                                  </p>

                              </div>
                          </div>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </section>



  <!-- Team -->
          <section class="bg-light page-section" id="team">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2 class="section-heading text-uppercase">KISA LEADERSHIP</h2>
                          <h3 class="section-subheading text-muted"><b>Executive Board : 2019/2020 Academic Year</b></h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="team-member">
                              <img class="mx-auto rounded-circle" src="front/img/team/1.jpg" alt="">
                              <h4>PHILL MATJELE</h4>
                              <p class="text-muted">President</p>

                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="team-member">
                              <img class="mx-auto rounded-circle" src="front/img/team/nana.jpg" alt="">
                              <h4>NANA OPOKU DANQUAH</h4>
                              <p class="text-muted">Vice President</p>

                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="team-member">
                              <img class="mx-auto rounded-circle" src="front/img/team/pas.jpg" alt="">
                              <h4>PASCAL ZURY NAA</h4>
                              <p class="text-muted">In Charge: Academics</p>

                          </div>
                      </div>
                  </div>

              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="team-member">
                          <img class="mx-auto rounded-circle" src="front/img/team/1.jpg" alt="">
                          <h4>PABALLO LEROTHOLI</h4>
                          <p class="text-muted">Incharge: Programs planning</p>

                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="team-member">
                          <img class="mx-auto rounded-circle" src="front/img/team/thabo.jpg" alt="">
                          <h4>THABO NOOSI GLADSTON</h4>
                          <p class="text-muted">In Charge: Finance</p>

                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="team-member">
                          <img class="mx-auto rounded-circle" src="front/img/team/fer.png" alt="">
                          <h4>FERNANDO MUIANGA JNR</h4>
                          <p class="text-muted">In Charge: Sports</p>

                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="team-member">
                          <img class="mx-auto rounded-circle" src="front/img/team/yaseen.jpg" alt="">
                          <h4>YASEEN AHMAD AZIZ</h4>
                          <p class="text-muted">Incharge: General Secretary</p>

                      </div>
                  </div>
              </div>

          </section>

  <!-- Clients -->

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>

        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  {{--<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="/img/portfolio/01-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Threads</li>--}}
                  {{--<li>Category: Illustration</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Modal 2 -->--}}
  {{--<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Explore</li>--}}
                  {{--<li>Category: Graphic Design</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Modal 3 -->--}}
  {{--<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Finish</li>--}}
                  {{--<li>Category: Identity</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Modal 4 -->--}}
  {{--<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Lines</li>--}}
                  {{--<li>Category: Branding</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Modal 5 -->--}}
  {{--<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Southwest</li>--}}
                  {{--<li>Category: Website Design</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  {{--<!-- Modal 6 -->--}}
  {{--<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="close-modal" data-dismiss="modal">--}}
          {{--<div class="lr">--}}
            {{--<div class="rl"></div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
          {{--<div class="row">--}}
            {{--<div class="col-lg-8 mx-auto">--}}
              {{--<div class="modal-body">--}}
                {{--<!-- Project Details Go Here -->--}}
                {{--<h2 class="text-uppercase">Project Name</h2>--}}
                {{--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>--}}
                {{--<img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">--}}
                {{--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>--}}
                {{--<ul class="list-inline">--}}
                  {{--<li>Date: January 2017</li>--}}
                  {{--<li>Client: Window</li>--}}
                  {{--<li>Category: Photography</li>--}}
                {{--</ul>--}}
                {{--<button class="btn btn-primary" data-dismiss="modal" type="button">--}}
                  {{--<i class="fas fa-times"></i>--}}
                  {{--Close Project</button>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('front/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('front/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('front/js/agency.min.js')}}"></script>

</body>

</html>
