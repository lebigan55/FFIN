    <footer id="main-call" class="main-footer">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-column-left">
                        <a href="index-eng.php"><img src="images/logo-footer.png" alt="logo"></a>
                        <nav class="bottom-nav">
                            <ul class="bottom-nav__list">
                                <li>
                                    <a href="index-eng.php">Home</a>
                                </li>
                                <li>
                                    <a href="about-eng.php">About us</a>
                                </li>
                                <li>
                                    <a href="services-eng.php">Our services</a>
                                </li>                                
                            </ul>                        
                            <ul class="bottom-nav__list"> 
                                <li>
                                    <a href="become-customer-eng.php">To become a Client</a>
                                </li>
                                <li>
                                    <a href="regulation-eng.php">Regulations</a>
                                </li>
                                <li>
                                    <a href="news-eng.php">News</a>
                                </li>
                                <li>
                                    <a href="contacts-eng.php">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer-column-center">
                        <div class="footer-column-center-row">
                            <h4>Do you still have any questions?</h4>
                            <div class="column-center-contact">
                                <ul>
                                    <li>
                                        <p>Call us —</p>
                                    </li>
                                    <li>
                                        <a href="tel:35722282929">+</a>
                                        <span>We will respond to all questions</span>
                                    </li>
                                </ul>                        
                            </div>
                        </div>
                        <a href="#small-dialog" class="btn btn-blueline btn-footer popup-with-zoom-anim">Call back</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column-right">
                    <!--    <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="#" class="icon-vimeo-circled"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon-twitter-circle"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon-fb"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon-gplus-circled"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon-linkedin-circled"></a>
                                </li>
                            </ul> 
                        </div>-->
                        <div class="column-right-contacts">
                            <ul>
                                <li>
                                    <p>Fax: <a href="tel:35722282920">+</a></p>
                                </li>
                                <li>
                                    <p>E-mail: <a href="mailto:info@ffineu.eu">info@ffin.bz</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="flag">
                            <ul>
                                <li>
                                    <img src="images/flag-rus.png" alt="flag">
                                </li>
                                <li>
                                    <a href="index.php">Русский</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="copirait">
                <span>© FFIN 2016</span>
            </div>
        </div>
    </footer>

    <!-- Popup itself -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">        
        <div class="top-form-wrap remodal-form-wrap" >
            <h3>Leave a request</h3>
            <p>and our specialist will call back you throughout the day</p>
            

            <form action="form-control/mail1.php" method="post" id="modal-form-1" class="main-form-top" name="main-form">    
                <fieldset style="border:0;">
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="ffineu">
                    <input type="hidden" name="admin_email" value="haase@ffin.ru">
                    <input type="hidden" name="form_subject" value="Заявка с сайта ffineu">
                    <!-- END Hidden Required Fields -->
                    
                    <div class="input-group">
                        
                        <input type="text"  name="name" placeholder="First name" required>
                    </div>
                    
                    <div class="input-group">
                        
                        <input type="tel" name='tel' id="phone-2" placeholder="Phone Number" required>
                    </div>
                    
                    <div class="input-group">
                        
                        <input type="email" name='email' placeholder="E-mail" required>                  
                    </div>                                
                    
                    <input type="hidden"  name="s_formi" value="Перезвоните мне">
                    <button type="submit" name="submit" class="btn btn-blueline mdl-btn">Order</button>
                </fieldset>
            </form>
        </div>
    </div>

    

    <div class="hidden"></div>

    

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.11.3.min.js"></script>    
    <script src="libs/page-scroll2id/PageScroll2id.min.js"></script>
    <script src="libs/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="libs/validate/jquery.validate.min.js"></script>
    <script src="libs/validate/messages_ru.min.js"></script>
    <script src="libs/inputmask/jquery.inputmask.bundle.min.js"></script>
    <script src="js/common.js"></script>

    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>