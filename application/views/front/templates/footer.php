
    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
        <div class="col-sm-12" align="center" style="font-size: 26px;">寶積國際貿易有限公司　BAOJI</div><hr>
          <div class="col-lg-4 col-sm-4 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s" style="font-size: 20px; ">
            <h1>
              聯繫我們
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>地址:台中市西屯區同志巷25-8號</p>
              <p><i class="fa fa-mobile pr-10"></i> 電話 : 04-24520062 </p>
              <p><i class="fa fa-phone pr-10"></i>傳真 : 04-24521076 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email : sp6688@hotmail.com </p>
            </address>
          </div>
        
          <div class="col-lg-4 col-sm-4">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" >
              <h1>
                網站地圖
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.php/front_about/index">公司簡介</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.php/front_news/index">最新公告</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.php/front_download/index">文件下載</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.php/front_faq/index">常見問題</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="index.php/front_contect/index">聯絡我們</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-sm-4 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s" style="font-size: 20px; ">
            <h1>
              服務內容
            </h1>
            <address>
              <a href="index.php/front_detail/index"><p style="color: #FFF !important; ">越南貿易</p></a>
              <p>大陸進口海空運</p>
              <p>正式貿易</p>
              <p>小額貿易</p>
              <p>兩岸海運快遞</p>
              <p>水果、冷凍貨進出口</p>
            </address>


            






          </div>
        
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
                <div class="col-md-12" align="center">
                  <div class="copyright"> <p>© BAOJI - All Right Reserved</p>
                  </div>
                </div>
        </div>
    </footer>
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="application/views/front/theme/js/jquery.js">
</script>
-->
    <script src="application/views/front/theme/js/jquery-1.8.3.min.js">
    </script>
    <script src="application/views/front/theme/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="application/views/front/theme/js/hover-dropdown.js">
    </script>
    <script defer src="application/views/front/theme/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="application/views/front/theme/assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="application/views/front/theme/js/jquery.parallax-1.1.3.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false">
    </script>
    <script src="application/views/front/theme/assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="application/views/front/theme/js/jquery.easing.min.js">
    </script>
    <script src="application/views/front/theme/js/link-hover.js">
    </script>
    <script src="application/views/front/theme/js/superfish.js">
    </script>
    <script type="text/javascript" src="application/views/front/theme/js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 15
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="application/views/front/theme/js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      
         //google map
      function initialize() {
        var myLatlng = new google.maps.LatLng(24.198363,120.650900);
        var mapOptions = {
          zoom: 17,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Contact'
        }
                                           );
      }
      google.maps.event.addDomListener(window, 'load', initialize);


    </script>
  </body>
</html>