<?php
require_once __DIR__ . '\Database.php';
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    $Database = new Database;
    $qry = "INSERT INTO `feedback` (`Message`, `Name`) VALUES (:message, :name)";
    $parm = array(
        ':message' => trim($_POST['message']),
        ':name' => trim($_POST['name']),
    );
    $Database->insertData($qry, $parm);
    header('Location: index.php');
}
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
    <link rel="stylesheet" href="/css/bron.min.css">
    <title>Takedas</title>
</head>

<body>
    <header>
        <section class="header headerLight">
            <div class="container">
                <div class="header_wrapper headerLight_wrapper">
                    <a href="/main/index.php"><img src="/img/logo.svg" alt="#"></a>
                    <nav>
                        <ul>
                            <li><a href="index.php#footer">Контакты</a></li>
                            <li><a href="index.php#services">Услуги</a></li>
                            <li><a href="index.php#portfolio">Портфолио</a></li>
                            <li><a href="/main/allNews.php">Новости</a></li>
                            <li><a href="/main/bron.php">Бронирование</a></li>
                            <?php if (isset($_SESSION['user_name'])) : ?>
                                <li><?= $_SESSION['user_name'] ?></li>
                            <?php else : ?>
                                <li><a href="/main/login.php">Вход</a></li>
                                <li><a href="/main/registr.php">Регистрация</a></li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="form">
            <div class="container">
                <div class="form_wrapper">
                    <form method="POST">
                        <label>Обратная связь</label>
                        <input type="name" name="name" class="input" placeholder="Имя">
                        <textarea name="message" id="textarea" cols="30" rows="10" placeholder="Сообщение"></textarea>
                        <button>Отправить</button>
                    </form>
                    <div class="contact_wrapper">
                        <div class="contact_inner">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192856.53527204753!2d37.5404269678391!3d55.58451875257459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab7d527eb1ab9%3A0x3a74bcc492e68271!2sMini-zoo.ru!5e0!3m2!1sru!2sru!4v1662929795374!5m2!1sru!2sru" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="contact_ceil_container">
                                <div class="contact_ceil">
                                    <h2>Адрес:</h2>
                                    <h2>Телефон:</h2>
                                    <h2>E-mail:</h2>
                                    <h2>График работы:</h2>
                                    <h2>Социальные сети:</h2>
                                </div>
                                <div class="contact_ceil">
                                    <p>Москва, г. Сортавала</p>
                                    <p>8 800 100 88 41</p>
                                    <p>info@zoo.ru</p>
                                    <p>10:00 — 18:00</p>
                                    <div class="contact_ceil_social">
                                        <a href="#">VK</a>
                                        <a href="#">Telegram</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        </div>
        </section>
    </main>
</body>

</html>