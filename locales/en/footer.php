
<!-- footer -->
    <footer class="w3l-footer">
      <div class="footer-29 py-5">
        <div class="container pb-lg-3">
          
          <!-- Rodapé Direitos Reservados-->
          <div class="row bottom-copies">
            <p class="copy-footer-29 col-lg-7 text-lg-left text-center">
                © 2020 Instamim. All rights reserved | developed by
                  <a href="https://w3layouts.com/" target="_blank">W3Layouts</a> - 
                Modified by                  <a href="https://imm-tecnologia.com.br/" target="_blank">IMM-Tecnologia</a>
            </p>
            <ul class="list-btm-29 col-lg-5 text-lg-right text-center">
              <li><a href="privacidade">Privacy Policy</a></li>
              <li><a href="contato">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Botão de subir a página-->
      <button onclick="topFunction()" id="movetop" class="bg-primary" title="ir para cima">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /botão de subir a página -->
    </footer>
    <!-- // footer -->

    <!-- jQuery -->
    <script src="res/assets/js/jquery-3.4.1.slim.min.js"></script>
    <!-- Bootstrap js -->
    <script src="res/assets/js/bootstrap.min.js"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $('.navbar-toggler').click(function () {
          $('body').toggleClass('noscroll');
        })
      });
    </script>
    <!-- disable body scroll which navbar is in active -->



    <script>
      $(document).ready(function () {

        var $menuBtn = $('.menu-btn');
        var $nav = $('#nav');
        var $stylebox = $('#style-box');
        var $styleli = $stylebox.find('li');

        $menuBtn.on('click', function () {
          var $this = $(this);
          var styles = $stylebox.data('styles');
          $this.toggleClass("active");
          $this.next('#nav').toggleClass("open");
          $stylebox.toggleClass(styles);
        });

        $nav.addClass('topslide');

        $styleli.on('click', function () {
          var $this = $(this);
          $this.siblings().removeClass('now');
          $this.addClass('now');
          var styles = $this.data('styles');
          $nav.removeClass();
          $nav.addClass(styles);
          $nav.siblings('#style-box').removeClass();
          $nav.siblings('#style-box').data('styles', styles);
        });
      });
    </script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
          type: 'inline',

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: 'auto',

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-slide-bottom'
        });
      });
    </script>

  </body>

</html>