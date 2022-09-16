
<?php
    require_once __DIR__ . '\Database.php';
    $Database = new Database;
    $qry = "SELECT * FROM `news` LIMIT 3";
    $news = $Database->getAll($qry);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logoWhite.svg" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/css/allStyle.min.css">
    <link rel="stylesheet" href="/css/index.min.css">
    <link rel="stylesheet" type="text/css" href="/js/slick-1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/js/slick-1.8.1/slick/slick.css" />
    <title>Takedas</title>
</head>

<body>
    <header>
        <section class="header">
            <div class="container">
                <div class="header_wrapper">
                    <a href="/main/index.php"><img src="/img/logoWhite.svg" alt="#"></a>
                    <nav>
                        <ul>
                            <li><a href="#footer">Контакты</a></li>
                            <li><a href="#services">Услуги</a></li>
                            <li><a href="#portfolio">Портфолио</a></li>
                            <li><a href="/main/allNews.php">Новости</a></li>
                            <li><a href="/main/bron.php">Бронирование</a></li>
                            <?php if(isset($_SESSION['user_name'])):?>
                                <li><?=$_SESSION['user_name']?></li>
                            <?php else:?>
                                <li><a href="/main/login.php">Вход</a></li>
                                <li><a href="/main/registr.php">Регистрация</a></li>
                            <?php endif;?>
                        </ul>
                    </nav>
                </div>
            </div>
            <section class="firstDisplay">
                <div class="container">
                    <h1>Окунись в мир природы</h1>
                    <button onclick='location.href="/main/bron.php"'>Забронировать</button>
                </div>
            </section>
        </section>
    </header>
    <main>
        <section class="about">
            <div class="container">
                <div class="about_wrapper">
                    <img src="/img/index/2.png" alt="#">
                    <div class="about_text">
                        <div class="title">
                            <h2>О зоопарке</h2>
                        </div>
                        <h3>ЖИВОТНЫЕ СО ВСЕГО МИРА</h3>
                        <p>Приглашаем вас посетить единственный зоопарк в России, где можно познакомиться с огромным
                            разнообразием фауны мира. Наши звери и птицы живут в живописном месте. Зоопарк окружен
                            карельским лесом и расположен на сохраненном природном ландшафте. Естественный рельеф земли,
                            нетронутые деревья и искусственные водоемы – дом большого количества копытных, хищных и
                            птиц, занесенных в Красную книгу. Прикоснитесь к редким видам животных, погладьте ласковых
                            пони и покормите оленей. Да, за небольшим исключением, наших животных можно гладить и
                            кормить специальным угощением, которое сможете приобрести на входе — такому вниманию они
                            будут очень рады.</p>
                        <div class="about_inner">
                            <div class="about_cell">
                                <h3>500</h3>
                                <p>Животных</p>
                            </div>
                            <div class="about_cell">
                                <h3>150</h3>
                                <p>Птиц</p>
                            </div>
                            <div class="about_cell">
                                <h3>30</h3>
                                <p>Гектаров</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_wrapper second">
                    <div class="about_text">
                        <div class="title">
                            <h2>Наши животные</h2>
                        </div>
                        <h3>СОТНИ ЗВЕРЕЙ И ПТИЦ</h3>
                        <p>В нашем зоопарке живет много разных видов животных. От маленьких и проворных енотов до
                            крупных зубров, от привычных всем оленей и верблюдов до редких и экзотичных такинов. Все они
                            – наши любимые подопечные, о которых мы заботимся как о своих детях. Звери живут на
                            просторной территории под открытым небом в окружении экологически чистых озер Карелии и
                            леса. Мы сохранили максимум природных условий местности для комфортной жизни животных и
                            создали необходимую среду для тех, кому это было необходимо. Например, водоемы для
                            водоплавающих птиц. Многие из зверей любят тепло человеческих рук и с удовольствием дают
                            себя погладить. Некоторые из них, живя в зоопарке, обзавелись семьями и радуют нас
                            пополнением. Зоопарк также расширяется и за счет регулярного приобретения новых видов зверей
                            и птиц.</p>
                        <button onclick='location.href="/main/bron.php"'>Забронировать</button>
                    </div>
                    <img src="/img/index/3.png" alt="#">
                </div>
        </section>
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="title">
                    <h2>Портфолио</h2>
                </div>
                <div class="slider">
                    <div class="slide">
                        <img src="/img/index/slide1.png" alt="#">
                    </div>
                    <div class="slide">
                        <img src="/img/index/slide2.png" alt="#">
                    </div>
                    <div class="slide">
                        <img src="/img/index/slide3.png" alt="#">
                    </div>
                    <div class="slide">
                        <img src="/img/index/slide4.png" alt="#">
                    </div>
                    <div class="slide">
                        <img src="/img/index/slide5.png" alt="#">
                    </div>
                    <div class="slide">
                        <img src="/img/index/slide6.png" alt="#">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="services" id="services">
            <div class="container">
                <div class="title">
                    <h2>Услуги</h2>
                </div>
                <div class="services_wrapper">
                    <div class="services_inner">
                        <div class="services_inner_container">
                            <h2>Индивидуальная экскурсия</h2>
                            <p>от 1-9 человек</p>
                            <p>Погрузитесь в мир природы только с самыми близкими!Вы увидете и познокомитесь с многими
                                видами животных и птиц. </p>
                            <div class="services_cost">
                                <h3>Стоимость на группу</h3>
                                <p>7000 рублей</p>
                            </div>
                        </div>
                        <button onclick='location.href="/main/bron.php"'>Забронировать</button>
                    </div>
                    <div class="services_inner">
                        <div class="services_inner_container">
                            <h2>Групповая экскурсия</h2>
                            <p>от 1-9 человек</p>
                            <p>Погрузитесь в мир природы только с самыми близкими!Вы увидете и познокомитесь с многими
                                видами животных и птиц. </p>
                            <div class="services_cost">
                                <h3>Взрослый</h3>
                                <p>700 рублей</p>
                            </div>
                            <div class="services_cost">
                                <h3>500 рублей</h3>
                                <p>Дети</p>
                            </div>
                            <div class="services_cost">
                                <h3>Дети до 3х лет</h3>
                                <p>бесплатно</p>
                            </div>
                        </div>
                        <button onclick='location.href="/main/bron.php"'>Забронировать</button>
                    </div>
                    <div class="services_inner">
                        <div class="services_inner_container">
                            <h2>Самостоятельное посещение</h2>
                            <p>от 1 человека</p>
                            <p>Посмотрите на саммые удивтильные виды жифотных и птиц почувствуйте незабываемые эмоции
                            </p>
                            <div class="services_cost">
                                <h3>Взрослый</h3>
                                <p>700 рублей</p>
                            </div>
                            <div class="services_cost">
                                <h3>500 рублей</h3>
                                <p>Дети</p>
                            </div>
                            <div class="services_cost">
                                <h3>Дети до 3х лет</h3>
                                <p>бесплатно</p>
                            </div>
                        </div>
                        <button onclick='location.href="/main/bron.php"'>Забронировать</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="news_wrapper">
                    <?php foreach($news as $item):?>
                    <div class="news_inner">
                        <img src="<?=$item['ImageNews']?>" alt="#">
                        <a href="news.php?ID_News=<?=$item['ID_News']?>"><h2><?=$item['NameNews']?></h2></a>
                        <p><?=$item['DescriptionNews']?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <button onclick='location.href="/main/allNews.php"'>Посмотреть еще</button>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer" id="footer">
            <div class="container">
                <div class="footer_wrapper">
                    <div class="footer_inner">
                        <div class="footer_inner_container">
                            <div class="footer_ceil_container">
                                <div class="footer_ceil">
                                    <h2>Адрес:</h2>
                                    <h2>Телефон:</h2>
                                    <h2>E-mail:</h2>
                                    <h2>График работы:</h2>
                                    <h2>Социальные сети:</h2>
                                </div>
                                <div class="footer_ceil">
                                    <p>Москва, г. Сортавала</p>
                                    <p>8 800 100 88 41</p>
                                    <p>info@zoo.ru</p>
                                    <p>10:00 — 18:00</p>
                                    <div class="footer_ceil_social">
                                        <a href="#">VK</a>
                                        <a href="#">Telegram</a>
                                    </div>
                                </div>
                            </div>

                            <button onclick='location.href="/main/feedback.php"'>Обратная связь</button>
                            <?php if(isset($_SESSION['user_name'])):?>
                            <button onclick='location.href="/main/logout.php"'>Выйти из аккаунта</button>
                            <?php endif?>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192856.53527204753!2d37.5404269678391!3d55.58451875257459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab7d527eb1ab9%3A0x3a74bcc492e68271!2sMini-zoo.ru!5e0!3m2!1sru!2sru!4v1662929795374!5m2!1sru!2sru"
                            width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/slick-1.8.1/slick/slick.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
</body>

</html>