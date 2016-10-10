<?php 
include_once "header.php";
?>

<header class="contacts main-header">
    <div class="container clearfix">
        <div class="window">
            <div class="header">
                <div class="burger-container">
                    <div id="burger">
                        <div class="bar topBar"></div>
                        <div class="bar btmBar"></div>
                    </div>
                </div>                
                <div class="icon icon-apple"></div>
                <ul class="menu">
                    <li class="menu-item"><a href="index.php">Главная</a></li>
                    <li class="menu-item"><a href="about.php">О компании</a></li>
                    <li class="menu-item"><a href="services.php">Услуги</a></li>
                    <li class="menu-item"><a href="become-customer.php">Стать клиентом</a></li>
                    <li class="menu-item"><a href="regulation.php">Регулирование</a></li>
                    <li class="menu-item"><a href="news.php">Новости</a></li>
                    <li class="menu-item"><a href="contacts.php">Контакты</a></li>                       
                </ul>
                <div class="shop icon icon-bag"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="logo-top">
                    <a href="index.php"><img src="images/logo-top.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-5">
                <div class="contact-top">
                    <ul>
                        <li>
                            <p>Звоните нам —</p>
                        </li>
                        <li>
                            <a href="tel:35722282929">+</a>
                            <span>Мы ответим на все вопросы</span>
                        </li>
                    </ul>                     
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="general-header-wrap become-wrap">
                    <nav class="top-nav desktop-nav general-header-nav">
                        <ul class="top-nav__list general-header__nav-list">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="about.php">О компании</a></li>
                            <li><a href="services.php">Услуги</a></li>
                            <li><a href="become-customer.php">Стать клиентом</a></li>
                            <li><a href="regulation.php">Регулирование</a></li>
                            <li><a href="news.php">Новости</a></li>
                            <li><a href="contacts.php" class="active">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="head contacts-head">
                    <h2 class="main-headline-white">Наши контакты</h2>
                    <div class="cotacts-content">
                        <p><span>FFIN Brokerage Services Inc.</span></p>                        
                        <div class="contacts-content-item registration-number">
                            <p>Регистрационный номер</p>
                            <span>147,343</span>
                        </div>
                        <div class="contacts-content-item registered-address">
                            <p>Зарегистрированный адрес</p>
                            <span>16 Hutson street, suite 304,</span>
                            <span>Belize city, Belize, C.A.</span>
                        </div>
                        <div class="contacts-content-item contacts-content-web">                            
                            <a href="mailto:info@ffin.bz">info@ffin.bz</a>
                        </div>
                        <div class="contacts-content-item contacts-content-web">                            
                            <a href="#">www.ffin.bz</a>
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="head contacts-head">
                    <h2 class="main-headline-white">Банковские детали</h2>
                    <div class="cotacts-content cotacts-content-two">                                                
                        <div class="contacts-content-item registration-recipient">
                            <p>Получатель</p>
                            <span>FFIN Brokerage Services Inc.</span>
                        </div>
                        <div class="contacts-content-item recipient-address">
                            <p>Адрес получателя</p>
                            <span>16 Hutson street, suite 304,</span>
                            <span>Belize city, Belize, C.A.</span>
                        </div> 
                        <div class="contacts-content-item registration-account-number">
                            <p>Номер счета Получателя</p>
                            <span>LV18 CBBR 1123 4853 0004 0</span>
                        </div> 
                        <div class="contacts-content-item registration-bank">
                            <p>Банк Получателя</p>
                            <span>Baltikums Bank AS</span>
                        </div> 
                        <div class="contacts-content-item registration-swift">
                            <p>SWIFT</p>
                            <span>CBBRLV22</span>
                        </div>   
                        <div class="contacts-content-item registration-correspondent-bank-account">
                            <p>Счет банка-корреспондента</p>
                            <span>CBBRLV2212312543654756</span>
                        </div> 
                        <div class="contacts-content-item registration-correspondent-bank">
                            <p>Банк-корреспондент</p>
                            <span>Name</span>
                        </div>                    
                    </div>                       
                </div>
            </div>
        </div>
    </div>    
</header>

<div class="map">        
    <div class="map-wrap">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6gO81nEXOByIVmsgeEliIXkhm-vuNTG9&amp;width=100%&amp;height=720&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
        <div class="overlay-map"></div>
    </div>
</div>

<?php include_once "footer.php"; ?>