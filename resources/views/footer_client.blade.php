<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright 2022 <strong><span>Optimus Consulting</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        Designed by <a href="https://lb3labs.my.id/">LB3Labs Developer</a> 
      </div>
    </div>
    <div class="row social-links d-flex justify-content-center text-center text-md-right pt-3 pt-md-0">
      <!-- <a href="https://wa.me/+6285891262233/?text=Halo%20ini%20tes%20percobaan%20yaa" class="whatsapp"><i class="bx bxl-whatsapp"></i></a> -->
      <!--
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      -->
      <a href="https://www.instagram.com/optimus_consulting" class="instagram d-flex justify-content-center align-items-center"><i class="bx bxl-instagram"></i></a>
      <!--
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      -->
      <a href="https://www.linkedin.com/company/consultwithoptimus/" class="linkedin d-flex justify-content-center align-items-center"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
  
</footer><!-- End Footer -->

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
  <script>
    function btnClick() {
      var email = $('#emails').val();
      //var reg = /^([w-.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([w-]+.)+[w-]{2,4})?$/;
      var emailblockReg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
      if (emailblockReg.test(email) && email != ''){
        $("#form-submit-button").attr("disabled", false);
      } else {
        alert("Only corporate email addresses that were allowed. Please use your corporate email instead, thank you.");
        return false;
      }
    }
  </script>

  <!--
  <script>
  $(document).ready(function(){
    $("#email").keydown(function(){  
        $("#email").css("background-color", "red");  
    });

    $("#email").keyup(function(){  
        //$("#email").css("background-color", "yellow");
    });

    $("#email").focusout(function(){
      var email = $('#email').val();
      //var reg = /^([w-.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([w-]+.)+[w-]{2,4})?$/;
      var emailblockReg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
      if (emailblockReg.test(email) && email != ''){
        $("#form-submit-button").attr("disabled", false);
        //alert("Only corporate email addresses that were allowed");
      } else {
        alert("Test");
      }
    });

    $('.form-submit-button').click(function(){
      var email = $('#email').val();
      //var reg = /^([w-.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([w-]+.)+[w-]{2,4})?$/;
      var emailblockReg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
      if (emailblockReg.test(email) && email != ''){
        $("#form-submit-button").attr("disabled", false);
        //alert("Only corporate email addresses that were allowed");
      } else {
        alert("Test");
      }
    });
  });
  </script> -->

  <script type="text/javascript">
                /* var $ = jQuery;*/

                /*
                $(document).ready(function(e){
                    $('#form-submit-button').click(function(){
                        var email = $('#email').val();
                        var reg = /^([w-.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([w-]+.)+[w-]{2,4})?$/;
                        if (reg.test(email)){
                            alert('Please Enter Business Email Address');
                            //return 0;
                        } else {
                            alert('Please Enter Business Email Address');
                            return false;
                        }
                    });
                });

                /*
                $(document).ready(function(e){
                    $("form").submit(function (event) {
                        var email = $('#email').val();
                        //var reg = /^([w-.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([w-]+.)+[w-]{2,4})?$/;
                        var emailblockReg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
                        if (!emailblockReg.test(email)){
                            alert("Only corporate email addresses that were allowed");
                        }
                    });
                });
                */
  </script>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- <script src="{{ asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
	AOS.init();
  </script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('assets/js/main.js') }}"></script>
    <!-- Template Youtube API Player JS File -->
    <script src="{{ asset ('assets/js/yt_player.js') }}"></script>

</body>

</html>
