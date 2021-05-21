 <!-- Footer -->
        <footer>

            <!-- Footer [content] -->
            <section id="footer" class="odd footer offers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 footer-left">

                            <!-- Navbar Brand-->
                            <a class="navbar-brand" href="/">
                                <span class="brand">
                                    <span class="featured">
                                        <span class="first">webb</span>
                                    </span>
                                    <span class="last">er</span>
                                </span>
                                
                                <!-- 
                                    Custom Logo
                                    <img src="assets/images/logo.svg" alt="">
                                -->
                            </a>
                            <p>Интернет-маркетинг <br>для вашего бизнеса.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="tel:<?= $phone[
                                      "link"
                                    ] ?>" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        <?= $phone["text"] ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="mailto:<?= $email ?>" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        <?= $email ?>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="#contact" class="mt-4 btn outline-button smooth-anchor">КОНТАКТЫ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-9 p-0 footer-right">
                            <div class="row items">
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>О нас</h4>
                                        <p>Более 4х лет мы успешно создаем сайты.</p>
                                        <p>Создайте свой сайт и получайте клиентов.</p>
                                        <a href="#about"><i class="icon-arrow-right"></i>Подробнее</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Услуги</h4>
                                        <a href="#services"><i class="icon-arrow-right"></i>Разработка</a>
                                        <a href="#services"><i class="icon-arrow-right"></i>Обслуживание</a>
                                        <a href="#services"><i class="icon-arrow-right"></i>SEO-аудит</a>
                                        <a href="#services"><i class="icon-arrow-right"></i>Контекст / CPC</a>
                                        <a href="#services"><i class="icon-arrow-right"></i>Стратегия</a>
                                        <a href="#services"><i class="icon-arrow-right"></i>Консалтинг</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 item">
                                    <div class="card">
                                        <h4>Поддержка</h4>
                                        <p>Вы можете обращаться к нам по всем вопросам, даже после сдачи проекта.</p> 
                                        <p>Мы ответим на все ваши вопросы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>Разработка и поддержка сайтов, SEO-аудит.</p>
                            <!--
                                Suggestion: Replace the text above with a description of your website.
                             -->
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© <?php echo date("Y"); ?> webber.pw</p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [search] -->
        <!-- <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <h2>What are you looking for?</h2>
                                        <div class="badges">
                                            <span class="badge"><a href="#">Consulting</a></span>
                                            <span class="badge"><a href="#">Audit</a></span>
                                            <span class="badge"><a href="#">Assurance</a></span>
                                            <span class="badge"><a href="#">Advisory</a></span>
                                            <span class="badge"><a href="#">Financial</a></span>
                                            <span class="badge"><a href="#">Capital Markets</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input type="text" class="form-control" placeholder="Enter Keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">SEARCH</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Modal [sign] -->
        <?php include "blocks/modal-sign-in.php"; ?>

        <!-- Modal [register] -->
        <?php include "blocks/modal-register.php"; ?>

        <!-- Modal [map] -->
        <?php
// include "blocks/modal-map.php";
?>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        
        
        <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LcYPMgZAAAAAAXBc5udAJjULAhoMbJD7qHxwdbN"></script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery.easing.min.js"></script>
        <script src="assets/js/vendor/jquery.inview.min.js"></script>
        <script src="assets/js/vendor/jquery.maskedinput.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/ponyfill.min.js"></script>
        <script src="assets/js/vendor/slider.min.js"></script>
        <script src="assets/js/vendor/animation.min.js"></script>
        <script src="assets/js/vendor/progress-radial.min.js"></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/gallery.min.js"></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/cookie-notice.min.js"></script>
        <script src="assets/js/vendor/particles.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcYPMgZAAAAAAXBc5udAJjULAhoMbJD7qHxwdbN', {action: 'homepage'}).then(function(token) {
                //console.log(token);
                document.getElementById('reCAPTCHA').value=token;
            });
        });
    </script> -->

        <?php
// include 'blocks/icons.php';
?>
    </body>
</html>