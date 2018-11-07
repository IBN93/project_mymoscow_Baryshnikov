<?php 
$stripe = 'blackStripe';
$title = 'MyMoscow - агентство интересных маршрутов';
$headerClass = '';
$headerStyle = '';

$navMain = '#';
$navOffers = '#offers';
$navAbout = '#about';
$navContacts = 'contacts.php';
$navFeedback = '#feedback';
$headerCenter = '<span class="mymoscow">MyMoscow</span> - агентство интересных маршрутов';
$aboutButton = '<a href="trips.php" class="stripe-button">Подробнее о нас</a>';

$leftIcons = '<div class="left-icons">
                <a href="#about" class="left-icon-1"></a>
                <a href="#photos" class="left-icon-2"></a>
                <a href="#QA" class="left-icon-3"></a>
                <a href="#contacts" class="left-icon-4"></a>
                </div>';
$script = "scripts/script.js";
?>
<?php include("header.php");?>
            <main>
                <section class="what-We-Offer" id="offers">
                    <h2>ЧТО МЫ ПРЕДЛАГАЕМ?</h2>
                    <div class="offer">Наша цель рассказать о Москве так, чтобы это было интересно всем!</div>
                    <div class="flex">
                        <div class="block">
                            <img src="icons/map.png" alt="map" class="icon">
                            <div>
                                <h3>НЕОБЫЧНЫЕ МАРШРУТЫ</h3>
                                <p>Мы обязательно порадуем тебя необычными маршрутами Москвы, 
                                которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то,
                                что никогда не знал!</p>
                            </div>
                        </div>
                        <div class="block">
                            <img src="icons/souvenir.png" alt="souvenir" class="icon">
                            <div>
                                <h3>КЛАССНЫЕ СУВЕНИРЫ</h3>
                                <p>Отличная новость! У нас появился магазин сувениров! И самое
                                примечательное, что все эти сувениры мы делаем сами! Заходи
                                к нам в гости!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="block">
                            <img src="icons/compass.png" alt="compass" class="icon">
                            <div>
                                <h3>ИНТЕРЕСНЫЕ ЭКСКУРСИИ</h3>
                                <p>За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь
                                все основные достопримечательности: Кремль, Храм Христа Спасителя,
                                так и пройдёшься по пешеходным улицам Москвы, узнаешь их историю и
                                сделаешь самые классные фотографии.</p>
                            </div>
                        </div>
                    
                        <div class="block">
                            <img src="icons/picture.png" alt="picture" class="icon">
                            <div>
                                <h3>ФОТОСЕССИИ В МОСКВЕ</h3>
                                <p>
                                    Команда <span class="brand-2">MyMoscow</span> рада провести креативные фотосессии в любом уголке Москвы.
                                    Неважно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex" style="padding-bottom: 0;">
                        <div class="block">
                            <img src="icons/discussion.png" alt="discussion" class="icon">
                            <div>
                                <h3>НОВЫЕ ЗНАКОМСТВА</h3>
                                <p>
                                    <span class="brand-2">MyMoscow</span> - это целый клуб, где после московских прогулок ты сможешь
                                    продолжить общение с теми, кому интересна Москва, знакомиться с новыми
                                    людьми и делиться впечатлениями.
                                </p>
                            </div>
                        </div>
                        
                        <div class="block">
                            <img src="icons/sun.png" alt="sun" class="icon">
                            <div>
                                <h3>ЯРКИЕ ВПЕЧАТЛЕНИЯ</h3>
                                <p>
                                    Самое важное - это яркие эмоции, которые останутся с тобой на долгое время! 
                                    Поэтому в нашей команде мы ждём именно тебя!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="who-We-Are" id="about">
                    <div class="who-We-Are-photo"></div>
                    <div class="content">
                        <h2 class="content-title">КТО МЫ ТАКИЕ</h2>
                        <p class="content-title">Мы - команда тех, кто любит историю и любит Москву!</p>
                        <p class="content-title">
                            Москва - это не только место по "заколачиванию денег" и
                            "взращиванию карьеры", а ещё и бесконечно красивые памятники
                            природы, заказники, парки, заповедники. Активный отдых в Москве
                            и Подмосковье - это отличная возможность вырваться из душного 
                            мегаполиса куда-нибудь в "дебри", навстречу приключениям. К счастью,
                            не все Подмосковье ещё "облагорожено" асфальтными дорожками и высоченными
                            коттеджными заборами. Ещё встречаются места, настолько глухие и далёкие, что,
                            очутившись там, кажется, что ты - первый человек, ступивший на эту землю.
                        </p>
                        <p class="content-title" style="margin-bottom: 40px;"> 
                            Там, где не проедет автомобилист и даже велосипедист, найдёт лазейку и откроет
                            для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в
                            Подмосковье.
                        </p>
                        <a class="button" href="trips.php">Подробнее о нас</a>
                    </div>
                </section>
                <section class="moscow-In-Photos" id="photos">
                    <h2 class="moscow-Photos-title">МОСКВА В ФОТОГРАФИЯХ</h2>
                    <p class="inPhotos">
                        Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчёты
                        и присылайте нам свои фотографии.
                    </p>
                    <div class="slider-box">
                        <div class="slider"></div>
                    </div>
                </section>
                <section class="information">
                    <h2 class="information-title">ИНФОРМАЦИЯ</h2>
                    <div class="information-type">
                        <div data-text="1" class="active">Ближайшие экскурсии</div>
                        <div data-text="2">Стоимость экскурсий</div>
                        <div data-text="3">Экскурсии на заказ</div>
                    </div>
                    <div class="information-text">
                        <div data-text="1">
                            <p>3-6 сентября - экскурсии-квест в комплексе Москва-сити.</p>
                            <p>3-7 сентября - легенды сталинских высоток.</p>
                            <p>8, 9 сентября - экскурсия "по следам Мастера и Маргариты".</p>
                            <p>7-9 сентября - легенды Московского метро.</p>
                        </div>
                        <div data-text="2" style="display: none;">
                            <p>
                                Цены варьируются от 1,5 до 3 тыс. руб в зависимости от типа экскурсии. 
                                Более подробная информация в разделе "О компании"/"Подробнее о нас".
                            </p>
                        </div>
                        <div data-text="3" style="display: none;">
                            <p>
                                Экскурсии на заказ обговариваются индивидуально. Стоимость зависит от
                                объёма программы, количества человек, времени суток и других факторов.
                                Лучший вариант для юридических лиц.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="testimonials" id="feedback">
                    <h2 class="reviews">ОТЗЫВЫ</h2>
                    <div class="testimonials-flex">
                        <div>
                            <p class="review">
                                Были с дочкой и подругой на ночной экскурсии. Всё-таки как много
                                зависит от экскурсовода! Мы все четыре часа ходили за Станиславом
                                Симоновым, как кролики. Боялись пропустить хоть одно слово. При этом
                                моей дочке - которая побывала во многих местах и с детства искушенная
                                на интересные события - была сильно увлечена.
                            </p>
                            <div style="display: flex; align-items: center; margin-left: 40px">
                                <img src="testimonials/test1.jpg" alt="testimonial-1" class="test-photo">
                                <span class="name">Екатерина Васильева</span>
                            </div>
                        </div>
                        <div>
                            <p class="review">
                                Ездили на экскурсию с семиклассниками и родителями. Всем очень
                                понравилось! Экскурсовод Михаил Борисович очень интересно, необычно и с
                                юмором рассказывал о Москве 16 века. Гибко подстраивал экскурсию под интересы 
                                и потребности слушателей, ловко "управлял" подачей автобуса, не давая
                                нам замёрзнуть. Огромное спасибо! 
                            </p>
                            <div style="display: flex; align-items: center; margin-left: 40px">
                                <img src="testimonials/test2.jpg" alt="testimonial-2" class="test-photo">
                                <span class="name">Анна Крушевская</span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="QandA" id="QA">
                    <h2 class="QandA-title">ВОПРОСЫ И ОТВЕТЫ</h2>
                </section>
                <section class="statistics">
                    <h2 class="our-stats">НАША СТАТИСТИКА</h2>
                    <div class="flex-stat">   
                        <div class="block-stat">
                            <div class="number-1">...</div>
                            <p style="font-size: 20px;">Экскурсий проведено</p>
                        </div>
                        <div class="block-stat">
                                <div class="number-2">...</div>
                                <p style="font-size: 20px;">Довольных клиентов</p>
                        </div>
                    </div>
                </section>
<?php include("footer.php");?>      