<?php
$title = 'MyMoscow - Контакты';
$headerStyle = '';
$stripe = 'contacts-stripe';
$headerClass = 'class="contacts-page-header"';

$navMain = 'index.php';
$navOffers = 'index.php#offers';
$navAbout = 'index.php#about';
$navContacts = '#';
$navFeedback = 'index.php#feedback';
$headerCenter = '<span class="mymoscow">MyMoscow</span> - агентство интересных маршрутов';
$aboutButton = '';

$leftIcons = '';
$script = "scripts/script_contacts.js";

?>
<?php include("header.php");?>
            <main>
                <section class="contacts-page">
                    <h2 class="contacts-page-title">КОНТАКТЫ</h2>
                    <p class="contacts-page-text">
                        Мы - команда тех, кто любит историю и любит Москву!
                    </p>
                    <p class="contacts-page-text">
                        Москва - это не только место по "заколачиванию денег" и "взращиванию 
                        карьеры", а ещё и бесконечно красивые памятники природы, заказники, 
                        парки, заповедники. Активный отдых в Москве и Подмосковье - это отличная 
                        возможность вырваться из душного мегаполиса куда-нибудь в "дебри", навстречу 
                        приключениям. К счастью, не все Подмосковье ещё "облагорожено" асфальтными 
                        дорожками и высоченными коттеджными заборами. Ещё встречаются места, 
                        настолько глухие и далёкие, что, очутившись там, кажется, что ты - первый 
                        человек, ступивший на эту землю.
                    </p>
                    <p class="contacts-page-text">
                        Там, где не проедет автомобилист и даже велосипедист, найдёт лазейку и 
                        откроет для себя все красоты 100% бездорожья турист, проводящий свой активный
                         отдых в Подмосковье.
                    </p>
                    <div class="contacts-flex">
                        <div class="personnel">
                            <img src="photos/man.jpg" alt="man" class="human">
                            <div>
                                <div class="personnel-name">Александр Рыбаков</div>
                                <div class="personnel-profession">директор</div>
                                <div>
                                    По всем вопросам пишите на почту:<br>
                                    <a href="mailto:rybakov@mymoscow.ru">rybakov@mymoscow.ru</a>
                                </div>
                            </div>
                            <div class="contacts-void" style="background: white; width: 10%;"></div>
                        </div>
                        <div class="personnel">
                            <img src="photos/woman.jpg" alt="man" class="human">
                            <div>
                                <div class="personnel-name">Елена Белкина</div>
                                <div class="personnel-profession">руководитель корпоративного отдела</div>
                                <div>
                                    По всем вопросам пишите на почту:<br>
                                    <a href="mailto:belkina@mymoscow.ru">belkina@mymoscow.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-flex contacts-form" style="margin-bottom: 0;">
                        <div class="contacts-flex-address">
                            <div>
                                <div class="contacts-flex-icon-1"></div>
                                <div>
                                    Москва <br>
                                    Большая Спасская, 12
                                </div>
                            </div>
                            <div>
                                <div class="contacts-flex-icon-2"></div>
                                <div>
                                    E-mail: <br>
                                    info@mymoscow.com
                                </div>
                            </div>
                            <div>
                                <div class="contacts-flex-icon-3"></div>
                                <div>
                                    Телефон:<br>
                                    8 (495) 626-46-00
                                </div>
                            </div>
                        </div>
                        <div class="contacts-flex-address">
                            <form method="POST" id="form">
                                <input type="text" name="name" placeholder="ФИО" required min=3 max=50> <br>
                                <input type="text" name="email" placeholder="E-mail" required> <br> 
                                <textarea name="message" cols="30" rows="4" placeholder="Ваше сообщение" required></textarea> <br>
                                <input type="submit" value="отправить">
                            </form>
                        </div>
                    </div>
                </section>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.984100730647!2d37.6458603156736!3d55.776147980559564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7a220c9e5f%3A0x262ed08bf1f58a9c!2z0JHQvtC70YzRiNCw0Y8g0KHQv9Cw0YHRgdC60LDRjyDRg9C7LiwgMTIsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1536795387068" 
                width="100%" height="570px" frameborder="0" style="border:0;" allowfullscreen>
                </iframe>
<?php include("footer.php");?>