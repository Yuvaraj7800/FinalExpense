<!-- info section -->

<section class="info_section layout_padding2 my-2 ">
    <div class="container">
      <div class="row">
        <div class="col-md-4  info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                <span>
                   +01-2345-6789
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  final@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4  info_col">
        <div class="info_detail">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="<?= base_url('Web/index'); ?>">
                Home
              </a>
              <a class="" href="<?= base_url('Web/contact'); ?>">
                Contact-Us
              </a>
              
            </div>
          </div>
          
        </div>
        <div class="col-md-4  mx-auto info_col">
        <div class="info_detail">
            <h4>
              Final Expense
            </h4>
            <p class="text-justify">
            Final expense insurance is a policy designed to cover funeral, burial, and end-of-life expenses. It offers a small, fixed death benefit, often with easy qualification and no medical exam.
            </p>
          </div>
          
        </div>
        <!-- <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div> -->
      </div>
    </div>
  </section>

  <!-- end info section -->

<!-- footer section -->
<section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Final Expense</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/128e06a1-5a0e-2256-1f53-a65c77a8211b.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>

</section>
</body>

</html>