
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="/plugins/jquery/dist/jquery.min.js"></script>
  <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="/plugins/tether/js/tether.min.js"></script>
  <script src="/plugins/raty/jquery.raty-fa.js"></script>
  <script src="/plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="/plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="/plugins/bootstrap-notify.min.js"></script>
  <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="/js/scripts.js"></script>
  @if(session('status'))
  <script type="text/javascript">
    $.notify({
  // options
    message: "{{session('status')}}"
  },{
    // settings
    type: 'info'
  });
  </script>
  @endif
